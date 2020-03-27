<?php

namespace App\Http\Controllers;

use App\Course;
use App\CourseSubject;
use App\Student;
use App\Subjects;
use App\Teacher;
use Illuminate\Http\Request;

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
        $subject = Subjects::all();
        $teacher = Teacher::find(1);
        return view('teacher\home', compact('subject', 'teacher'));
    }

    public function subjectDetails($id)
    {
        $subject = Subjects::find($id);
        $coursesubject = CourseSubject::all();
        $course = Course::all();
        $student = Student::all();
        return view('teacher\subject_details', compact('subject', 'coursesubject', 'course', 'student'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
