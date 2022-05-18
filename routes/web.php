<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfulencerController;
use App\Http\Controllers\BookController;

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


Route::prefix('admin')->group(function() {
    Route::prefix('infulencers')->group(function() {
        Route::get('/add', function() {
            return view('infulencers.add');
        });
    
        Route::post('/store', [InfulencerController::class, 'store'])->name('infulencers.store');
    });

    Route::prefix('books')->group(function() {
        Route::get('/add', function() {
            return view('books.add');
        });
    
        Route::post('/store', [BookController::class, 'store'])->name('books.store');    

    });
});

Route::prefix('infulencers')->group(function () {
    Route::get('/', [InfulencerController::class, 'index'])->name('infulencers.index');

});

Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('books.index');
    
});