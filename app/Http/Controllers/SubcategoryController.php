<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;
use App\Models\Category;


class SubcategoryController extends Controller
{
    //
    public function create(Request $request){
        // return dd($request->input());
        $request->validate([
            'title' =>'required|unique:subcategories',
            'category_id' => 'required'
        ]);
            // //Store in Storage Folder

        $subcategory = new Subcategory();
        $subcategory->title = $request->input('title');
        $subcategory->category_id = $request->input('category_id');
        $subcategory->save();
        if($subcategory){
            return redirect()->route('subcategories');
        }
        return dd('error');

    }
    public function index(){
        $subcategories = Subcategory::get(); 
        return view('subcategories.index')->with('subcategories',$subcategories);
    }
    public function add(){
        $categories = Category::get();

        return view('subcategories.addsubcategory')->with('categories',$categories); 

    }
    public function edit($id)
{
    $subcategory = Subcategory::findOrFail($id);
    // return dd($category_id);

    return view('subcategories.editsubcategory')->with('subcategory',$subcategory);
}  
public function update(Request $request,$id){
    $request->validate([
        'title' =>'required',
        'category_id' => 'required'
    ]);
    // $imageName = time().'.'.$request->image->extension(); 
    $subcategory = Subcategory::findOrFail($id); 
           // //Store in Storage Folder
    $subcategory->title = $request->input('title');
    $subcategory->category_id = $request->input('category_id');
    $subcategory->save();
    if($subcategory){
        return redirect()->route('subcategories');
    }
    return back();

} 
public function delete($id){
    $subcategory = Subcategory::findOrFail($id); 
    $subcategory->delete();
    return back();

}
}
