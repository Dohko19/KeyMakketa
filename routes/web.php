<?php
Auth::routes();

Route::get('/', 'PagesController@index')->name('pages.index');
Route::get('dashboard', 'PagesController@dashboard')->name('pages.dashboard');
Route::get('graficas', 'PagesController@graficas')->name('pages.graficas');
Route::get('planesaccion', 'PagesController@planesaccion')->name('pages.planes');
Route::get('reportes', 'PagesController@reportes')->name('pages.reportes');


// Route::get('/home', 'HomeController@index')->name('home');