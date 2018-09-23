<?php


Route::get('/', 'StudentController@index')->name('home');
Route::get('create', 'StudentController@create')->name('create');
Route::post('create','StudentController@store')->name('store');
