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


