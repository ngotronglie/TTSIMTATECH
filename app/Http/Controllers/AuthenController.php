<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenController extends Controller
{
    public function formDangKy()
    {
        return view('admin.auth.register');
    }

    public function dangKy()
    {
        // dd(request()->all());

        $data = request()->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required',
        ]);

        $data['password'] = bcrypt($data['password']);

        $user = User::query()->create($data);

        $member = Role::firstOrCreate(['name' => 'member']);

        $user->roles()->attach($member->id);

        Auth::login($user);

        return redirect()->route('home');
    }

    public function formDangNhap()
    {

        return view('admin.auth.login');
    }

    public function dangNhap()
    {
        // In ra dữ liệu để kiểm tra
        $nguoidung = request()->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // dd($nguoidung);

        // Thực hiện đăng nhập
        if (Auth::attempt($nguoidung)) {
            request()->session()->regenerate();

            $user = Auth::user();

            /**
             * @var User $user
             */

            if ($user->admin()) {
                return redirect()->route('admin.dashboard');
            } else {
                return redirect()->route('home');
            }
        }

        // Nếu đăng nhập thất bại, hiển thị lỗi
        return back()->withErrors([
            'email' => 'Email không chính xác hoặc mật khẩu không đúng.',
        ])->withInput();
    }

    public function dangXuat()
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect()->route('home');
    }
}
