<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;


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

Route::get('/', function () {
  return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'ProfileController@index')->name('profile');
Route::put('/profile', 'ProfileController@update')->name('profile.update');

Route::get('/about', function () {
  return view('about');
})->name('about');

Route::get('/kelas', function () {
  return view('kelas');
})->name('kelas');

Route::get('/kelas', [KelasController::class, 'index'])->name('kelas.index');
Route::get('/kelas/create', [KelasController::class, 'create'])->name('kelas.create');
Route::post('/kelas', [KelasController::class, 'store'])->name('kelas.store');
Route::get('/kelas/{id}', [KelasController::class, 'show'])->name('kelas.show');
Route::delete('/kelas/{id}', [KelasController::class, 'destroy'])->name('kelas.destroy');
Route::get('/kelas/{id}/edit', [KelasController::class, 'edit'])->name('kelas.edit');
Route::put('/kelas/{id}', [KelasController::class, 'update'])->name('kelas.update');
Route::delete('kelas/{id}/archive', [KelasController::class, 'archive'])->name('kelas.archive');

// Absensi
Route::get('/kelas/{id}/absensi', [KelasController::class, 'showAbsensi'])->name('kelas.showAbsensi');
Route::get('/kelas/{id}/absensi/create', [KelasController::class, 'createAbsensi'])->name('kelas.createAbsensi');
Route::post('/kelas/{id}/absensi', [KelasController::class, 'storeAbsensi'])->name('kelas.storeAbsensi');
Route::get('/kelas/{id}/absensi/{absensi_id}', [KelasController::class, 'showAbsensiDetail'])->name('kelas.showAbsensiDetail');

// Mahasiswa
Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
Route::get('/mahasiswa/absensi', [MahasiswaController::class, 'indexAbsensi'])->name('mahasiswa.indexAbsensi');
Route::post('/mahasiswa/absensi', [MahasiswaController::class, 'storeAbsensi'])->name('mahasiswa.storeAbsensi');
