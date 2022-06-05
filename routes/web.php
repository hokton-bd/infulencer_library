<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\InfulencerController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\InfulencerBookController;

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
    return view('top.index');
})->name('top');

Route::prefix('admin')->group(function() {
    Route::middleware(['auth'])->group(function () {
        
        Route::prefix('infulencers')->group(function() {
            Route::get('/add', function() {
                return view('admin.infulencers.add');
            })->name('infulencers.add');

            Route::post('/connect', [InfulencerController::class, 'connect'])->name('infulencers.connect');
        
            Route::post('/store', [InfulencerController::class, 'store'])->name('infulencers.store');

            Route::get('/edit/{id}', [InfulencerController::class, 'show'])->name('infulencers.edit');

            Route::post('/update/{id}', [InfulencerController::class, 'update'])->name('infulencers.update');

        });

        Route::prefix('books')->group(function() {
            Route::get('/add', function() {
                return view('admin.books.add');
            })->name('books.add');
        
            Route::post('/store', [BookController::class, 'store'])->name('books.store');    

        });
    });
    
});

Route::prefix('infulencers')->group(function () {
    Route::get('/', [InfulencerController::class, 'index'])->name('infulencers.index');

    Route::get('/show/{id}', [InfulencerController::class, 'show'])->name('infulencers.show');

    Route::post('/show/search', [BookController::class, 'search'])->name('search.books');

    Route::get('/show/connect/{book_id}/{infulencer_id}', [InfulencerBookController::class, 'connect'])->name('connect.books');

});

Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'index'])->name('books.index');

    Route::get('/show/{id}', [BookController::class, 'show'])->name('books.show');
});

Route::get('test/{book_id}/{infulencer_id}', [InfulencerBookController::class, 'connect']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
