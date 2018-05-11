<?php

Route::get('/', 'PageController@index')->name("home.index");

Route::get('/dashboard', 'DashboardController@index')->middleware(["auth", "admin"])->name("dashboard.index");
Route::get("/alarms", "AlarmController@index")->middleware(["auth", "admin"]);
Route::get("/uavs", "UAVController@index")->middleware(["auth", "admin"]);

Auth::routes();

Route::redirect("/register", "/");