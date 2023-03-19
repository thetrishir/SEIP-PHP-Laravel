<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ServiceController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'homeView'])->name('home');

Route::get('services', [ServiceController::class, 'service'])->name('service');

Route::get('add-product', [ProductController::class, 'product'])->name('product');
Route::post('product-added', [ProductController::class, 'add'])->name('addProduct');
