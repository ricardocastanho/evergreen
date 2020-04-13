<?php

namespace App\Http\Controllers;

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
        $current = "admin";
        return view('admin\home', compact('current'));
    }

    public function showStudents()
    {
        $students = Student::all();
        $current = "admin";
        return view('admin\students_list', compact('students', 'current'));
    }

    public function showTeachers()
    {
        $current = "admin";
        $teachers = Teacher::all();
        $subjects = Subjects::all();
        return view('admin\teachers_list', compact('teachers', 'subjects', 'current'));
    }
}
