<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfulencerController;

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

Route::prefix('infulencers')->group(function () {
    Route::get('/', [InfulencerController::class, 'index'])->name('infulencers.index');

    Route::get('/add', function() {
        return view('infulencers.add');
    });

    Route::post('/store', [InfulencerController::class, 'store'])->name('infulencers.store');

});