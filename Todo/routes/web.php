<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

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
})->name('home');


Route::get('/email','App\Http\Controllers\TodoController@send_email');

Route::view('form','welcome');
Route::post('submit','App\Http\Controllers\TodoController@save');

Route::get('list','App\Http\Controllers\TodoController@list')->name('list');

Route::get('delete/{id}','App\Http\Controllers\TodoController@delete')->name('delete');

Route::get('edit/{id}','App\Http\Controllers\TodoController@edit')->name('edit');

Route::post('edit','App\Http\Controllers\TodoController@update')->name('update');

// Route::post('email/{id}','App\Http\Controllers\TodoController@edit')->name('email');


Route::get('/send-todoData','App\Http\Controllers\todoDataController@sendTodoNotification');