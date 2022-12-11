<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/','App\Http\Controllers\UasController@beranda');

Route::get('/jurusan/{locale?}', 'App\Http\Controllers\UasController@jurusan');
Route::get('/createjurusan/{locale?}', 'App\Http\Controllers\UasController@createjurusan');
Route::get('/savejurusan', 'App\Http\Controllers\UasController@savejurusan');
Route::get('/editjurusan/{id}', 'App\Http\Controllers\UasController@editjurusan') -> name('ubahjurusan');
Route::get('/updatejurusan/{id}', 'App\Http\Controllers\UasController@updatejurusan') -> name('modifjurusan');
Route::get('/deljurusan/{id}', 'App\Http\Controllers\UasController@deljurusan') -> name('hapusjurusan');

Route::get('/mahasiswa/{locale?}', 'App\Http\Controllers\UasController@mahasiswa');
Route::get('/createmahasiswa/{locale?}', 'App\Http\Controllers\UasController@createmahasiswa');
Route::get('/savemahasiswa', 'App\Http\Controllers\UasController@savemahasiswa');
Route::get('/editmahasiswa/{id}', 'App\Http\Controllers\UasController@editmahasiswa') -> name('ubahmahasiswa');
Route::get('/updatemahasiswa/{id}', 'App\Http\Controllers\UasController@updatemahasiswa') -> name('modifmahasiswa');
Route::get('/delmahasiswa/{id}', 'App\Http\Controllers\UasController@delmahasiswa') -> name('hapusmahasiswa');

Route::get('/dosen/{locale?}', 'App\Http\Controllers\UasController@dosen');
Route::get('/createdosen/{locale?}', 'App\Http\Controllers\UasController@createdosen');
Route::get('/savedosen', 'App\Http\Controllers\UasController@savedosen');
Route::get('/editdosen/{id}', 'App\Http\Controllers\UasController@editdosen') -> name('ubahdosen');
Route::get('/updatedosen/{id}', 'App\Http\Controllers\UasController@updatedosen') -> name('modifdosen');
Route::get('/deldosen/{id}', 'App\Http\Controllers\UasController@deldosen') -> name('hapusdosen');

Route::get('/matkul/{locale?}', 'App\Http\Controllers\UasController@matkul');
Route::get('/creatematkul/{locale?}', 'App\Http\Controllers\UasController@creatematkul');
Route::get('/savematkul', 'App\Http\Controllers\UasController@savematkul');
Route::get('/editmatkul/{id}', 'App\Http\Controllers\UasController@editmatkul') -> name('ubahmatkul');
Route::get('/updatematkul/{id}', 'App\Http\Controllers\UasController@updatematkul') -> name('modifmatkul');
Route::get('/delmatkul/{id}', 'App\Http\Controllers\UasController@delmatkul') -> name('hapusmatkul');

Route::get('/lapnilai','App\Http\Controllers\UasController@lapnilai');
Route::get('/lapkelas','App\Http\Controllers\UasController@lapkelas');
Route::get('/rekap1','App\Http\Controllers\UasController@rekap1');
Route::get('/rekap2','App\Http\Controllers\UasController@rekap2');
Route::get('/rekap3','App\Http\Controllers\UasController@rekap3');
Route::get('/rekap4','App\Http\Controllers\UasController@rekap4');