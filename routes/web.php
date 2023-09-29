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
// Menggunakan route group untuk mengelompokkan route dengan middleware dan prefix
Route::middleware(['admin'])->prefix('admin')->group(function () {    
    // Route untuk halaman PO    
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.admin');

    Route::get('/po', function () {
        return view('admin.po');
    })->name('admin.po');    

    Route::get('/bar', function () {
        return view('admin.bar');
    })->name('admin.bar');    

    Route::get('/kitchen', function () {
        return view('admin.kitchen');
    })->name('admin.kitchen');    
});

// kitchen
Route::get('kithcen', function(){
    return view('/kitchen/admin');
})->name('kitchen')->middleware('kitchen'); 

// bar
Route::get('bar', function(){
    return view('/bar/bar');
})->name('bar')->middleware('bar'); 