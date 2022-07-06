<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/', 'EmployeesController@index');

Route::get ( '/employees','EmployeesController@create')->name('employee.create');


Route::post ( '/employees','EmployeesController@store')->name('employee.store');

Route::get( '/employees/{employee}','EmployeesController@show')->name('employee.show');

Route::get( '/employees/{employee}','EmployeesController@edit')->name('employee.edit');

Route::post ( '/employees/{employee}','EmployeesController@update')->name('employee.update');

Route::delete ( '/employees/{employee}','EmployeesController@destroy')->name('employee.destroy');





Route::post ( '/','EmployeeController@index')->name('employee.index');
