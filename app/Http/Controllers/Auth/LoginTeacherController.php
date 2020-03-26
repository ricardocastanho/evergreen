<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginTeacherController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:teacher');
    }

    public function login(Request $request){
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        $authOK = Auth::guard('teacher')->attempt($credentials, $request->remember);

        if($authOK){
            return redirect()->intended(route('teacher.home'));
        }
        return redirect()->back()->withInputs($request->only('email', 'remember'));
    }

    public function index(){
        $current = "teacher";
        return view('auth.login_users', compact('current'));
    }

}
