<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

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
 
Route::get('/', [BookController::class, 'index'])->name('home');
Route::get('/book/{id}', [BookController::class, 'show'])->name('book.show');
Route::get('/categoriy/detail/{category_id}', [BookController::class, 'category'])->name('category.detail');
Route::get('/publishers', [BookController::class, 'publishers'])->name('publishers');
Route::get('/publisher/detail/{publisher_id}', [BookController::class, 'publisher'])->name('publisher.detail');
Route::get('/contact', [BookController::class, 'contact'])->name('contact');