<?php

use App\Http\Controllers\About;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Header;
use App\Http\Controllers\ViewHome;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('header', [Header::class, 'header']);
Route::get('/',[ViewHome::class,'viewHome']);
Route::get('about',[About::class,'about']);

