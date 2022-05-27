<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Exception;
use Illuminate\Http\Request;

class TeachersController extends Controller
{
    public function getData(){
        try{
            $data = Teacher::select('id','name','lastname','gender')->get();
            $dataJson = json_encode($data);
            return $dataJson;
        }catch(Exception $e){
            // dd($e);
            abort(403);
        }
    }

    public function index(){
        try{
            return view('teachers.teachers');
        }catch(Exception $e){
            abort(403);
        }
    }

    public function store(Request $request){
        try {
            $teacher = new Teacher();
            $teacher->name = $request->name;
            $teacher->lastname = $request->lastname;
            $teacher->gender = $request->gender;
            $teacher->save();
    
            return back()->with("action", "ok");
        }catch(Exception $e){
            abort(403);
        }
    }

    public function update(Request $request){
        try {
            $teacher = Teacher::find($request->hidden);
            $teacher->name = $request->name;
            $teacher->lastname = $request->lastname;
            $teacher->gender = $request->gender;
            $teacher->save();
    
            return back()->with("action", "ok");
        }catch(Exception $e){
            // dd($request);
            dd($e);
            abort(403);
        }
    }

    public function delete(Request $request){
        try{
            $teacher = Teacher::find($request->hidden);
            $teacher->delete();
            
            return back()->with("action", "ok");
        }catch(Exception $e){
            dd($e);
            return back()->with("error", "ok");
        }
    }
}
