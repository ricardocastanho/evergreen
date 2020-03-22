<?php

namespace App\Http\Controllers\Auth;

use App\Course;
use App\Http\Controllers\Controller;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditController extends Controller
{
    public function editstudent($id)
    {
        $student = Student::find($id);
        $course = Course::all();
        $edit = "true";
        if(isset($student)){
            return view('auth\register', compact('student', 'course', 'edit'));
        }
        return redirect()->route('adm.students.list');
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
}
