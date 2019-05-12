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

Route::get('siswa-login','SiswaController@showLoginForm');
Route::post('siswa-login', ['as' => 'siswa-login', 'uses' => 'SiswaController@login']);
Route::get('guru-login','GuruController@showLoginForm');
Route::post('guru-login', ['as' => 'guru-login', 'uses' => 'GuruController@login']);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/siswa', 'SiswaController');
Route::resource('/guru', 'GuruController');
Route::resource('/mapel', 'MapelController');
Route::resource('/materi', 'MateriController');
Route::resource('/pertanyaan', 'PertanyaanController');
Route::resource('/jawaban', 'JawabanController');
Route::resource('/mapel_siswa', 'Mapel_SiswaController');
Route::resource('/guru_siswa', 'Guru_SiswaController');
Route::get('/admin','AdminController@index');
Route::get('/dashboard', 'MapelController@Dashboard')->name('dashboard');
Route::get('/course/{id}', 'CourseController@index');
Route::get('/kuis','CourseController@kuis');

