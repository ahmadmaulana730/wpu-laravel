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
// route::get('/', 'PagesController@home');
// route::get('/about', 'PagesController@about');
// route::get('/mahasiswa', 'MahasiswaController@index');

// route::get('/students', 'StudentsController@index');
// route::get('/students/create', 'StudentsController@create');
// route::get('/students/{student}', 'StudentsController@show');
// route::post('/students', 'StudentsController@store');

Route::resource('students', 'StudentsController');
