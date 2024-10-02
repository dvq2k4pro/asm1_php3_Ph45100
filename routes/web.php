<?php

use App\Http\Controllers\BookController;
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


Route::get("/", [BookController::class,"home"])->name("page.home");
// Hiển thị danh sách sách theo loại
Route::get('/category/{id}', [BookController::class, 'list'])->name('page.list');
Route::get('/book/{id}', [BookController::class, 'detail'])->name('page.detail');
Route::get('shop', [BookController::class, 'shop'])->name('page.shop');

