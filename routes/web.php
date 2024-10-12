<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/roloe', [RoleController::class, 'index'])->name('roles.index');        // Lấy danh sách tất cả roles
Route::get('/create', [RoleController::class, 'create'])->name('roles.create'); // Hiển thị form tạo mới role
Route::post('/', [RoleController::class, 'store'])->name('roles.store');        // Tạo mới một role
Route::get('/{role}', [RoleController::class, 'show'])->name('roles.show');     // Lấy thông tin chi tiết của một role
Route::get('/{role}/edit', [RoleController::class, 'edit'])->name('roles.edit'); // Hiển thị form chỉnh sửa role
Route::put('/{role}', [RoleController::class, 'update'])->name('roles.update');  // Cập nhật một role
Route::delete('/{role}', [RoleController::class, 'destroy'])->name('roles.destroy'); // Xóa một role