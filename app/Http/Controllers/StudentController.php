<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{

    public function index(){
        $models = Student::orderBy('id','desc')->paginate(20);
        return view('student.index',['models' => $models]);
    }

    public function store(Request $request){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required ',
            'gender' => 'required ',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        Student::create($request->all());
        return redirect()->back();
    }

    public function update(Request $request,Student $student){
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'birth_date' => 'required ',
            'gender' => 'required ',
            'email' => 'required|email',
            'phone' => 'required',
        ]);
        $student->update($request->all());
        return redirect()->back();
    }

    public function destroy(Student $student){
        $student->delete();
        return redirect()->back();
    }

    
    public function show(Student $student){
        return view('student.show',['user'=>$student]);
    }

}
