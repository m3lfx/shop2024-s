<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

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

Route::get('/', [ItemController::class, 'getItems'])->name('getItems');
Route::get('add-to-cart/{id}', [ItemController::class, 'addToCart'])->name('addToCart');
Route::get('shopping-cart', [ItemController::class, 'getCart'])->name('getCart');
Route::get('reduce/{id}', [ItemController::class, 'getReduceByOne'])->name('reduceByOne');

// Route::get('reduce/{id}', [
//     'uses' => 'productController@getReduceByOne',
//     'as' => 'product.reduceByOne'
// ]);
// Route::get('remove/{id}', [
//     'uses' => 'productController@getRemoveItem',
//     'as' => 'product.remove'
// ]);
Route::resource('items', ItemController::class);
