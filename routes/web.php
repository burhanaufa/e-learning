<?php
use App\Http\Controllers\MapelController;

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

Route::get('/login/siswa', 'Auth\LoginController@showSiswaLoginForm');
Route::get('/login/guru', 'Auth\LoginController@showGuruLoginForm');
Route::get('/register/siswa', 'Auth\RegisterController@showSiswaRegisterForm');
Route::get('/register/guru', 'Auth\RegisterController@showGuruRegisterForm');

Route::post('/login/siswa', 'Auth\LoginController@siswaLogin');
Route::post('/login/guru', 'Auth\LoginController@guruLogin');
Route::post('/register/siswa', 'Auth\RegisterController@createSiswa');
Route::post('/register/guru', 'Auth\RegisterController@createGuru');

Route::view('/home', 'home')->middleware('auth');
Route::view('/student', 'siswa')->middleware('auth');
Route::view('/teacher', 'guru')->middleware('auth');;

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/siswa', 'SiswaController');
Route::resource('/guru', 'GuruController');
Route::resource('/mapel', 'MapelController');
Route::resource('/materi', 'MateriController');
Route::resource('/pertanyaan', 'PertanyaanController');
Route::resource('/jawaban', 'JawabanController');
Route::resource('/mapel_siswa', 'Mapel_SiswaController');
Route::resource('/guru_siswa', 'Guru_SiswaController');
Route::get('/dashboard', 'MapelController@Dashboard')->name('dashboard');
Route::get('/course/{id}', 'CourseController@index');

