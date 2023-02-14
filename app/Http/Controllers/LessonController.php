<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lesson;
use App\Models\Course;

class LessonController extends Controller
{
    //
       //
       public function create(Request $request){
        // return dd($request->input());
        $request->validate([
            'title' =>'required|unique:lessons',
            'course_id' => 'required'
        ]);
            // //Store in Storage Folder

        $lesson = new Lesson();
        $lesson->title = $request->input('title');
        $lesson->course_id = $request->input('course_id');
        $lesson->save();
        if($lesson){
            return redirect()->route('lessons');
        }
        return dd('error');

    }
    public function index(){
        $lessons = Lesson::get(); 
        return view('lessons.index')->with('lessons',$lessons);
    }
    public function add(){
        $courses = Course::get();

        return view('lessons.addlesson')->with('courses',$courses); 

    }
    public function edit($id)
{
    $lesson = Lesson::findOrFail($id);
    // return dd($category_id);

    return view('lessons.editlesson')->with('lesson',$lesson);
}  
public function update(Request $request,$id){
    $request->validate([
        'title' =>'required',
        'course_id' => 'required'
    ]);
    // $imageName = time().'.'.$request->image->extension(); 
    $lesson = Lesson::findOrFail($id); 
           // //Store in Storage Folder
    $lesson->title = $request->input('title');
    $lesson->course_id = $request->input('course_id');
    $lesson->save();
    if($lesson){
        return redirect()->route('lessons');
    }
    return back();

} 
public function delete($id){
    $lesson = Lesson::findOrFail($id); 
    $lesson->delete();
    return back();

}
}
