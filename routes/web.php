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

Route::get('generate-pdf','HomeController@generatePDF');


Route::resource('students', 'StudentController');

//Route::POST('upload', 'StudentController@upload')->name('file.upload');


Route::get('participant/{id}', 'StudentController@participant')->name('participant.show');

Route::get('/contrat', function () {
    return view('contrat');     
});