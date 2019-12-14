<?php

// Halaman home (Single Action Controller)
Route::get('/', 'ShowHomePage')->name('home');

// Halaman admin (Single Action Controller)
Route::get('dashboard', 'ShowAdminPage')->name('admin');
Route::get('dashboard/users', 'ShowDaftarUser')->name('daftar.user');
Route::delete('dashboard/users/delete/{id}', 'DeleteUser')->name('user.delete');

// Halaman Daftar Artikel
Route::get('artikel', 'GuestController@artikel')->name('artikel.index');

// Halaman Detail Artikel
Route::get('artikel/{id}', 'GuestController@detail')->name('artikel.detail');

Auth::routes();

// CRUD Artikel
Route::get('/admin/artikel', 'ArtikelController@artikel_admin')->name('artikel.admin');
Route::get('/admin/artikel/tambah', 'ArtikelController@artikel_tambah')->name('artikel.tambah');
Route::post('/admin/artikel/simpan', 'ArtikelController@artikel_simpan')->name('artikel.simpan');
Route::get('/admin/artikel/edit/{id}', 'ArtikelController@artikel_edit')->name('artikel.edit');
Route::put('/admin/artikel/update/{id}', 'ArtikelController@artikel_update')->name('artikel.update');
Route::delete('/admin/artikel/delete/{id}', 'ArtikelController@artikel_delete')->name('artikel.delete');

// Komentar
Route::post('/komentar/simpan', 'KomentarController@komentar_simpan')->name('komentar.simpan');