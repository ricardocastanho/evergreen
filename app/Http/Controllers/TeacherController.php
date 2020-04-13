<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseSubject;
use App\Student;
use App\Subjects;
use App\Teacher;
use Illuminate\Support\Facades\Auth;

class TeacherController extends Controller
{
    public function __construct(){
        $this->middleware('auth:teacher');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth::user()->id;
        $teacher = Teacher::find($id);
        $subject = Subjects::all();
        return view('teacher\home', compact('subject', 'teacher'));
    }

    public function subjectDetails($id)
    {
        $subject = Subjects::find($id);
        $coursesubject = CourseSubject::all();
        $course = Course::all();
        $student = Student::all();
        $current = "teacher";
        return view('teacher\subject_details', compact('subject', 'coursesubject', 'course', 'student', 'current'));
    }
}
