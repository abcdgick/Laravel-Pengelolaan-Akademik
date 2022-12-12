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
Route::fallback(function() {
    return view('404');
});


Route::get('/jurusan/{locale?}', 'App\Http\Controllers\UasController@jurusan');
Route::get('/createjurusan/{locale?}', 'App\Http\Controllers\UasController@createjurusan');
Route::post('/savejurusan', 'App\Http\Controllers\UasController@savejurusan');
Route::get('/editjurusan/{id}/{locale?}', 'App\Http\Controllers\UasController@editjurusan') -> name('ubahjurusan');
Route::post('/updatejurusan/{id}', 'App\Http\Controllers\UasController@updatejurusan') -> name('modifjurusan');
Route::post('/deljurusan/{id}', 'App\Http\Controllers\UasController@deljurusan') -> name('hapusjurusan');

Route::get('/mahasiswa/{locale?}', 'App\Http\Controllers\UasController@mahasiswa');
Route::get('/createmahasiswa/{locale?}', 'App\Http\Controllers\UasController@createmahasiswa');
Route::post('/savemahasiswa', 'App\Http\Controllers\UasController@savemahasiswa');
Route::get('/editmahasiswa/{id}/{locale?}', 'App\Http\Controllers\UasController@editmahasiswa') -> name('ubahmahasiswa');
Route::post('/updatemahasiswa/{id}', 'App\Http\Controllers\UasController@updatemahasiswa') -> name('modifmahasiswa');
Route::post('/delmahasiswa/{id}', 'App\Http\Controllers\UasController@delmahasiswa') -> name('hapusmahasiswa');

Route::get('/dosen/{locale?}', 'App\Http\Controllers\UasController@dosen');
Route::get('/createdosen/{locale?}', 'App\Http\Controllers\UasController@createdosen');
Route::post('/savedosen', 'App\Http\Controllers\UasController@savedosen');
Route::get('/editdosen/{id}/{locale?}', 'App\Http\Controllers\UasController@editdosen') -> name('ubahdosen');
Route::post('/updatedosen/{id}', 'App\Http\Controllers\UasController@updatedosen') -> name('modifdosen');
Route::post('/deldosen/{id}', 'App\Http\Controllers\UasController@deldosen') -> name('hapusdosen');

Route::get('/matkul/{locale?}', 'App\Http\Controllers\UasController@matkul');
Route::get('/creatematkul/{locale?}', 'App\Http\Controllers\UasController@creatematkul');
Route::post('/savematkul', 'App\Http\Controllers\UasController@savematkul');
Route::get('/editmatkul/{id}/{locale?}', 'App\Http\Controllers\UasController@editmatkul') -> name('ubahmatkul');
Route::post('/updatematkul/{id}', 'App\Http\Controllers\UasController@updatematkul') -> name('modifmatkul');
Route::post('/delmatkul/{id}', 'App\Http\Controllers\UasController@delmatkul') -> name('hapusmatkul');

Route::get('/lapnilai/{locale?}','App\Http\Controllers\UasController@lapnilai');
Route::get('/lapkelas/{locale?}','App\Http\Controllers\UasController@lapkelas');
Route::get('/rekap1/{locale?}','App\Http\Controllers\UasController@rekap1');
Route::get('/rekap2/{locale?}','App\Http\Controllers\UasController@rekap2');
Route::get('/rekap3/{locale?}','App\Http\Controllers\UasController@rekap3');
Route::get('/rekap4/{locale?}','App\Http\Controllers\UasController@rekap4');