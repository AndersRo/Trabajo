<?php

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
    return view('index');
});

Route::post('/Login','LoginController@login');
Route::get('/LoadFile', 'LoadFileController@Index');
Route::post('/SaveFile', 'LoadFileController@SaveFile');
Route::post('/Cerrar', 'LoadFileController@Cerrar');
Route::get('/Login', 'LoginController@Index');
Route::post('/EliminarArchivo', 'LoadFileController@Eliminar');
