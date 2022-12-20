<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DetailsaleproductController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Models\detailsaleproduct;
use App\Models\product;
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
Route::resource('clientes',ClientController::class);
Route::resource('ventas',SaleController::class);
Route::resource('productos',ProductController::class);
Route::resource('detalles',DetailsaleproductController::class);
