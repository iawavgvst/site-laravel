<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Auth;
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

Route::group(['namespace' => 'Main'], function () {
    Route::get('/index.html', [IndexController::class, '__invoke'])->name('index');
});

Auth::routes();

Route::get('/post.html', [PostController::class, '__invoke'])->name('posts.index');
Route::get('/about.html', [AboutController::class, '__invoke'])->name('about.index');
Route::get('/contact.html', [ContactController::class, '__invoke'])->name('contact.index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', [PostController::class, '__invoke'])->name('admin.post.index');
    });
});
