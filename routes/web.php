<?php

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

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/categories', function () {
    return view('categories');
})->name('categories');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/basket', function () {
    return view('basket');
})->name('basket');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');
