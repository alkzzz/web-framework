<?php

// Halaman home (Single Action Controller)
Route::get('/', 'ShowHomePage')->name('home');

// Halaman admin (Single Action Controller)
Route::get('admin', 'ShowAdminPage')->name('admin');

// Halaman Daftar Artikel
Route::get('artikel', 'ArtikelController@index')->name('artikel.index');

// Halaman Detail Artikel
Route::get('artikel/{id}', 'ArtikelController@detail')->name('artikel.detail');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
