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
    return view('welcome');
});

Route::resource('anggotas','AnggotasController');
Route::resource('bukus','Controller');
Route::resource('dipinjams','BukusController');
Route::resource('kategoris','KategorisController');
Route::resource('mempunyais','MempunyaisController');
Route::resource('penerbits','PenerbitsController');
Route::resource('pengarangs','PengarangsController');
Route::resource('petugass','PetugassController');
Route::resource('raks','RaksController');
Route::resource('transkems','TranskemsController');
Route::resource('transpims','TranspimsController');