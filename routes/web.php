<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\Post\AdminController;
use App\Http\Controllers\Admin\Post\CreateController;
use App\Http\Controllers\Admin\Post\DestroyController;
use App\Http\Controllers\Admin\Post\EditController;
use App\Http\Controllers\Admin\Post\MainController;
use App\Http\Controllers\Admin\Post\UpdateController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Admin\User\UserCreateController;
use App\Http\Controllers\Admin\User\UserDestroyController;
use App\Http\Controllers\Admin\User\UserEditController;
use App\Http\Controllers\Admin\User\UserShowController;
use App\Http\Controllers\Admin\User\UserStoreController;
use App\Http\Controllers\Admin\User\UserUpdateController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Post\IndexController;
use App\Http\Controllers\Post\ShowController;
use App\Http\Controllers\Post\StoreController;
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
    Route::post('/index.html', [StoreController::class, '__invoke'])->name('post.store');
    Route::get('/index.html/{post}', [ShowController::class, '__invoke'])->name('post.show');
});

Route::get('/admin', [AdminController::class, '__invoke'])->name('admin');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {
    Route::group(['namespace' => 'Post'], function () {
        Route::get('/post', [MainController::class, '__invoke'])->name('admin.post.index');
        Route::get('/post/create', [CreateController::class, '__invoke'])->name('admin.post.create');
        Route::get('/post/{post}/edit', [EditController::class, '__invoke'])->name('admin.post.edit');
        Route::patch('/post/{post}', [UpdateController::class, '__invoke'])->name('admin.post.update');
        Route::delete('/post/{post}', [DestroyController::class, '__invoke'])->name('admin.post.delete');
    });
    Route::group(['namespace' => 'User'], function () {
        Route::get('/user', [UserController::class, '__invoke'])->name('admin.user.index');
        Route::get('/user/create', [UserCreateController::class, '__invoke'])->name('admin.user.create');
        Route::post('/user', [UserStoreController::class, '__invoke'])->name('admin.user.store');
        Route::get('/user/{user}', [UserShowController::class, '__invoke'])->name('admin.user.show');
        Route::get('/user/{user}/edit', [UserEditController::class, '__invoke'])->name('admin.user.edit');
        Route::patch('/user/{user}', [UserUpdateController::class, '__invoke'])->name('admin.user.update');
        Route::delete('/user/{user}', [UserDestroyController::class, '__invoke'])->name('admin.user.delete');
    });
});

Route::get('/about.html', [AboutController::class, '__invoke'])->name('about.index');
Route::get('/contact.html', [ContactController::class, '__invoke'])->name('contact.index');
Route::get('/faq.html', [FaqController::class, '__invoke'])->name('faq.index');

Route::get('/index.html/delete', [IndexController::class, 'delete']);

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');




