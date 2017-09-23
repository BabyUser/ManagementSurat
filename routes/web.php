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
// form Cobak
Route::get('/blog', 'BlogController@index');
Route::get('/blog/create', 'BlogController@create');
Route::post('/blog', 'BlogController@store');
Route::get('/blog/{id}', 'BlogController@show');
Route::get('/blog/{id}/edit', 'BlogController@edit');
Route::put('/blog/{id}', 'BlogController@update');
Route::delete('/blog/{id}', 'BlogController@destroy');
// akhir cobak

// Tugas Sekolah
Route::group(['prefix' => 'dashboard', 'as' => 'admin.', 'namespace' => 'admin' ], function()
{
  Route::get('/','AdminController@index')->name('dashboard');
  Route::get('/profile', 'AdminController@profile')->name('profile');

  Route::group(['prefix' => 'mailbox'], function()
  {
    Route::get('inbox','AdminController@inbox')->name('inbox');
    Route::get('compose','AdminController@compose')->name('compose');
  });
  Route::group(['prefix' => 'students'], function()
  {
    Route::get('list', 'StudentsController@list')->name('ListStudents');
    Route::get('list/delete/{nis}', 'StudentsController@destroy')->name('destroy');
    Route::get('list/trash', 'StudentsController@trash')->name('trashStudents');

  });
});
