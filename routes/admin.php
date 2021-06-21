<?php

use Illuminate\Support\Facades\Route;

Route::prefix('admin')->middleware('guest:admin')->name('admin.')->group(function () {
    Route::get('/login', 'LoginController@getLogin');
    Route::post('/login', 'LoginController@doLogin')->name('login');
});
Route::prefix('admin')->middleware('auth:admin')->name('admin.')->group(function () {
    Route::get('/index', 'LoginController@index')->name('index');
    Route::post('/logout', 'LoginController@logout')->name('logout');
    Route::resource('company', 'CompanyController');
    Route::resource('employee', 'EmployeeController');
});
