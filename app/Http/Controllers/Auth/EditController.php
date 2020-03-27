<?php

namespace App\Http\Controllers\Auth;

use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
use App\Subjects;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function editstudent($id)
    {
        $student = Student::find($id);
        $course = Course::all();
        $current = "student";
        if(isset($student)){
            return view('auth\edit', compact('student', 'course', 'current'));
        }
        return redirect()->route('adm.students.list');
    }
    public function editteacher($id)
    {
        $teacher = Teacher::find($id);
        $current = "teacher";
        if(isset($teacher)){
            return view('auth\edit', compact('teacher', 'current'));
        }
        return redirect()->route('adm.teachers.list');
    }

    public function updatestudent(Request $request, $id)
    {
        $student = Student::find($id);
        if(isset($student)){
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->course_id = $request->input('course_id');
            $student->password = Hash::make($request->input('password'));
            $student->save();
        }
        return redirect()->route('adm.students.list');
    }

    public function updateteacher(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        if(isset($teacher)){
            $teacher->name = $request->input('name');
            $teacher->email = $request->input('email');
            $teacher->password = Hash::make($request->input('password'));
            $teacher->save();
        }
        return redirect()->route('adm.teachers.list');
    }
}
