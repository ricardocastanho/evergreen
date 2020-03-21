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
})->name('index');

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');

Route::get('/student', 'StudentController@index')->name('student.home');
Route::get('/teacher', 'TeacherController@index')->name('teacher.home');

Route::get('/student/login', 'Auth\LoginStudentController@index')->name('student.login');
Route::post('/student/login', 'Auth\LoginStudentController@login')->name('student.login.submit');

Route::get('/teacher/login', 'Auth\LoginTeacherController@index')->name('teacher.login');
Route::post('/teacher/login', 'Auth\LoginTeacherController@login')->name('teacher.login.submit');
