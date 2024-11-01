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

Route::resource('roles', RoleController::class);
Route::post('roles/{id}/restore', [RoleController::class, 'restore'])
    ->name('roles.restore');
Route::delete('roles/{id}/force-delete', [RoleController::class, 'forceDelete'])
    ->name('roles.forceDelete');
