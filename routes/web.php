<?php

use App\Http\Controllers\AdvertisementController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('template')->group(function () {
    Route::get('author', function () {
        return view('templates.author');
    })->name('author');
    Route::get('error', function () {
        return view('templates.error');
    })->name('error');
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

// Client
Route::group(['prefix' => '/'], function () {
    Route::get('/', function () {
        return view('clients.home');
    })->name('home');
    Route::get('category', function () {
        return view('clients.category');
    })->name('category');
    Route::get('post-detail', function () {
        return view('clients.post-detail');
    })->name('post-detail');
    // Route::get('category/{slug}/posts', [HomeController::class, 'findPostByCategory'])->name('category');
});

// Admin
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function () {
    Route::prefix('categories')->as('categories.')->group(function () { 
        Route::get('/', [CategoryController::class, 'index'])->name('index');
        Route::get('/create', [CategoryController::class, 'create'])->name('create');
        Route::post('/', [CategoryController::class, 'store'])->name('store');
        Route::get('/{slug}/edit', [CategoryController::class, 'edit'])->name('edit');
        Route::put('/{slug}', [CategoryController::class, 'update'])->name('update');
        Route::delete('/{slug}', [CategoryController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('advertisements')->as('advertisements.')->group(function () {
        Route::get('/', [AdvertisementController::class, 'index'])->name('index');
        Route::get('/create', [AdvertisementController::class, 'create'])->name('create');
        Route::post('/', [AdvertisementController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [AdvertisementController::class, 'edit'])->name('edit');
        Route::put('/{id}', [AdvertisementController::class, 'update'])->name('update');
        Route::delete('/{id}', [AdvertisementController::class, 'destroy'])->name('destroy');
        Route::get('/trashed', [AdvertisementController::class, 'trashed'])->name('trashed');
        Route::patch('/{id}/restore', [AdvertisementController::class, 'restore'])->name('restore');
        Route::delete('/{id}/force-delete', [AdvertisementController::class, 'forceDelete'])->name('force-delete');
    });
});
