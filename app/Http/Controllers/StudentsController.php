<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Exception;

use Illuminate\Http\Request;

class StudentsController extends Controller
{
    public function getData(){
        try{
            $data = Student::select('id','name','lastname','gender','birthdate')->get();
            $dataJson = json_encode($data);
            return $dataJson;
        }catch(Exception $e){
            abort(403);
        }
    }

    public function index(){
        try{
            return view('students.students');
        }catch(Exception $e){
            abort(403);
        }
    }

    public function store(Request $request){
        try {
            $student = new Student();
            $student->name = $request->name;
            $student->lastname = $request->lastname;
            $student->gender = $request->gender;
            $student->birthdate = $request->birthdate;
            $student->save();
    
            return back()->with("action", "ok");
        }catch(Exception $e){
            abort(403);
        }
    }

    public function update(Request $request){
        try {
            $student = Student::find($request->hidden);
            $student->name = $request->name;
            $student->lastname = $request->lastname;
            $student->gender = $request->gender;
            $student->birthdate = $request->birthdate;
            $student->save();
    
            return back()->with("action", "ok");
        }catch(Exception $e){
            // dd($request);
            dd($e);
            abort(403);
        }
    }

    public function delete(Request $request){
        try{
            $student = Student::find($request->hidden);
            $student->delete();
            
            return back()->with("action", "ok");
        }catch(Exception $e){
            dd($e);
            return back()->with("error", "ok");
        }
    }


}
