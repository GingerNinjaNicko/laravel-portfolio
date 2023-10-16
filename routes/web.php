<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\ContactUsController;

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

Route::view('/', 'welcome')->name('welcome');

Route::post('/contact-us', [ContactUsController::class, 'store'])->name('contact-us');

// Auth::routes();

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/examples')->group(function () {
    Route::prefix('/merch')->name('examples.merch.')->group(function () {
        Route::get('/', [MerchController::class, 'index'])->name('index');
        Route::get('/create', [MerchController::class, 'create'])->name('create');
        Route::post('/', [MerchController::class, 'store'])->name('store');
        Route::get('/{merch}', [MerchController::class, 'show'])->name('show');
        Route::get('/{merch}/edit', [MerchController::class, 'edit'])->name('edit');
        Route::put('/{merch}', [MerchController::class, 'update'])->name('update');
        Route::delete('/{merch}', [MerchController::class, 'destroy'])->name('destroy');
    });
});
