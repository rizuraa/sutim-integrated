<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StockController;
use App\Http\Controllers\PoController;
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

    // PO GROUP ROUTES
    Route::get('/add-po', function () {
        return view('admin.addpo');
    })->name('admin.tambahDataPo');

    Route::get('/add-po', [PoController::class, 'create'])->name('admin.addpo');

    // view detail
    Route::get('/po-detail', function () {
        return view('admin.detailpo');
    })->name('admin.detailpo');

    Route::get('/bar', function () {
        return view('admin.bar');
    })->name('admin.bar');    

    Route::get('/kitchen', function () {
        return view('admin.kitchen');
    })->name('admin.kitchen');

    // prduct
    // Route::get('/product', function () {
    //     return view('admin.product');
    // })->name('admin.product');
    
    // CRUD PRODUCT
    Route::get('/product', [StockController::class, 'index'])->name('admin.product');
    Route::get('/admin/product/create', [StockController::class, 'create'])->name('admin.product.create');
    Route::post('/admin/product', [StockController::class, 'store'])->name('admin.product.store');
    Route::put('/admin/product/{id}', [StockController::class, 'update'])->name('admin.product.update');
    Route::delete('/admin/product/{id}', [StockController::class, 'destroy'])->name('admin.product.destroy');
});

// kitchen route group
Route::middleware(['kitchen'])->prefix('kitchen')->group(function () {
    Route::get('/', function(){
        return view('kitchen.index');
    })->name('kitchen.index');

    Route::get('/request', function(){
        return view('kitchen.request');
    })->name('kitchen.request');
});


// bar route group
Route::middleware(['bar'])->prefix('bar')->group(function () {
    // index route bar
    Route::get('/', function(){
        return view('bar.index');
    })->name('bar');

    Route::get('/request', function(){
        return view('bar.request');
    })->name('bar.request');
});