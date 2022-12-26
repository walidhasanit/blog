<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/detail', [HomeController::class, 'productDetail'])->name('detail');
Route::get('/blog/detail/{id}', [HomeController::class, 'blogDetail'])->name('blog.detail');

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/add-blog', [BlogController::class, 'index'])->name('add.blog');
    Route::post('/add-blog', [BlogController::class, 'create'])->name('new.blog');
    Route::get('/manage-blog', [BlogController::class, 'manage'])->name('manage.blog');
    Route::get('/edit-blog/{id}', [BlogController::class, 'edit'])->name('edit.blog');
    Route::get('/detail-blog/{id}', [BlogController::class, 'detail'])->name('detail.blog');
    Route::get('/update/blog-status/{id}', [BlogController::class, 'status'])->name('update.blog-status');
    Route::post('/update-blog/{id}', [BlogController::class, 'update'])->name('update.blog');
    Route::get('/delete-blog/{id}', [BlogController::class, 'delete'])->name('delete.blog');

});
