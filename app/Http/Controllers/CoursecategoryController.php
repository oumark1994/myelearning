<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CoursecategoryController extends Controller
{
    // //create category
    public function create(Request $request){
        $request->validate([
            'title' =>'required|unique:categories',
            'image' => 'required|image|mimes:png,jpg,jpeg'
        ]);
        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);        // //Store in Storage Folder
        $category = new Category();
        $category->title = $request->input('title');
        $category->image = $imageName;
        $category->save();
        if($category){
            return redirect()->route('categories');
        }
        return back();

    }
    public function index(){
        $categories = Category::get(); 
        return view('categories.index')->with('categories',$categories);
    }
    public function add(){
        return view('categories.addcategory');
    }
    public function edit($id)
{
    $category = Category::findOrFail($id);
  
    return view('categories.editcategory')->with('category',$category);
}  
public function update(Request $request,$id){
    $request->validate([
        'title' =>'required',
        'image' => 'required'
    ]);
    // $imageName = time().'.'.$request->image->extension(); 
    $category = Category::findOrFail($id); 
           // //Store in Storage Folder
    $category->title = $request->input('title');
    $category->image =$request->input('image');
    $category->save();
    if($category){
        return redirect()->route('categories');
    }
    return back();

} 
public function delete($id){
    $category = Category::findOrFail($id); 
    $category->delete();
    return back();

}
}
