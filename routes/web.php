<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers\StudentController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//Route::resource('students',"StudentController");
Route::get('/','StudentController@index');
Route::get('/edit/{id}',"StudentController@edit");
Route::get('/edit/{show}',"StudentController@show");
Route::get('/create',"StudentController@create");
Route::get('/store',"StudentController@store");
Route::get('/update/{id}',"StudentController@update");
Route::get('/delete/{id}' ,"StudentController@delete");
// Route::get('/create' ,"RegistrationsController@index");
