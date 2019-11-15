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



Route::get("category/all", "categoriaController@index");
Route::post("category/store", "categoriaController@store");
Route::post("category/update/{id}", "categoriaController@update");
Route::post("category/delete/{id}", "categoriaController@delete");


Route::get("query/1/{id}", "productoController@query1");
Route::get("query/2/{nombre}", "clienteController@query2");
Route::get("query/3", "productoController@query3");
Route::get("query/4/{ciudad}", "clienteController@query4");
Route::get("query/5", "clienteController@query5");
Route::get("query/6", "productoController@query6");
Route::get("query/7", "categoriaController@query7");
Route::get("query/8", "clienteController@query8");
Route::get("query/9", "clienteController@query9");
Route::get("query/10", "clienteController@query10");
Route::get("query/11", "productoController@query11");
