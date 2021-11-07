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

Route::get('/petugas', function () { 
    return view('petugas.index'); 
})->middleware('checkLevel:petugas');


Route::get('/app', function () {
    return view('template.app');
});
Route::get('/admin', function () {
    return view('admin.dashboard');
});

Route::get('/login2', function () {
    return view('auth.login2');
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

Route::get('/pembayaran', function () {
    return view('petugas.pembayaran');
});

Route::get('/siswa', function () {
    return view('siswas.index');
});


Route::get('/admin/kelas', function () {
    return view('admin.kelas.index');
});
Route::get('/admin/kelas/create', function () {
    return view('admin.kelas.create');
});
Route::get('/admin/kelas/edit', function () {
    return view('admin.kelas.edit');
});

route::resource('/admin/data-spp', 'SppController');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
