<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController; //PostControllerクラスをインポート

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
Route::get('/posts/{post}/edit', [PostController::class ,'edit']);
Route::put('/posts/{post}', [PostController::class ,'update']);
Route::get('/posts/{post}',[PostController::class ,'show']);
Route::post('/posts/',[PostController::Class,'store']);
Route::get('/posts/create',[PostController::Class,'create']);
Route::get('/',[PostController::class, 'index']);

