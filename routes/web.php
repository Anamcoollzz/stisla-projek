<?php

Route::get('/masuk', 'Stisla\AutentikasiController@formMasuk')->name('masuk');
Route::post('/masuk', 'Stisla\AutentikasiController@masuk');

Route::middleware(\App\Http\Middleware\Masuk::class)->group(function(){

	Route::get('/', 'Stisla\AutentikasiController@dashboard')->name('dashboard');
	Route::get('/profil', 'Stisla\AutentikasiController@profil')->name('profil');
	Route::put('/profil', 'Stisla\AutentikasiController@perbaruiProfil')->name('profil.update');
	Route::get('/keluar', 'Stisla\AutentikasiController@keluar')->name('keluar');

});