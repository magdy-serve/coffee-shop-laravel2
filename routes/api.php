<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/customers', 'App\Http\Controllers\CustomerController@index');

// http://localhost:8000/api/addNewCustomers
Route::post('/addNewCustomers', 'App\Http\Controllers\CustomerController@store');

// this for customer by id vie details 
// http://localhost:8000/api/customer/32
// Route::get('/customer/{slug}', 'App\Http\Controllers\CustomerController@show');
Route::get('customers/{slug}', 'App\Http\Controllers\CustomerController@showBySlug');

Route::resource('/products', App\Http\Controllers\ProductController::class);
