<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
// 127.0.0.1:8000/ ==> view welcome
Route::get('/', function () {
    return view('welcome');
});

// 127.0.0.1:8000/siswa ==> <h1>SAYA SISWA</h1>
// Route::get('/siswa', function () {
//    return "<h1>SAYA SISWA</h1>";
// });

// 127.0.0.1:8000/siswa/1 ==> <h1>SAYA SISWA DENGAN ID 1</h1>
// route::get('/siswa/{id}', function ($id) {
//    return "<h1>SAYA SISWA DENGAN ID $id</h1>";
// })->where('id','[0-9]+');

// route::get('/siswa/{id}/{nama}', function ($id, $nama) {
//    return "<h1>SAYA SISWA DENGAN ID $id & NAMA $nama</h1>";
// })->where(['id'=>'[0-9]+','nama'=>'[A-Za-z]+']);

 Route::get('siswa',[SiswaController::class,'index']);
 Route::get('siswa/{id}',[SiswaController::class,'detail'])->where('id','[0-9]+');