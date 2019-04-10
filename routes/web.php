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
Route::resource('/pertanyaan','PertanyaanController');
Route::resource('/jawaban','JawabanController');
Route::resource('/mapel_siswa','Mapel_SiswaController');
Route::resource('/guru_siswa','Guru_SiswaController');
Route::get('/admin','AdminController@index');
Route::get('siswa-login', 'Auth\SiswaLoginController@showLoginForm');

Route::post('siswa-login', ['as'=>'siswa-login','uses'=>'Auth\SiswaLoginController@login']);
Route::get('guru-login', 'Auth\GuruLoginController@showLoginForm');

Route::post('guru-login', ['as'=>'guru-login','uses'=>'Auth\GuruLoginController@login']);
Route::get('/dashboard', function () {
    return view('courses.dashboard');
});
Route::get('/fisika', function () {
    return view('courses.fisika');
});
Route::get('/kimia', function () {
    return view('courses.kimia');
});
Route::get('/matematika', function () {
    return view('courses.matematika');
});
Route::get('/bindo', function () {
    return view('courses.bindo');
});
Route::get('/binggris', function () {
    return view('courses.binggris');
});
Route::get('/bio', function () {
    return view('courses.bio');
});
