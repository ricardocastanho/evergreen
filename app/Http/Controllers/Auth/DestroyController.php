<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Student;
use App\Teacher;

class DestroyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function destroyStudent($id)
    {
        $student = Student::find($id);
        if (isset($student)) {
            $student->delete();
        }
        return redirect()->intended(route('adm.students.list'));
    }

    public function destroyTeacher($id)
    {
        $teacher = Teacher::find($id);
        if (isset($teacher)) {
            $teacher->delete();
        }
        return redirect()->intended(route('adm.teachers.list'));
    }
}
