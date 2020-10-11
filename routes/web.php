<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/','App\Http\Controllers\StudentController@index');
Route::post('/store','App\Http\Controllers\StudentController@store');
Route::get('/list','App\Http\Controllers\StudentController@list')->name('list');
Route::delete('/{id}/delete','App\Http\Controllers\StudentController@delete');
Route::get('/{id}/show','App\Http\Controllers\StudentController@show');
Route::put('/{id}/update','App\Http\Controllers\StudentController@update');
