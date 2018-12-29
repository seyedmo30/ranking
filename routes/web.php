<?php


Route::get('/', function () {
    return view('ranking.index');
});

Route::get('/best','cnt@best')->name("ranking.best");

Route::get('/comments','cnt@comments')->name("ranking.comments");

Route::get('/myrate','HomeController@myrate')->name("ranking.myrate");

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('replace', 'HomeController@replace');

Route::get('/tamrin', 'HomeController@tamrin');
