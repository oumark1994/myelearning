<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserAuth;
use App\Models\Category;
use App\Models\Course;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    //
public function index(){
        $data = array();
        $categories = Category::with('subcategories')->get(); 
        // return $categories;
        $courses = Course::orderBy("created_at","asc")->limit(8)->get(); 
    if(Session::has('loggedInUser')){
        $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
    }
    return view('home.index',compact('data'))->with('categories',$categories)->with('courses',$courses);
    }
    public function course($id){
        $categories = Category::with('subcategories')->get(); 
        $data = array();
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
        }
        $course = Course::find($id);
        $videos = $course->videos;
        $lessons = $course->lessons;
        // return ($lessons);
         
        return view('home.course')->with('data',$data)->with('course',$course)->with('lessons',$lessons)->with('videos',$videos)->with('categories',$categories);
    }
    function header(){
        $data = array();
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
        }
        
        $categories = Category::with('subcategories')->get();
        return view('global.template',compact('data'))->with('categories',$categories);
        
    }
    public function mycourse(){
        $data = array();
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
        }
        $categories = Category::with('subcategories')->get(); 
        return view('home.mycourse')->with('categories',$categories)->with('data',$data);
    }
}
