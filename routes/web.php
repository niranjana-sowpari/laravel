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

Route::get('/', function () { return view('welcome'); });

/*Route::get('/test/{id}', function ($id) { 
	echo $id;
	return view('test'); });*/
 
Route::view('/home','home');   // but in case of variables in the url
// we can't use this way because we would neeed to call the functtion with that variable
// as the  parameter which is not happening here!

Route::get('/user/{id}','App\Http\Controllers\User@index');