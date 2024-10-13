<?php


Route::get('/', 'TodoController@index');

Route::resource('todo', 'TodoController');
