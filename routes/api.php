<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

//Group Authication User

Route::post('/register', 'App\Http\Controllers\Api\AuthController@register');
Route::post('/login', 'App\Http\Controllers\Api\AuthController@login');
Route::post('/logout', 'App\Http\Controllers\Api\AuthController@logout');
Route::post('/resetpassword', 'App\Http\Controllers\Api\AuthController@resetpassword');
Route::post('/forgetPassword', 'App\Http\Controllers\Api\AuthController@forgetPassword');
// End Group Authication User



//List Of Categories && products

Route::get('/listofCategories', 'App\Http\Controllers\Api\CategoryController@listofCategories');
Route::get('/listofProducts', 'App\Http\Controllers\Api\ProductController@listofProducts');
Route::get('/detailProducts', 'App\Http\Controllers\Api\ProductController@detailProducts');


// End List Of Categories && products
