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
    return view('welcome');
});

Route::get('studentinsert','StudentController@std');
Route::post('adddata','StudentController@insert');
Route::get('allstudents','StudentController@show');
Route::get('update/{id}','StudentController@update');
Route::post('updatestore/{id}','StudentController@updatestore');
Route::get('deletestd/{id}','StudentController@delete');