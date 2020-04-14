<?php

namespace App\Http\Controllers;

use App\CourseSubject;
use App\Student;
use App\StudentSubject;
use App\Subjects;
use Illuminate\Support\Facades\Auth;

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
        $studentsubject = StudentSubject::all();
        $subject = Subjects::all();
        $current = "student";
        return view('student\home', compact('studentsubject', 'subject', 'current'));
    }
}
