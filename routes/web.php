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

Route::get('/home/students', 'HomeController@showstudents')->name('adm.students.list');
Route::get('/home/students/edit/{id}', 'Auth\EditController@editstudent');
Route::post('/home/students/{id}', 'Auth\EditController@updatestudent')->name('update.student');
Route::get('/home/students/destroy/{id}', 'Auth\DestroyController@destroystudent');

Route::get('/home/teachers', 'HomeController@showteachers')->name('adm.teachers.list');
Route::get('/home/teachers/edit/{id}', 'Auth\EditController@editteacher');
Route::post('/home/teachers/{id}', 'Auth\EditController@updateteacher')->name('update.teacher');
Route::get('/home/teachers/destroy/{id}', 'Auth\DestroyController@destroyteacher');

Route::get('/student', 'StudentController@index')->name('student.home');
Route::get('/student/login', 'Auth\LoginStudentController@index')->name('student.login');
Route::post('/student/login', 'Auth\LoginStudentController@login')->name('student.login.submit');

Route::get('/teacher', 'TeacherController@index')->name('teacher.home');
Route::get('/teacher/login', 'Auth\LoginTeacherController@index')->name('teacher.login');
Route::post('/teacher/login', 'Auth\LoginTeacherController@login')->name('teacher.login.submit');
