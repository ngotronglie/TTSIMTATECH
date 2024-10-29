<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\AdvertisementController;

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

// Template Admin
Route::prefix('admin')->as('admin.')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');
    Route::get('404', function () {
        return view('admin.templates.404');
    })->name('404');
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
    Route::get('faq', [HomeController::class, 'faqs'])->name('faq');
    Route::get('contact', function () {
        return view('clients.contact');
    })->name('contact');
    Route::post('contact', [HomeController::class, 'submitContact'])->name('contact.store');
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

    Route::prefix('contacts')->as('contacts.')->group(function () {
        Route::get('/', [ContactController::class, 'index'])->name('index');
        Route::get('/{id}', [ContactController::class, 'show'])->name('show');
        Route::delete('/{id}', [ContactController::class, 'destroy'])->name('destroy');
    });

    Route::prefix('faqs')->as('faqs.')->group(function () {
        Route::get('/', [FaqController::class, 'index'])->name('index');
        Route::get('/create', [FaqController::class, 'create'])->name('create');
        Route::post('/', [FaqController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [FaqController::class, 'edit'])->name('edit');
        Route::put('/{id}', [FaqController::class, 'update'])->name('update');
        Route::delete('/{id}', [FaqController::class, 'destroy'])->name('destroy');
    });
    Route::prefix('users')->as('users.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::get('/create', [UserController::class, 'create'])->name('create');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/{id}/edit', [UserController::class, 'edit'])->name('edit');
        Route::put('/{id}', [UserController::class, 'update'])->name('update');
        Route::delete('/{id}', [UserController::class, 'destroy'])->name('destroy');
    });

});
