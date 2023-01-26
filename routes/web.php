<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductCategoryController;
use App\Http\Controllers\ProductSubCategoryController;

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

Route::get('product-categories', [ProductCategoryController::class, 'index'])->name('product-category.index');
Route::get('product-category/add', [ProductCategoryController::class, 'addForm'])->name('product-category.add');
Route::get('product-category', [ProductCategoryController::class, 'store'])->name('product-category.store');

Route::get('product-sub-categories', [ProductSubCategoryController::class, 'index'])->name('product-sub-category.index');
Route::get('product-sub-category/add', [ProductSubCategoryController::class, 'addForm'])->name('product-sub-category.add');
Route::get('product-sub-category', [ProductSubCategoryController::class, 'store'])->name('product-sub-category.store');
