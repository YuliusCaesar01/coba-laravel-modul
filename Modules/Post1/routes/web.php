<?php

use Illuminate\Support\Facades\Route;
use Modules\Post1\Http\Controllers\Post1Controller;

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

Route::get('/post1', function () {
    return view('post1::index'); // Load the view from the Post1 module
})->name('post1.index');

Route::get('/post1/create', function () {
    return view('post1::create'); 
})->name('post1.create');
