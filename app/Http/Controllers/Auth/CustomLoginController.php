<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use App\Http\Model\Student;

class CustomLoginController extends Controller
{
    function login(Request $request){
        $this->validation($request);

        $type=$request->user_type;

        if($type=='teacher'){
            $this->loginasTeacher($request);
        }
        else if($type=='admin'){
            $this->loginasAdmin($request);
        }

        else if($type=='guardian'){
            $this->loginasGuardian($request);
        }

        return redirect('/login');
    }

    private function validation(Request $request){
        $this->validate($request, [
            'user_type' => 'required|string',
        ]);
        $type=$request->user_type;

        if($type=='teacher'){
            $this->valideteTeachersData($request);
        }
        else if($type=='admin'){
            $this->validateAdminData($request);
        }

        else if($type=='guardian'){
            $this->validateStudentData($request);
        }
    }

    private function valideteTeachersData(Request $request){
        $this->validate($request, [
            'teacher_id' => 'required|integer',
            'teacher_password' => 'required|string',
        ]);
    }

    private function validateAdminData(Request $request){
        $this->validate($request, [
            'admin_email' => 'required|string',
            'admin_password' => 'required|string',
        ]);
    }

    private function validateStudentData(Request $request){
        $this->validate($request, [
            'student_class' => 'required|string',
            'student_section' => 'required|string',
            'roll_no' => 'required|string',
            'student_id' => 'required|string',
         ]);
    }

    private function loginasTeacher(Request $request){
        if(Auth::guard()->attempt(
                [
                    'id'=>$request->teacher_id,
                    'password'=>$request->teacher_password,
                    'user_type'=>$request->user_type,
                ]
            )){
            return redirect()->intended();
        }
        else{
            dd('Fail');
        }
    }

    private function loginasAdmin(Request $request){
        if(Auth::guard()->attempt(
                [
                    'email'=>$request->admin_email,
                    'password'=>$request->admin_password,
                    'user_type'=>$request->user_type,
                ]
            )){
            return redirect()->intended();
        }
        else{
            return redirect()->back()->withErrors('Invalid email or password');
        }
    }

    private function loginasGuardian(Request $request){
        $student = Student::where(function($q) use($request){
            $q->where('class', $request->student_class)
              ->where('section', $request->student_section)
              ->where('roll', $request->roll_no)
              ->where('id', $request->student_id);
        })->first();

        if($student){
            //login using full information 
            // Auth::guard('student')->login($student);

            //login using student id
            Auth::guard('student')->loginUsingId($student->id);     
                   
            return redirect()->intended();
        }
        else{
            dd("Fail");
        }
    }

}
