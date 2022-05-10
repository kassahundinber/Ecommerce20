<?php

use App\Models\products;
use App\Models\Catagory;
use Illuminate\Support\Facades\Route;
use App\Http\controllers\productscontroller;
use App\Http\controllers\Catagorycontroller;

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
Route::get('/products/register', [ProductsController::class, 'register'])->name('products/register');
Route::post('/products/register', [ProductsController::class, 'store'])->name('products/register');
Route::get('/Catagory/register', [CatagoryController::class, 'register'])->name('Catagory/register');
Route::post('/Catagory/register', [CatagoryController::class, 'store'])->name('Catagory/register');


Auth::routes();
Route::get('/home', [App\Http\controllers\HomeControllers ::class, 'index'])->name('home');
Route::get('/products/list', [ProductsController::class, 'get_all'])->name('products/list');
Route::get('/Catagory/list', [CatagoryController::class, 'get_all'])->name('Catagory/list');
Route::get('/products/edit/{id}', [ProductsController::class, 'edit']);
Route::post('/products/update',[ProductsController::class,'update'])->name('products/update');
Route::get('/products/delete/{id}', [ProductsController::class, 'delete']);
Route::get('/products/search/{id}', [ProductsController::class, 'search'])->name('products/search');
//how to commit




