<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

Route::get('/', function () {
    return view('welcome');
});


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Post 
Route::get('/add/post', [App\Http\Controllers\PostController::class, 'create'])->name('add-post');
Route::post('/post',[PostController::class,'insert'])->name('insert');
Route::get('/all/post',[PostController::class,'view']);
Route::get('/post/view/{id}',[PostController::class,'singlePost']);
Route::get('/post/edit/{id}',[PostController::class,'edit']);
Route::post('/post/update',[PostController::class,'update'])->name('post-update');
Route::get('/post/delete/{id}',[PostController::class,'delete']);
