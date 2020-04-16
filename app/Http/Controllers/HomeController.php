<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseSubject;
use App\Student;
use App\Subjects;
use App\Teacher;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        return view('admin\home');
    }

    public function showStudents()
    {
        $students = Student::all();
        return view('admin\students_list', compact('students'));
    }

    public function showTeachers()
    {
        $teachers = Teacher::all();
        $subjects = Subjects::all();
        return view('admin\teachers_list', compact('teachers', 'subjects'));
    }
    public function showCourses()
    {
        $courses = Course::all();
            return view('admin\courses_list', compact('courses'));
    }
}
