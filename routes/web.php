<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
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

Auth::routes();

Route::get('/home',[HomeController::class, 'index'])->name('home');

Route::get('chat',[HomeController::class, 'chat'])->name('route');

Route::prefix('post')->group(function(){
  Route::get('create',[PostController::class,'create']);
  Route::post('store',[PostController::class,'store']);
  Route::get('edit/{id}',[PostController::class,'edit']);
  Route::get('delete',[PostController::class,'delete']);
});

Route::prefix('group')->group(function(){
    Route::get('create',[GroupController::class,'create']);
    Route::post('store',[GroupController::class,'store']);
    Route::get('edit/{id}',[GroupController::class,'edit']);
    Route::get('delete',[GroupController::class,'delete']);
  });

  Route::prefix('channel')->group(function(){
    Route::get('create',[ChannelController::class,'create']);
    Route::post('store',[ChannelController::class,'store']);
    Route::get('edit/{id}',[ChannelController::class,'edit']);
    Route::get('delete',[ChannelController::class,'delete']);
  });

  Route::prefix('comment')->group(function(){
    Route::get('create',[CommentController::class,'create']);
    Route::post('store',[CommentController::class,'store']);
    Route::get('edit/{id}',[CommentController::class,'edit']);
    Route::get('delete',[CommentController::class,'delete']);
  });

  Route::prefix('profile')->group(function(){
    Route::get('create',[ProfileController::class,'create']);
    Route::post('store',[ProfileController::class,'store']);
    Route::get('edit/{id}',[ProfileController::class,'edit']);
    Route::get('delete',[ProfileController::class,'delete']);
  });