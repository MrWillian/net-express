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
    Route::get('client', 'ClientController@index')->name('web.client.index');
    Route::get('client/create', 'ClientController@create')->name('web.client.create');
    Route::get('client/{client}/edit', 'ClientController@edit')->name('web.client.edit');
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

Route::namespace('Installation\Controllers')->group(function () {
    Route::resource('installation', 'InstallationController');
});

Route::namespace('ClientMap\Controllers')->group(function () {
    Route::resource('clientMap', 'ClientMapController');
});
