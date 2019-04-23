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
Route::get('admin_dash', 'AdminController@index')->middleware('admin');

// protect group routes with authentication
Route::get('admin_area', ['middleware' => 'admin', function () {

  Route::get('test', function () {
    return 'Welcome Admin!';
  });
}]);

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('/siswa', 'SiswaController');
Route::resource('/guru', 'GuruController');
Route::resource('/mapel', 'MapelController');
Route::resource('/materi', 'MateriController');
Route::resource('/pertanyaan', 'PertanyaanController');
Route::resource('/jawaban', 'JawabanController');
Route::resource('/mapel_siswa', 'Mapel_SiswaController');
Route::resource('/guru_siswa', 'Guru_SiswaController');
Route::get('/admin', 'AdminController@index');
Route::get('siswa-login', 'Auth\SiswaLoginController@showLoginForm')->name('auth.siswaLogin');

Route::post('siswa-login', ['as' => 'siswa-login', 'uses' => 'Auth\SiswaLoginController@login'])->name('auth.siswaLogin');
Route::get('guru-login', 'Auth\GuruLoginController@showLoginForm');

Route::post('guru-login', ['as' => 'guru-login', 'uses' => 'Auth\GuruLoginController@alogin']);
Route::get('/dashboard', 'MapelController@Dashboard')->name('dashboard');
Route::get('/course/{id}', 'CourseController@index');

