<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Student;
use App\Teacher;
use Illuminate\Http\Request;

class DestroyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function destroystudent($id)
    {
        $student = Student::find($id);
        if(isset($student)){
            $student->delete();
        }
        return redirect()->intended(route('adm.students.list'));
    }
}
