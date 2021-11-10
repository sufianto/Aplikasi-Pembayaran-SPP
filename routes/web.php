<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PetugasController;

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
})->middleware('auth:user', 'checkLevel:petugas');


Route::get('/app', function () {
    return view('template.app');
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

Route::middleware(['auth:siswa'])->group(function () {
    Route::get('/siswa', function () {
        return view('siswas.index');
    });
});

Route::middleware(['auth:user', 'checkLevel:petugas'])->group(function () {
    Route::get('petugas', [PetugasController::class, 'index']);
    Route::get('petugas/pembayaran', [PetugasController::class, 'pembayaran']);
    route::get('petugas/historypembayaran', [PetugasController::class, 'history']);
});

Route::middleware(['auth:user', 'checkLevel:admin'])->group(function () {
    Route::get('/admin', function () {
        return view('admin.dashboard');
    });
    Route::resource('/admin/data-spp', 'SppController');
    Route::resource('/admin/kelas','KelasController');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

require __DIR__.'/auth.php';
