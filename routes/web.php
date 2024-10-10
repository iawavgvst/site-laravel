<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\Post\AdminController;
use App\Http\Controllers\Admin\Post\MainController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\CreateController;
use App\Http\Controllers\Post\DestroyController;
use App\Http\Controllers\Post\EditController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
use App\Http\Controllers\Post\UpdateController;
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

Route::group(['namespace' => 'Post'], function () {
    Route::get('/index.html', [IndexController::class, '__invoke'])->name('post.index');
    Route::get('/index.html/create', [CreateController::class, '__invoke'])->name('post.create');
    Route::post('/index.html', [StoreController::class, '__invoke'])->name('post.store');
    Route::get('/index.html/{post}', [ShowController::class, '__invoke'])->name('post.show');
    Route::get('/index.html/{post}/edit', [EditController::class, '__invoke'])->name('post.edit');
    Route::patch('/index.html/{post}', [UpdateController::class, '__invoke'])->name('post.update');
    Route::delete('/index.html/{post}', [DestroyController::class, '__invoke'])->name('post.delete');
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', [MainController::class, '__invoke'])->name('admin.post.index');
    });
});

Route::get('/post.html', [PostController::class, '__invoke'])->name('sample-post.index');
Route::get('/about.html', [AboutController::class, '__invoke'])->name('about.index');
Route::get('/contact.html', [ContactController::class, '__invoke'])->name('contact.index');
Route::get('/faq.html', [FaqController::class, '__invoke'])->name('faq.index');

Route::get('/index.html/delete', [IndexController::class, 'delete']);

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/admin', [AdminController::class, '__invoke'])->name('admin');




