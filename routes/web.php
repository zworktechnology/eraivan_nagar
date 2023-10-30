<?php

use App\Http\Controllers\PlotController;
use Illuminate\Support\Facades\Route;

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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    // INDEX
    Route::middleware(['auth:sanctum', 'verified'])->get('/zworktech-eraivannagar/plot', [PlotController::class, 'index'])->name('plot.index');
    // STORE
    Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/plot/store', [PlotController::class, 'store'])->name('plot.store');
    // EDIT
    Route::middleware(['auth:sanctum', 'verified'])->post('/zworktech-eraivannagar/plot/edit/{unique_key}', [PlotController::class, 'edit'])->name('plot.edit');
    // DELETE
    Route::middleware(['auth:sanctum', 'verified'])->put('/zworktech-eraivannagar/plot/delete/{unique_key}', [PlotController::class, 'delete'])->name('plot.delete');
});
