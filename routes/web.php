<?php

Route::get('/','HomeController@index');
Route::get('/create','HomeController@create');
Route::post('store', 'HomeController@store');
Route::get('edit/{id}', 'HomeController@edit');
Route::post('update/{id}', 'HomeController@update');
Route::get('delete/{id}', 'HomeController@delete');

