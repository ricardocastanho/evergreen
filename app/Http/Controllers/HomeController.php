<?php

namespace App\Http\Controllers;

use App\Subjects;
use App\Teacher;
use Illuminate\Http\Request;
use App\Student;
use App\Course;

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
    public function showstudents()
    {
        $students = Student::all();
        return view('admin\students_list', compact('students'));
    }
    public function showteachers()
    {
        $teachers = Teacher::all();
        $subjects = Subjects::all();
        return view('admin\teachers_list', compact('teachers', 'subjects'));
    }
}
