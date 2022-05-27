<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Student;
use App\Models\StudentGrade;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class StudentsgradesController extends Controller
{
    public function getData(){
        try{
            // $data = studentgrade::select('id','name','teacher_id')->get();
            $data = StudentGrade::with('student:id,name','grade:id,name')->get();
            $dataJson = json_encode($data);
            return $dataJson;
        }catch(Exception $e){
            dd($e);
            abort(403);
        }
    }

    public function index(){
        try{
            $grades = Grade::select('id','name')->get();
            $students = Student::select('id','name','lastname')->get();
            return view('students-grades.students-grades' ,compact('grades','students'));
        }catch(Exception $e){
            abort(403);
        }
    }

    public function store(Request $request){
        try {
            $studentgrade = new StudentGrade();
            $studentgrade->section = $request->section;
            $studentgrade->student_id = $request->student;
            $studentgrade->grade_id = $request->grade;
            $studentgrade->save();
    
            return back()->with("action", "ok");
        }catch(Exception $e){
            dd($e);
            abort(403);
        }
    }

    public function update(Request $request){
        try {
            $studentgrade = StudentGrade::find($request->hidden);
            $studentgrade->section = $request->section;
            $studentgrade->student_id = $request->student;
            $studentgrade->grade_id = $request->grade;
            $studentgrade->save();
            $studentgrade->save();
    
            return back()->with("action", "ok");
        }catch(Exception $e){
            dd($request);
            dd($e);
            abort(403);
        }
    }

    public function delete(Request $request){
        try{
            $studentgrade = studentgrade::find($request->hidden);
            $studentgrade->delete();
            
            return back()->with("action", "ok");
        }catch(Exception $e){
            dd($e);
            return back()->with("error", "ok");
        }
    }
}
