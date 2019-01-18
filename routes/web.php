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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
/*Route::get('baiku', 'baikuController@index');*/
Route::get('/datatables', 'DatatablesController@getIndex')->name('datatables.index');
Route::get('/datatables/getdata', 'DatatablesController@anyData')->name('get.baiku');
Route::get('/datatables/{datatables}/edit', 'DatatablesController@edit')->name('datatables.edit');
/*Route::get('datatables', 'DatatablesController@getIndex', [
    'anyData'  => 'datatables.data',
    'getIndex' => 'datatables',
]);*/
//Route::resource('datatables', 'DatatablesController@index');
Route::resource('baiku', 'baikuController');
Route::resource('cc', 'CCtypeController');
