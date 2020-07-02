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
    return view('index');
});

Route::resource('client', 'ClientController');

Route::post('client/{id?}/delete', 'ClientController@destroy');
Route::get('client/{id?}/delete', 'ClientController@destroy');
Route::get('/client/destroy/{id}', 'ClientController@delete');

Route::get('/client', 'ClientController@index')->name('index');


Route::resource('lawyer','LawyerController');

Route::post('lawyer/{id?}/delete', 'LawyerController@destroy');
Route::get('lawyer/{id?}/delete', 'LawyerController@destroy');
Route::get('/lawyer/destroy/{id}', 'LawyerController@delete');

Route::get('/lawyer', 'LawyerController@index')->name('index');

Route::resource('cases','CasesController');

Route::post('cases/{id?}/delete', 'CasesController@destroy');
Route::get('cases/{id?}/delete', 'CasesController@destroy');
Route::get('/cases/destroy/{id}', 'CasesController@delete');

Route::get('/cases', 'CasesController@index')->name('index');

