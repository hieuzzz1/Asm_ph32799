<?php

use App\Http\Controllers\Authencation\AdminController;
use App\Http\Controllers\Authencation\AuthenController;
use App\Http\Controllers\Authencation\MemberController;
use App\Http\Controllers\Posts\PostsMemberController;
use App\Http\Middleware\isAdmin;
use App\Http\Middleware\isMember;
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

// Route::get('/', function () {
//     return view('client.home');
// });

Route::get('/', [PostsMemberController::class, 'index']);
Route::get('post/{idTL}', [PostsMemberController::class, 'tinTrongLoai']);
Route::get('search', [PostsMemberController::class, 'search'])->name('search');
Route::get('details/{idDT}', [PostsMemberController::class, 'details']);


Route::get('login', [AuthenController::class, 'showFormLogin'])->name('login');
Route::post('login', [AuthenController::class, 'handleLogin']);
Route::get('register', [AuthenController::class, 'showFormRegister'])->name('register');
Route::post('register', [AuthenController::class, 'handleRegister']);
Route::post('logout', [AuthenController::class, 'logout'])->name('logout');


Route::get('admin', [AdminController::class, 'dashboard'])
    ->name('client.admin.index')
    ->middleware(['auth', isAdmin::class]);
Route::get('member', [MemberController::class, 'dashboard'])
    ->name('client.member.home')
    ->middleware(['auth', isMember::class]);


Route::get('forgotPassword', [AuthenController::class, 'forgotPassword'])->name('forgotPassword');
Route::post('forgotPassword', [AuthenController::class, 'handleforgotPassword']);
Route::get('getPassword', [AuthenController::class, 'getPassword'])->name('getPassword');
Route::post('getPassword', [AuthenController::class, 'handleGetPassword']);
Route::get('password/reset/{token}', [AuthenController::class, 'getPassword'])->name('password.reset');
Route::post('password/reset', [AuthenController::class, 'handleGetPassword'])->name('password.update');


Route::group(['prefix' => 'admin'], function () {
    Route::get('listCate', [AdminController::class, 'listCate'])->name('listCate');
    Route::post('listCate', [AdminController::class, 'handleCate']);

    Route::post('update/{category}', [AdminController::class, 'update'])->name('update');

    Route::get('delete/{category}', [AdminController::class, 'delete'])->name('delete');
});
Route::get('edit/{category}', [AdminController::class, 'edit'])->name('edit');
