<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Video;
use App\Models\Course;
use App\Models\Lesson;


class VideoController extends Controller
{
    //
    
public function index(){
    $lessons = Lesson::with('videos')->get();
    // return dd($lessons);
    return view('videos.videos')->with('lessons',$lessons);
    }
// public function getlesson(Request $request){
// $lessons = Lesson::where('course_id',$request->input('course_id'))->get();
// // return dd($subcategories);
// if (count($lessons) > 0) {
//     return response()->json($lessons);
// }

// public function courses(){

// // $subcategories = Subcategory::get(); 
// $courses = Course::get(); 

// return view('admin.course')->with('courses',$courses)->with('categories',$categories);
// }
public function add(){

$lessons = Lesson::get();  

return view('videos.addvideo')->with('lessons',$lessons);
}
public function create(Request $request){
$request->validate([
    'lesson_id' =>'required',
    'video' => 'required|mimes:mp4,ogx,oga,ogv,ogg,webm',
    'duration' =>'required|integer|min:0|max:2023',
    'thumbnail' => 'required|image|mimes:png,jpg,jpeg'
   
]);
// return dd($request);
$thumbnail = time().'.'.$request->thumbnail->extension(); 
$video = $request->file('video');
$video->move('videos',$video->getClientOriginalName());
$videoname = $video->getClientOriginalName();
$request->thumbnail->move(public_path('images'),$thumbnail);
$video = new Video();
$video->lesson_id = $request->input('lesson_id');
$video->video = $videoname; 
$video->thumbnail = $thumbnail;
$video->duration = $request->input('duration');
$video->save();
if($video){
    return response()->json(['success'=>'video create successfully']);
// return response()->json(['success','file uploaded successfully']);
}
return back();

}

public function update(Request $request,$id){

    $request->validate([
       
        'lesson_id'=>'required',
        'video'=>'required',
        'duration'=>'required',
        'thumbnail'=>'required'
       
    ]);
    $video = Video::find($id);
    // $thumbnail = time().'.'.$request->thumbnail->extension(); 
    // $video = time().'.'.$request->thumbnail->extension();  
    // $request->thumbnail->move(public_path('images'),$thumbnail);
    // $request->video->move(public_path('videos'),$video);
    // $video = new Video();
    $video->video =  $request->input('video');
    $video->lesson_id =  $request->input('lesson_id');
    $video->thumbnail = $request->input('thumbnail');
    $video->duration = $request->input('duration');
    $video->save();
    if($video){
    return redirect()->route('videos');
    }
}
public function delete($id){
$video = Video::find($id); 
$video->delete();
return back();

}
// public function view($id){
// $video = Video::find($id); 
// return view('videos.videodetail')->with('course',$course);

// }
public function edit($id){
$video = Video::find($id); 
$lessons = Lesson::get(); 
return view('videos.editvideo')->with('video',$video)->with('lessons',$lessons);

}
}
