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

Route::get('/', function () {
    return view('welcome');
});

Route::get('HALO', function () {
    return " Halo, Selamat dayang ";
});

Route::get('/HALO2', function () {
    return "<h1>Haloo ap kabar</h1>";
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('home', function () {
    return view('welcome');
});

Route::get('projects', function () {
    return view('projects');
});

Route::get('resume', function () {
    return view('resume');
});

Route::get('thisisme', function () {
    return view('thisisme');
});

Route::get('home', function () {
    return view('welcome');
});

Route::get('company', function () {
    return view('company');
});

Route::get('sonderlab', function () {
    return view('sonderlab');
});

Route::get('validasi', function () {
    return view('validasi');
});

Route::get('perkalian','App\Http\Controllers\DosenController@index');
Route::get('biodata','App\Http\Controllers\DosenController@biodata');
Route::get('showjam/{jam}','App\Http\Controllers\DosenController@showjam');

Route::get('/formulir', 'App\Http\Controllers\DosenController@formulir');
Route::post('/formulir/proses', 'App\Http\Controllers\DosenController@proses');

//route CRUD
Route::get('/pegawai','App\Http\Controllers\PegawaiController@index');
Route::get('/pegawai/tambah','App\Http\Controllers\PegawaiController@tambah');
Route::post('/pegawai/store','App\Http\Controllers\PegawaiController@store');
Route::get('/pegawai/edit/{id}','App\Http\Controllers\PegawaiController@edit');
Route::post('/pegawai/update','App\Http\Controllers\PegawaiController@update');
Route::get('/pegawai/hapus/{id}','App\Http\Controllers\PegawaiController@hapus');

Route::get('/pegawai/cari','App\Http\Controllers\PegawaiController@cari');
Route::get('/pegawai/view/{id}','App\Http\Controllers\PegawaiController@view');

Route::get('/nilaikuliah', 'App\Http\Controllers\NilaiKuliah@NilaiKuliah');
Route::get('/nilaikuliah/tambahnilai','App\Http\Controllers\NilaiKuliah@tambahnilai');
Route::post('/nilaikuliah/store','App\Http\Controllers\NilaiKuliah@store');

//route pertemuan 5 des cewe
Route::get('/keranjangbelanja','App\Http\Controllers\KBController@indexP15');
Route::get('/keranjangbelanja/beli','App\Http\Controllers\KBController@beli');
Route::post('/keranjangbelanja/store','App\Http\Controllers\KBController@store');
Route::get('/keranjangbelanja/batal/{id}','App\Http\Controllers\KBController@batal');






