<?php

use App\Http\Controllers\Api\CategoryApiController;
use App\Http\Controllers\Api\CommentApiController;
use App\Http\Controllers\Api\PostApiController;
use App\Http\Controllers\Api\TagApiController;
use App\Http\Controllers\Api\UserApiController;

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');

// Route MainController
Route::get('/komponenty', [MainController::class,'index'])->middleware('auth')->name('komponents');
Route::get('/nowy',[MainController::class,'news'])->middleware('auth')->name('newsy');
Route::post('/zapis',[MainController::class,'store'])->middleware('auth')->name('store');
Route::get('/edytuj/{id}',[MainController::class,'edit'])->middleware('auth')->name('edit');
Route::put('/zmien/{id}',[MainController::class,'update'])->middleware('auth')->name('update');
Route::delete('/destroy/{id}',[MainController::class,'destroy'])->middleware('auth')->name('destroy');

// Route API
Route::get('/simple', [App\Http\Controllers\PlaceSimpleController::class, 'index'])->middleware('auth');
Route::get('/simple/findPlace', [App\Http\Controllers\PlaceSimpleController::class, 'findPlace'])->middleware('auth');

// Route OrdersController
Route::get('/order', [OrdersController::class,'index'])->middleware('auth')->name('order');
Route::get('/nowaDostawa', [OrdersController::class,'news'])->middleware('auth')->name('nowaDostawa');
Route::post('/zapiss', [OrdersController::class,'storee'])->middleware('auth')->name('storee');
Route::get('/editDostawa/{id}',[OrdersController::class,'editt'])->middleware('auth')->name('editt');
Route::put('/zmienn/{id}',[OrdersController::class,'updatee'])->middleware('auth')->name('updatee');
Route::delete('/destroyOrder/{id}',[OrdersController::class,'destroyy'])->middleware('auth')->name('destroyy');
Route::get('/detailsOrder/{id}',[OrdersController::class,'show'])->middleware('auth')->name('details');






