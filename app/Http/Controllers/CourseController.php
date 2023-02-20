<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\UserAuth;
use App\Models\Subcategory;
use App\Models\Category;
use App\Models\Course;

class CourseController extends Controller
{
    //

public function index(){
        $data = array();
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
        }
        return view('course.course',compact('data'));
        }
public function subcategory(Request $request){
    $subcategories = Subcategory::where('category_id',$request->input('category_id'))->get();
    // return dd($subcategories);
    if (count($subcategories) > 0) {
        return response()->json($subcategories);
    }
}
public function courses(){
    $categories = Category::get(); 
    // $subcategories = Subcategory::get(); 
    $courses = Course::get(); 
    
    return view('admin.course')->with('courses',$courses)->with('categories',$categories);
}
public function addcourse(){
    $categories = Category::get(); 
    $subcategories = Subcategory::get(); 
    
    return view('admin.addcourse')->with('categories',$categories)->with('subcategories',$subcategories);
}
public function createcourse(Request $request){
    $data = array();
    if(Session::has('loggedInUser')){
        $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
    } 
    // return dd($data);
    $request->validate([
        'title' =>'required|unique:courses',
        'category_id' =>'required',
        'subcategory_id' =>'required',
        'level' =>'required',
        'primary_subject' =>'required',
        'description' =>'required',
        'price' =>'required',
        'promo_link' =>'required',
        'featured_video' =>'required',
        'duration' =>'required|integer|min:0|max:2023',
        'featured_image' => 'required|image|mimes:png,jpg,jpeg'
    ]);
    $imageName = time().'.'.$request->featured_image->extension();  
    $request->featured_image->move(public_path('images'), $imageName);
    $course = new Course();
    $course->title = $request->input('title');
    $course->category_id = $request->input('category_id'); 
    $course->subcategory_id = $request->input('subcategory_id');
    $course->level = $request->input('level');
    $course->primary_subject = $request->input('primary_subject');
    $course->description = $request->input('description');
    $course->price = $request->input('price');
    $course->promo_link = $request->input('promo_link');
    $course->featured_video = $request->input('featured_video');
    $course->duration = $request->input('duration');
    $course->featured_image = $imageName;
    $course->approved = 0;
    $course->published = 0;
    $course->user_id = $data->id;
    $course->save();
    if($course){
    return redirect()->route('courses');
    }
    return back();

}

public function update(Request $request,$id){
    $data = array();
    if(Session::has('loggedInUser')){
        $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
    } 
    // return dd($data);
    $request->validate([
        'title' =>'required',
        'category_id' =>'required',
        'subcategory_id' =>'required',
        'level' =>'required',
        'primary_subject' =>'required',
        'description' =>'required',
        'price' =>'required',
        'promo_link' =>'required',
        'featured_video' =>'required',
        'duration' =>'required',
        'featured_image' => 'required'
    ]);
    $course = Course::find($id);
   
    $course->title = $request->input('title');
    $course->category_id = $request->input('category_id'); 
    $course->subcategory_id = $request->input('subcategory_id');
    $course->level = $request->input('level');
    $course->primary_subject = $request->input('primary_subject');
    $course->description = $request->input('description');
    $course->price = $request->input('price');
    $course->promo_link = $request->input('promo_link');
    $course->featured_video = $request->input('featured_video');
    $course->duration = $request->input('duration');
    $course->featured_image = $request->featured_image;
    $course->approved = 0;
    $course->published = 0;
    $course->user_id = $data->id;
    $course->save();
    if($course){
    return redirect()->route('courses');
    }
    return back();

}
public function delete($id){
    $course = Course::find($id); 
    $course->delete();
    return back();

}
public function view($id){
    $categories = Category::get(); 
    $course = Course::find($id);

  
    return view('admin.viewcourse')->with('course',$course)->with('categories',$categories);

}
public function edit($id){
    $course = Course::find($id); 
    $subcategories = Subcategory::get(); 
    $categories = Category::get(); 
  
    return view('admin.editcourse')->with('course',$course)->with('subcategories',$subcategories)->with('categories',$categories);

}
}
