<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Lesson;
use App\LessonFilters;

class Lessonscontroller extends Controller
{
    public function index(LessonFilters $filters){
//    public function index(Request $request){
//        if($request->exists('popular')){
//            $lessons = Lesson::oldest('view')->get(); 
//        }else if($request->has('difficulty')){
//            $lessons = Lesson::where('difficulty', $request->difficulty)->get(); 
//        }else{
//            $lessons = Lesson::all();
//        }
        
//        $lessons = (new Lesson)->newQuery();
//        
//        if($request->exists('popular')){
//            //$lessons->oldest('view'); 
//            $lessons->latest('view'); 
//        }
//        if($request->has('difficulty')){
//            $lessons->where('difficulty', $request->difficulty);  
//        }
//        $lessons = $lessons->get();
        
        $lessons = Lesson::filter($filters)->get();
        return view('lessons', compact('lessons'));
        
        
    }
}
