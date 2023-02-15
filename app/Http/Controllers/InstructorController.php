<?php

namespace App\Http\Controllers;
use App\Models\UserAuth;
use App\Models\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class InstructorController extends Controller
{
    //
    public function index(){ 
        $categories = Category::with('subcategories')->get(); 

        $data = array();
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
        }
        return view('instructor.instructor',compact('data'))->with('categories',$categories);

    }
    public function application(){
        $categories = Category::with('subcategories')->get(); 

        $data = array();
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
        }
        return view('instructor.application',compact('data'))->with('categories',$categories);

    }
}
