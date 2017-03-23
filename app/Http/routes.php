<?php

Route::get('/' , 'SchoolIDController@showForm');
Route::get('/show-list' , 'SchoolIDController@showList');
Route::post('/student-reg' , 'SchoolIDController@processRegistration');

Route::auth();
Route::post('/add-user' , 'SchoolIDController@processRegistration');
Route::post('/show-list' , 'SchoolIDController@showList');
Route::post('/UpdateForm' , 'SchoolIDController@ShowUpdateForm');
Route::post('/update/{id}' , 'SchoolIDController@editUser');
Route::post('/delete/{id}' , 'SchoolIDController@deleteUser');
