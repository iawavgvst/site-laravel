<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\MainController;
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
    Route::get('/index.html', [MainController::class, '__invoke'])->name('post.index');
});

Route::get('/post.html', [PostController::class, '__invoke'])->name('sample-post.index');
Route::get('/about.html', [AboutController::class, '__invoke'])->name('about.index');
Route::get('/contact.html', [ContactController::class, '__invoke'])->name('contact.index');
Route::get('/faq.html', [FaqController::class, '__invoke'])->name('faq.index');

Route::get('/index.html/create', [MainController::class, 'create'])->name('post.create');
Route::post('/index.html', [MainController::class, 'store'])->name('post.store');
Route::get('/index.html/{post}', [MainController::class, 'show'])->name('post.show');
Route::get('/index.html/{post}/edit', [MainController::class, 'edit'])->name('post.edit');
Route::patch('/index.html/{post}', [MainController::class, 'update'])->name('post.update');
Route::delete('/index.html/{post}', [MainController::class, 'destroy'])->name('post.delete');

Route::get('/index.html/delete', [MainController::class, 'delete']);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/posts', [PostController::class, '__invoke'])->name('admin.post.index');
    });
});

Route::group(['namespace' => 'Post'], function () {

});

