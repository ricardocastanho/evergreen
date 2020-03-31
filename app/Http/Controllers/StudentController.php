<?php

namespace App\Http\Controllers;

use App\CourseSubject;
use App\Student;
use App\Subjects;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct(){
        $this->middleware('auth:student');
    }

    public function index()
    {
        $student = Student::find(1);
        $coursesubject = CourseSubject::all();
        $subject = Subjects::all();
        return view('student\home', compact('student','coursesubject', 'subject'));
    }
}
