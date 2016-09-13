<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/crawl', 'PagesController@crawl');
Route::post('/crawl/wikipedia', 'CreateController@url');
Route::post('/crawl/random', 'CreateController@random');
Route::get('/wiki/display', 'CreateController@card');

Route::get('/delay', 'PagesController@delay');

Route::patch('/update/{id}', 'CreateController@update');
Route::patch('/trash/{id}', 'CreateController@learn');
Route::get('/delete/{id}', 'CreateController@delete');

Route::get('/about', 'PagesController@about');
Route::get('/about/aeyxabot', 'PagesController@aeyxabot');

Route::get('/cards/select', 'PagesController@select');
Route::get('/cards/{set}/study', 'PagesController@study');
Route::get('/cards/create', 'PagesController@creation');
Route::post('/create/card','CreateController@create');

Route::get('/home', 'HomeController@index');
Route::auth();
