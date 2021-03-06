<?php

use Illuminate\Routing\RouteGroup;

Route::middleware('auth')->group(function () {
        Route::get('/', 'DashboardController@index')->name('dashboard');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
    Route::get('/profile', 'profileController@index')->name('profile');
    Route::post('/profile/update', 'profileController@update')->name('profile.update');
});

Route::middleware(['auth', 'CekRole:1'])->group(function () {
    Route::get('/eskul/add', 'EskulController@eskulTambah')->name('eskul.add');
    Route::post('/eskul/proses', 'EskulController@prosesTambah')->name('eskul.proses');
    Route::get('/eskul/edit/{id}', 'EskulController@eskulEdit')->name('eskul.edit');
    Route::post('/eskul/update', 'EskulController@update')->name('eskul.update');
    Route::get('/eskul/hapus/{id}', 'EskulController@eskulHapus')->name('eskul.hapus');
    Route::get('/eskulDetail/{idEskul}', 'EskulDetailController@eskulDetail')->name('eskulDetail');
    Route::get('/eskulDetail/add/{idEskul}', 'EskulDetailController@eskulDetailTambah')->name('eskulDetail.add');

    Route::post('/eskulDetail/proses', 'EskulDetailController@prosesTambah')->name('eskulDetail.proses');
    Route::get('/eskulDetail/edit/{id}', 'EskulDetailController@eskulDetailEdit')->name('eskulDetail.edit');
    Route::post('/eskulDetail/update', 'EskulDetailController@update')->name('eskulDetail.update');
    Route::get('/eskulDetail/hapus/{id}/{idEskul}', 'EskulDetailController@eskulDetailHapus')->name('eskulDetail.hapus');

    Route::get('/hafalan/add', 'HafalanController@hafalanTambah')->name('hafalan.add');
    Route::post('/hafalan/proses', 'HafalanController@prosesTambah')->name('hafalan.proses');
    Route::get('/hafalan/edit/{id}', 'HafalanController@hafalanEdit')->name('hafalan.edit');
    Route::post('/hafalan/update', 'HafalanController@update')->name('hafalan.update');
    Route::get('/hafalan/hapus/{id}', 'HafalanController@hafalanHapus')->name('hafalan.hapus');

    Route::get('/hafalanDetail/{idHafalan}', 'HafalanDetailController@hafalanDetail')->name('hafalanDetail');
    Route::get('/hafalanDetail/add/{idHafalan}', 'HafalanDetailController@hafalanDetailTambah')->name('hafalanDetail.add');
    Route::post('/hafalanDetail/proses', 'HafalanDetailController@prosesTambah')->name('hafalanDetail.proses');
    Route::get('/hafalanDetail/edit/{id}', 'HafalanDetailController@hafalanDetailEdit')->name('hafalanDetail.edit');
    Route::post('/hafalanDetail/update', 'HafalanDetailController@update')->name('hafalanDetail.update');
    Route::get('/hafalanDetail/hapus/{id}/{idHafalan}', 'HafalanDetailController@hafalanDetailHapus')->name('hafalanDetail.hapus');

    Route::get('/perkembangan/add', 'PerkembanganController@perkembanganTambah')->name('perkembangan.add');
    Route::post('/perkembangan/proses', 'PerkembanganController@prosesTambah')->name('perkembangan.proses');
    Route::get('/perkembangan/edit/{id}', 'PerkembanganController@perkembanganEdit')->name('perkembangan.edit');
    Route::post('/perkembangan/update', 'PerkembanganController@update')->name('perkembangan.update');
    Route::get('/perkembangan/hapus/{id}', 'PerkembanganController@perkembanganHapus')->name('perkembangan.hapus');

    Route::get('/perkembanganDetail/{idPerkembangan}', 'PerkembanganDetailController@perkembanganDetail')->name('perkembanganDetail');
    Route::get('/perkembanganDetail/add/{idPerkembangan}', 'PerkembanganDetailController@perkembanganDetailTambah')->name('perkembanganDetail.add');
    Route::post('/perkembanganDetail/proses', 'PerkembanganDetailController@prosesTambah')->name('perkembanganDetail.proses');
    Route::get('/perkembanganDetail/edit/{id}', 'PerkembanganDetailController@perkembanganDetailEdit')->name('perkembanganDetail.edit');
    Route::post('/perkembanganDetail/update', 'PerkembanganDetailController@update')->name('perkembanganDetail.update');
    Route::get('/perkembanganDetail/hapus/{id}/{idPerkembangan}', 'PerkembanganDetailController@perkembanganDetailHapus')->name('perkembanganDetail.hapus');
    Route::get('/kelas/add', 'KelasController@kelasTambah')->name('kelas.add');
    Route::post('/kelas/proses', 'KelasController@prosesTambah')->name('kelas.proses');
    Route::get('/kelas/edit/{id}', 'KelasController@kelasEdit')->name('kelas.edit');
    Route::post('/kelas/update', 'KelasController@update')->name('kelas.update');
    Route::get('/kelas/hapus/{id}', 'KelasController@kelasHapus')->name('kelas.hapus');

    Route::get('/guru/add', 'guruController@guruTambah')->name('guru.add');
    Route::post('/guru/proses', 'guruController@prosesTambah')->name('guru.proses');
    Route::get('/guru/edit/{id}', 'guruController@guruEdit')->name('guru.edit');
    Route::post('/guru/update', 'guruController@update')->name('guru.update');
    Route::get('/guru/hapus/{id}', 'guruController@guruHapus')->name('guru.hapus');

    Route::get('/siswa/add', 'siswaController@siswaTambah')->name('siswa.add');
    Route::post('/siswa/proses', 'siswaController@prosesTambah')->name('siswa.proses');
    Route::get('/siswa/edit/{id}', 'siswaController@siswaEdit')->name('siswa.edit');
    Route::post('/siswa/update', 'siswaController@update')->name('siswa.update');
    Route::get('/siswa/hapus/{id}', 'siswaController@siswaHapus')->name('siswa.hapus');

    Route::get('/admin/add', 'adminController@adminTambah')->name('admin.add');
    Route::post('/admin/proses', 'adminController@prosesTambah')->name('admin.proses');
    Route::get('/admin/edit/{id}', 'adminController@adminEdit')->name('admin.edit');
    Route::post('/admin/update', 'adminController@update')->name('admin.update');
    Route::get('/admin/hapus/{id}', 'adminController@adminHapus')->name('admin.hapus');
});

Route::middleware(['auth', 'CekRole:1,2'])->group(function () {
    Route::get('/eskul', 'EskulController@eskul')->name('eskul');
    Route::get('/hafalan', 'HafalanController@hafalan')->name('hafalan');
    Route::get('/perkembangan', 'PerkembanganController@perkembangan')->name('perkembangan');
    Route::get('/kelas', 'KelasController@kelas')->name('kelas');
    Route::get('/guru', 'guruController@guru')->name('guru');
    Route::get('/siswa', 'siswaController@siswa')->name('siswa');
    Route::get('/admin', 'adminController@admin')->name('admin');
});



Route::middleware(['auth', 'CekRole:2'])->group(function () {
    Route::get('/raport/{id}', 'raportController@siswa')->name('raport');
    Route::get('/raport/add/{idSiswa}', 'raportController@raport')->name('raport.add');
    Route::post('/raport/proses', 'raportController@prosesTambah')->name('raport.proses');
    Route::get('/raport/edit/{id}', 'raportController@raportEdit')->name('raport.edit');
    Route::post('/raport/update', 'raportController@updateDelete')->name('raport.update');
});


Route::middleware(['auth', 'CekRole:3'])->group(function () {
    Route::get('/raport/view/{id}', 'raportController@raportView')->name('raport.view');
    Route::get('/raport/view/detail/{idSiswa}', 'raportController@raportViewDetail')->name('raport.view.detail');
    Route::get('/pdf/{idSiswa}', 'raportController@raportPDF')->name('raport.pdf');
});



