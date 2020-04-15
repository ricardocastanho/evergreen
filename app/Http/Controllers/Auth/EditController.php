<?php

namespace App\Http\Controllers\Auth;

use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function editStudent($id)
    {
        $student = Student::find($id);
        $course = Course::all();
        $view = "student";
        if (isset($student)) {
            return view('auth\edit', compact('student', 'course', 'view'));
        }
        return redirect()->route('adm.students.list');
    }

    public function editTeacher($id)
    {
        $teacher = Teacher::find($id);
        $view = "teacher";
        if (isset($teacher)) {
            return view('auth\edit', compact('teacher', 'view'));
        }
        return redirect()->route('adm.teachers.list');
    }

    public function updateStudent(Request $request, $id)
    {
        $student = Student::find($id);
        if (isset($student)) {
            $student->name = $request->input('name');
            $student->email = $request->input('email');
            $student->course_id = $request->input('course_id');
            $student->save();
        }
        return redirect()->route('adm.students.list');
    }

    public function updateTeacher(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        if (isset($teacher)) {
            $teacher->name = $request->input('name');
            $teacher->email = $request->input('email');
            $teacher->save();
        }
        return redirect()->route('adm.teachers.list');
    }
}
