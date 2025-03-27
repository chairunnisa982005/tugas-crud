<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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


Route::get('/', [MainController::class, 'index'])->name ('products');
Route::get('/products', [MainController::class, 'index'])->name('products.index');
Route::get('/products/create', [MainController::class, 'create'])->name('products.create');
Route::post('/products', [MainController::class, 'store'])->name('products.store');
Route::get('/products/{id}/edit', [MainController::class, 'edit'])->name('products.edit');
Route::put('/products/{id}', [MainController::class, 'update'])->name('products.update');
Route::delete('/products/{id}', [MainController::class, 'destroy'])->name('products.destroy');
