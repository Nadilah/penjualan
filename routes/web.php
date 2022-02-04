<?php

use Illuminate\Support\Facades\Route;





Route::get('/','App\Http\Controllers\PesanController@index')->name('home');
Route::post('/simpan','App\Http\Controllers\PesanController@store')->name('simpan');
Route::get('/create','App\Http\Controllers\PesanController@create')->name('buat');

Route::get('/thanks','App\Http\Controllers\PesanController@thanks')->name('thanks');

//for admin
Route::get('/adm','App\Http\Controllers\AdminController@index')->name('admin');
Route::get('/adm/pesan','App\Http\Controllers\PesanController@show')->name('tampil');

//for edit
Route::get('/adm/edit/{id}','App\Http\Controllers\PesanController@edit')->name('edit');
Route::post('/adm/update/{id}','App\Http\Controllers\PesanController@update')->name('update');

// for delete
Route::delete('/adm/delete/{id}','App\Http\Controllers\PesanController@delete')->name('delete');