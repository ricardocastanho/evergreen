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
//Index Route
Route::get('/', function () {
    return view('index');
})->name('index');

Auth::routes();

//Admin Home Route
Route::get('home', 'HomeController@index')->name('home');
//Admin to Student's Routes
Route::get('/home/students', 'HomeController@showStudents')->name('adm.students.list');
Route::get('/home/students/create', 'Auth\RegisterController@createStudent')->name('adm.create.student');
Route::post('/home/students/create', 'Auth\RegisterController@storeStudent')->name('adm.store.student');
Route::get('/home/students/edit/{id}', 'Auth\EditController@editStudent');
Route::post('/home/students/{id}', 'Auth\EditController@updateStudent')->name('adm.update.student');
Route::get('/home/students/destroy/{id}', 'Auth\DestroyController@destroyStudent');
//Admin to Teacher's Routes
Route::get('/home/teachers', 'HomeController@showTeachers')->name('adm.teachers.list');
Route::get('/home/teachers/create', 'Auth\RegisterController@createTeacher')->name('adm.create.teacher');
Route::post('/home/teachers/create', 'Auth\RegisterController@storeTeacher')->name('adm.store.teacher');
Route::get('/home/teachers/edit/{id}', 'Auth\EditController@editTeacher');
Route::post('/home/teachers/{id}', 'Auth\EditController@updateTeacher')->name('adm.update.teacher');
Route::get('/home/teachers/destroy/{id}', 'Auth\DestroyController@destroyTeacher');
//Adnin to Course's Routes
Route::resource('/home/courses', 'CourseController');

//Student's Routes
Route::get('/student', 'StudentController@index')->name('student.home');
Route::get('/student/login', 'Auth\LoginStudentController@index')->name('student.login');
Route::post('/student/login', 'Auth\LoginStudentController@login')->name('student.login.submit');

//Teacher's Routes
Route::get('/teacher', 'TeacherController@index')->name('teacher.home');
Route::get('/teacher/login', 'Auth\LoginTeacherController@index')->name('teacher.login');
Route::post('/teacher/login', 'Auth\LoginTeacherController@login')->name('teacher.login.submit');
Route::get('/teacher/subject/{id}', 'TeacherController@subjectDetails')->name('teacher.subject.details');
