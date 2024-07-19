<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CateroryControler;
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

// Route::get('/', function () {
//     return view('client.home');
// });

Route::get('/', [PostController::class, 'index']);

Route::get('/post/{idTL}', [PostController::class, 'tinTrongLoai']);

Route::get('/search', [PostController::class, 'search'])->name('search');
