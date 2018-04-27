<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('articles', 'ArticleController@index'); //List Articles
Route::get('article/{id}','ArticleController@show'); //List Single article
Route::post('article', 'ArticleController@store'); //Create New Articles
Route::put('article','ArticleController@store'); // Update Articles
Route::delete('article/{id}','ArticleController@destroy'); // delete Article