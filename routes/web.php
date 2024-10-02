<?php

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

Route::get('/home', function () {
    return view('home');
})->name('home');
Route::prefix('template')->group(function () {
    Route::get('category', function () {
        return view('templates.category');
    })->name('category');
    Route::get('author', function () {
        return view('templates.author');
    })->name('author');
    Route::get('error', function () {
        return view('templates.error');
    })->name('error');
    Route::get('blog', function () {
        return view('templates.blog');
    })->name('blog');
    Route::get('blog-detail', function () {
        return view('templates.blog-detail');
    })->name('blog-detail');
});

// Admin
Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('404', function () {
        return view('admin.templates.404');
    })->name('404');
    Route::get('contact', function () {
        return view('admin.templates.contact');
    })->name('contact');
    Route::get('faq', function () {
        return view('admin.templates.faq');
    })->name('faq');
    Route::get('login', function () {
        return view('admin.templates.login');
    })->name('login');
    Route::get('register', function () {
        return view('admin.templates.register');
    })->name('register');
    Route::get('tables-data', function () {
        return view('admin.templates.tables-data');
    })->name('tables-data');
    Route::get('tables-general', function () {
        return view('admin.templates.tables-general');
    })->name('tables-general');
    Route::get('users-profile', function () {
        return view('admin.templates.users-profile');
    })->name('users-profile');
});