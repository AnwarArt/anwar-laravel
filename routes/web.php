<?php


Route::get('/','PageCtrl@home');
Route::get('/about','PageCtrl@about');

//students
Route::get('/students','StudentsControll@index');
Route::get('/students/create','StudentsControll@create');
Route::get('/students/{student}','StudentsControll@show');
Route::post('/students','StudentsControll@store');

//mahasiswa
//Route::get('/mahasiswa','mahasiswaCtrl@index');
//Route::get('/mahasiswa/create','mahasiswaCtrl@create');
//Route::get('/mahasiswa/{mhs}','mahasiswaCtrl@show');
//Route::post('/create','mahasiswaCtrl@store');

