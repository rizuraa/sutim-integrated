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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// group routes middleware 3 role 

// admin
Route::get('admin', function(){
    return view('admin');
})->name('admin')->middleware('admin'); 

// kitchen
Route::get('kitchen', function(){
    return view('kitchen');
})->name('kitchen')->middleware('kitchen'); 

// bar
Route::get('bar', function(){
    return view('bar');
})->name('bar')->middleware('bar'); 