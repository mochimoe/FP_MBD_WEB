<?php
use App\Http\Controllers\ShaniasController;

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

#Routing Ais
Route::get('/aiss/view1', 'AissController@view1')->name('aiss.view1');
Route::get('/aiss/view2', 'AissController@view2')->name('aiss.view2');
Route::get('/aiss/function1', 'AissController@function1')->name('aiss.function1');
Route::get('/aiss/function2', 'AissController@function2')->name('aiss.function2');
Route::get('/aiss/procedure1', 'AissController@procedure1')->name('aiss.procedure1');
Route::get('/aiss/procedure2', 'AissController@procedure2')->name('aiss.procedure2');
Route::get('/aiss/join1', 'AissController@join1')->name('aiss.join1');
Route::get('/aiss/join2', 'AissController@join2')->name('aiss.join2');

#Routing Shania
Route::resource('shanias','ShaniasController');
Route::post('shanias','ShaniasController@func1');
Route::post('shanias','ShaniasController@func2');











Route::get('/shanias/view1', 'ShaniasController@view1')->name('shanias.view1');
Route::get('/shanias/view2', 'ShaniasController@view2')->name('shanias.view2');
Route::get('/shanias/function1', 'ShaniasController@function1')->name('shanias.function1');
Route::get('/shanias/function2', 'ShaniasController@function2')->name('shanias.function2');
Route::get('/shanias/procedure1', 'ShaniasController@procedure1')->name('shanias.procedure1');
Route::get('/shanias/procedure2', 'ShaniasController@procedure2')->name('shanias.procedure2');
Route::get('/shanias/join1', 'ShaniasController@join1')->name('shanias.join1');
Route::get('/shanias/join2', 'ShaniasController@join2')->name('shanias.join2');
