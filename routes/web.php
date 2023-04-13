<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ViewProductController;
use App\Models\Product;
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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/products', function () {
    return view('products');
})->name('products');

Route::get('/file-import',[ProductController::class,'importView'])->name('import-view');
Route::post('/import',[ProductController::class,'import'])->name('import');
Route::get('/Allproduct',[ViewProductController::class,'index'])->name('Allproducts');
