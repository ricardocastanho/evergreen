<?php

namespace App\Http\Controllers;

use App\CourseSubject;
use App\Student;
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
        $id = Auth::user()->id;
        $student = Student::find($id);
        $coursesubject = CourseSubject::all();
        $subject = Subjects::all();
        return view('student\home', compact('student','coursesubject', 'subject'));
    }
}
