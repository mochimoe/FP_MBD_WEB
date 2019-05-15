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
Route::resource('bukus','BukusController');
Route::resource('dipinjams','DipinjamsController');
Route::resource('kategoris','KategorisController');
Route::resource('mempunyais','MempunyaisController');
Route::resource('penerbits','PenerbitsController');
Route::resource('pengarangs','PengarangsController');
Route::resource('petugass','PetugassController');
Route::resource('raks','RaksController');
Route::resource('transkems','TranskemsController');
Route::resource('transpims','TranspimsController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

#Routing Bintang
Route::get('/bintangs/view1', 'BintangsController@view1')->name('view1bintang');
Route::get('/bintangs/view2', 'BintangsController@view2')->name('view2bintang');
Route::get('/bintangs/function1', 'BintangsController@function1')->name('function1bintang');
Route::get('/bintangs/function2', 'BintangsController@function2')->name('function2bintang');
Route::get('/bintangs/procedure1', 'BintangsController@procedure1')->name('procedure1bintang');
Route::get('/bintangs/procedure2', 'BintangsController@procedure2')->name('procedure2bintang');
Route::get('/bintangs/join1', 'BintangsController@join1')->name('join1bintang');
Route::get('/bintangs/join2', 'BintangsController@join2')->name('join2bintang');