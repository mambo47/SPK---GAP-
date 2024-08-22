<?php

use App\Http\Controllers\AuthCotroller;
use App\Http\Controllers\grandhasilController;
use App\Http\Controllers\Gurucontroller;
use App\Http\Controllers\GurukController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KategoriKriteriaController;
use App\Http\Controllers\KriteriaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\nilaiKbmController;
use App\Http\Controllers\nilaipelaksanaanController;
use App\Http\Controllers\nilaiPenilaianController;
use App\Http\Controllers\nilaiperencanaanController;
use App\Http\Controllers\nilairppController;
use App\Http\Controllers\nilaiSilabusController;
use App\Http\Controllers\nilai_perencanaanController;
// use App\Http\Controllers\TotalpelakController;
use App\Http\Controllers\webcontroller;
use App\Models\kategori_kriteria;
use App\Models\total_perencanaan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


//Kriteria
Route::get('/kriteria', [Kriteriacontroller::class, 'index']);
Route::get('/kriteria/tambahkri', [Kriteriacontroller::class, 'create']);
Route::post('/kriteria/savekriteria', [Kriteriacontroller::class, 'store']);
Route::get('/kriteria/edit/{id}', [Kriteriacontroller::class, 'edit']);
Route::put('/kriteria/update/{id}', [Kriteriacontroller::class, 'update']);
Route::get('/kriteria/delete/{id}', [Kriteriacontroller::class, 'destroy']);

//Kategori
Route::get('/kategori/{kriteria}', [KategoriKriteriaController::class, 'index']);
Route::get('/tambahkategori', [KategoriKriteriaController::class, 'create']);
Route::post('/kategori/savekategori', [KategoriKriteriaController::class, 'store']);
Route::get('/kategori/edit/{id}', [KategoriKriteriaController::class, 'edit']);
Route::put('/kategori/update/{id}', [KategoriKriteriaController::class, 'update']);
Route::get('/kategori/delete/{id}', [KategoriKriteriaController::class, 'destroy']);


Auth::routes();
Route::get('/', [AuthCotroller::class, 'index']);
Route::post('/submit', [AuthCotroller::class, 'masuk']);


Route::get('/home', function () {
    return view('welcome');
});


Route::get('/tentang', function () {
    return view('tentang');
});

//Auth

Route::get('/daftar', [AuthCotroller::class, 'daftar']);
Route::post('/done', [AuthCotroller::class, 'regis']);
Route::get('/changepass', [AuthCotroller::class, 'ganti']);
Route::post('/logout', [AuthCotroller::class, 'logout']);

//Guru
Route::get('/guru', [GurukController::class, 'index']);
Route::get('/guru/tambahguru', [GurukController::class, 'create']);
Route::post('/guru/saveguru', [GurukController::class, 'store']);
Route::get('/guru/edit/{id}', [GurukController::class, 'edit']);
Route::put('/guru/update/{id}', [GurukController::class, 'update']);
Route::get('/guru/delete/{id}', [GurukController::class, 'destroy']);


//Penilaian
Route::get('/penilaian', [NilaiController::class, 'index']);
Route::get('/penilaian/tambapenilaian', [NilaiController::class, 'create']);
Route::post('/penilaian/savepenilaian', [NilaiController::class, 'store']);
Route::get('/totalpenilaian', [NilaiController::class, 'total']);
Route::post('/simpanpenilaian', [NilaiController::class, 'simpan']);
Route::get('/hasilpenilaian', [NilaiController::class, 'hasil']);
Route::get('/hitunggrandhasil', [NilaiController::class, 'hitunggrandhasil']);
Route::get('/grandhasilpenilaian', [NilaiController::class, 'grandhasil']);
Route::get('/hitung-hasil', [NilaiController::class, 'hitung_hasil']);
Route::get('/penilaian/edit/{id}', [NilaiController::class, 'edit']);
Route::put('/penilaian/update/{id}', [NilaiController::class, 'update']);
Route::get('/penilaian/delete/{id}', [NilaiController::class, 'destroy']);
Route::get('/caripenilaian', [NilaiController::class, 'cari']);
Route::get('/carihasil', [NilaiController::class, 'carihasil']);
Route::get('/results', [NilaiController::class, 'search']);
Route::get('/rank', [NilaiController::class, 'rank']);
Route::get('/nominasi', [NilaiController::class, 'nominasi']);


