<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\BagController;
use App\Http\Controllers\BrandsDetailsController;
use App\Http\Controllers\DressController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemDetailsController;
use App\Http\Controllers\ShirtController;
use App\Http\Controllers\ShoesController;
use App\Http\Controllers\Top5BrandsController;
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

Route::get('/', [HomeController::class, 'index']);

Route::get('/item-details/{id}', [ItemDetailsController::class, 'show'])->name('item-details.show');

Route::get('/about-us', [AboutUsController::class, 'index']);

Route::prefix('/category')->group(function () {
    Route::get('/shirt', [ShirtController::class, 'index']);
    Route::get('/bag',  [BagController::class, 'index']);
    Route::get('/shoes', [ShoesController::class, 'index']);
    Route::get('/dress', [DressController::class, 'index']);
});

Route::prefix('/top-5-brands')->group(function () {
    Route::get('/', [Top5BrandsController::class, 'index'])->name('top-5-brands.index');
    Route::get('/detail/{id}', [BrandsDetailsController::class, 'index'])->name('brand-details.index');
});