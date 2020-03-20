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
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/student', 'StudentController@index')->name('student.home');

Route::get('/student/login', 'Auth\LoginStudentController@index')->name('student.login');
Route::post('/student/login', 'Auth\LoginStudentController@login')->name('student.login.submit');
