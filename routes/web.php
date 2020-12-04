<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\homeController::class, 'index']);

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::post('/logout', [App\Http\Controllers\Auth\LoginController::class, 'logout'])->name('logout');

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);

// Password Reset Routes...
Route::get('password/reset', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showLinkRequestForm'])->name('resetPassword');
Route::post('password/email', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'sendResetLinkEmail']);
Route::get('password/reset/{token}', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'showResetForm']);
Route::post('password/reset', [\App\Http\Controllers\Auth\ForgotPasswordController::class, 'reset']);
Route::view('sinPermiso', 'sinPermiso');

Route::get('blogEntry/{id}', [\App\Http\Controllers\blogUserController::class, 'show']);

Route::middleware(['auth'])->group(function () {
    Route::get('dashboard', [\App\Http\Controllers\blogUserController::class, 'index'])->name('dashboard');
    Route::get('createBlogEntry', [\App\Http\Controllers\blogUserController::class, 'create'])->name('createBlogEntry');
    Route::post('blogEntry', [\App\Http\Controllers\blogUserController::class, 'store'])->name('blogEntry/store');    
});

Route::middleware(['auth','rolAdmin'])->group(function () {
    Route::get('importarPosts', [\App\Http\Controllers\blogUserController::class, 'import'])->name('importarPosts');
});
