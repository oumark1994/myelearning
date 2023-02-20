<?php

namespace App\Http\Controllers;
use App\Models\UserAuth;
use App\Models\Category;
use App\Models\Course;
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
    public function successapplication(){
        return view('instructor.successapplication');
    }
    public function dashboard(){
        $data = array();
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
            if($data->role == 1){
            $courses = Course::where('user_id','=',$data->id)->get();
            return view('admin.instructordashboard')->with('data',$data)->with('courses',$courses);
            } 
            
        }
      
    }
    public function createclass(){
        $data = array();
        $categories = Category::with('subcategories')->get(); 
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
        }
        return view('admin.instructorcreateclass')->with('data',$data)->with('categories',$categories);
    }
    public function instructoraddcourse(Request $request){
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
        $video = $request->file('featured_video');
        $video->move('videos',$video->getClientOriginalName());
        $videoname = $video->getClientOriginalName();
        $course = new Course();
        $course->title = $request->input('title');
        $course->category_id = $request->input('category_id'); 
        $course->subcategory_id = $request->input('subcategory_id');
        $course->level = $request->input('level');
        $course->primary_subject = $request->input('primary_subject');
        $course->description = $request->input('description');
        $course->price = $request->input('price');
        $course->promo_link = $request->input('promo_link');
        $course->featured_video = $videoname;
        $course->duration = $request->input('duration');
        $course->featured_image = $imageName;
        $course->approved = 0;
        $course->published = 0;
        $course->user_id = $data->id;
        $course->save();
        if($course){
        return redirect()->route('instructordashboard');
        }
        return back();

    }
}
