<?php

use App\Http\Controllers\FourController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SecondController;
use App\Http\Controllers\ThirdController;
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

Route::get('/', [HomeController::class, 'index'])->name('first');

Route::get('/p2', [SecondController::class, 'index'])->name('second');

Route::get('/p3', [ThirdController::class, 'index'])->name('third');

Route::get('/p4', [FourController::class, 'index'])->name('four');