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

Route::get('/user', function () {
    return "Hello word!";
});

Route::get('/siswa/{id}', function($id) {
    return "Hello word". $id;
});

Route::get('/karyawan/{id?}', function($id=null) {
    return "Hello Guru".$id;
});

Route::get('siswa',function() {
    return view('siswa');
});

Route::get('guru', function() {
    return view('guru');
});

Route::get('admin', function() {
    return view('admin');
});