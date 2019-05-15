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
Route::get('/bintangs/view1', 'BintangsController@view1')->name('bintangs.view1');
Route::get('/bintangs/view2', 'BintangsController@view2')->name('bintangs.view2');
Route::get('/bintangs/function1', 'BintangsController@function1')->name('bintangs.function1');
Route::get('/bintangs/function2', 'BintangsController@function2')->name('bintangs.function2');
Route::get('/bintangs/procedure1input', 'BintangsController@procedure1input')->name('bintangs.procedure1input');
Route::post('/bintangs/procedure1output', 'BintangsController@procedure1output')->name('bintangs.procedure1output');
Route::get('/bintangs/procedure2', 'BintangsController@procedure2')->name('bintangs.procedure2');
Route::get('/bintangs/join1', 'BintangsController@join1')->name('bintangs.join1');
Route::get('/bintangs/join2', 'BintangsController@join2')->name('bintangs.join2');