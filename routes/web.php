<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
use App\Models\Categories;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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



Route::get('/', [LoginController::class, 'index']);
Route::post('/login', [LoginController::class, 'login']);
Route::get('/login', [LoginController::class, 'loginbtn']);


Route::get('/register', [RegisterController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register']);


Route::get('/logout', [LoginController::class, 'logout']);

Route::middleware('hasRole:Admin')->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'index']);

    Route::post('/admin/books/delete/{book_id}', [AdminController::class, 'deleteBook']);

    Route::get('/admin/book/edit/{book_id}', [AdminController::class, 'editBook']);

    Route::post('/admin/book/update/{book_id}', [AdminController::class, 'updateBook']);

    Route::post('/admin/categories/delete/{category_id}', [AdminController::class, 'deleteCategory']);

    Route::get('/admin/category/edit/{category_id}', [AdminController::class, 'editCategory']);

    Route::post('/admin/category/update/{category_id}', [AdminController::class, 'updateCategory']);




});

Route::middleware('hasRole:User')->group(function () {
    Route::get('/user/dashboard', [UserController::class, 'index']);
});


Route::post('/book/request', [UserController::class, 'bookRequest']);

Route::get('/books/requests', [UserController::class, 'bookRequests']);

Route::post('/dasboard/book', [AdminController::class, 'AdminBook']);

Route::get('/dasboard/books', [AdminController::class, 'AdminBooks']);

Route::get('/dashboard/categories', [AdminController::class, 'Categories']);

Route::post('/dashboard/category', [AdminController::class, 'Category']);

Route::post('/dashboard/insertBook', [AdminController::class, 'InsertBook']);

Route::get('/dashboard/insertBook', [AdminController::class, 'InsertBooks']);
