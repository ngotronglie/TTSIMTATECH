<?php

namespace App\Http\Controllers;

use App\Models\Advertisement;
use App\Models\Category;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::where('is_active', true)->get();

        return view('home', compact('categories'));
    }

    public function categories()
    {
        $categories = Category::where('is_active', true)->get();

        return $categories;
    }

    public function findPostByCategory($slug)
    {
        $category = Category::where('slug', $slug)->posts()->latest('id')->paginate(20);

        return view('category', compact('category'));
    }

    public function advertisement()
    {
        $now = Carbon::now()->toDateTimeString(); 

        $advertisement = Advertisement::where('status', 'active')
            ->whereDate('start_date', '<=', $now) 
            ->whereDate('end_date', '>=', $now)    
            ->get();
    
        return $advertisement;
    }
}
