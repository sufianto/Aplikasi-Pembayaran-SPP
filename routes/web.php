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

Route::get('/home', function () {
    return view('welcome2');
});

Route::get('/app', function () {
    return view('template.app');
});

Route::get('/contoh', function () {
    return view('contoh-pake-template');
});

Route::get('/', function () {
    return view('auth.login');
});

Route::get('/petugas', function () {
    return view('petugas.index');
});

Route::get('/historypetugas', function () {
    return view('petugas.history');
});

Route::get('/siswa', function () {
    return view('siswas.index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
