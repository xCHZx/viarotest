<?php

namespace App\Http\Controllers;

use App\Models\Grade;
use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class GradesController extends Controller
{
    public function getData(){
        try{
            // $data = Grade::select('id','name','teacher_id')->get();
            $data = Grade::with('teacher:id,name')->get();
            $dataJson = json_encode($data);
            return $dataJson;
        }catch(Exception $e){
            dd($e);
            abort(403);
        }
    }

    public function index(){
        try{
            $teachers = Teacher::select('id','name','lastname')->get();
            return view('grades.grades' ,compact('teachers'));
        }catch(Exception $e){
            abort(403);
        }
    }

    public function store(Request $request){
        try {
            $grade = new Grade();
            $grade->name = $request->name;
            $grade->teacher_id = $request->teacher;
            $grade->save();
    
            return back()->with("action", "ok");
        }catch(Exception $e){
            dd($e);
            abort(403);
        }
    }

    public function update(Request $request){
        try {
            $grade = Grade::find($request->hidden);
            $grade->name = $request->name;
            $grade->teacher_id = $request->teacher;
            $grade->save();
    
            return back()->with("action", "ok");
        }catch(Exception $e){
            dd($request);
            dd($e);
            abort(403);
        }
    }

    public function delete(Request $request){
        try{
            $grade = Grade::find($request->hidden);
            $grade->delete();
            
            return back()->with("action", "ok");
        }catch(Exception $e){
            dd($e);
            return back()->with("error", "ok");
        }
    }
}
