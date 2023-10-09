<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductSearchController;

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

Route::get('/',[ProductSearchController::class, 'index'])->name('element.index');
Route::get('/search', [ProductSearchController::class, 'search'])->name('element.search');

