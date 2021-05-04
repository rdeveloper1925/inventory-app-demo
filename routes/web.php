<?php

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
    return view('salesBatch.index');
});

Route::delete('/',function(){return "j";})->name('logout');
Route::put('/',function(){return "d";})->name('dashboard');

//Route for Sales Batch Controller
Route::resource('/sales_batches',\App\Http\Controllers\SalesBatchController::class);
