<?php

use Illuminate\Support\Facades\Route;
use App\Models\Profil;
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

Route::get('/home', function () {
    return view('home');
});
Route::get('/DaftarMahasiswa', function () {
    return view('DaftarMahasiswa');
});
Route::get('/profile', function () {
    return view('profile',[
        "data" => Profil::first()
    ]);
});
