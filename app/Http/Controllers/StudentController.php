<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Model\Student;

class StudentController extends Controller
{
    public function AddStudentView(){
    	return view('adminpanel.addStudent');
    }

    public function AddStudent(Request $request){
    	// dd($request);
    	$id=Student::create($request->all());
    	dd($id->id);
    }
}
