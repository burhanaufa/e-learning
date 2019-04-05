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
Route::get('/', 'SignaturesController@index')->name('home');
Route::get('sign', 'SignaturesController@create')->name('sign');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/siswa', 'SiswaController');
Route::resource('/guru', 'GuruController');
Route::resource('/mapel', 'MapelController');
Route::resource('/materi', 'MateriController');
Route::resource('/kuis', 'KuisController');
Route::resource('/pertanyaan','PertanyaanController');
Route::resource('/jawaban','JawabanController');
Route::get('/admin','AdminController@index');
Route::get('siswa-login', 'Auth\SiswaLoginController@showLoginForm');

Route::post('siswa-login', ['as'=>'siswa-login','uses'=>'Auth\SiswaLoginController@login']);
Route::get('guru-login', 'Auth\GuruLoginController@showLoginForm');

Route::post('guru-login', ['as'=>'guru-login','uses'=>'Auth\GuruLoginController@login']);
Route::get('/dashboard', function () {
    return view('courses.dashboard');
});
