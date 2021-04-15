<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web application routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Client\Controllers')->group(function () {
    Route::resource('client', 'ClientController');
});

Route::namespace('Employee\Controllers')->group(function () {
    Route::resource('employee', 'EmployeeController');
});

Route::namespace('Provider\Controllers')->group(function () {
    Route::resource('provider', 'ProviderController');
});

Route::namespace('InternetPlan\Controllers')->group(function () {
    Route::resource('internetPlan', 'InternetPlanController');
});

Route::namespace('Solicitation\Controllers')->group(function () {
    Route::resource('solicitation', 'SolicitationController');
});
