<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::view('/', 'home.index')->name('home.index');