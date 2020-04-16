<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/token', 'Auth\LoginController@getToken');

Route::get('/articles', 'Api\PostController@index');
Route::get('/category/{category:slug}', 'Api\PostController@category');
Route::get('/author/{author:slug}', 'Api\PostController@author');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
