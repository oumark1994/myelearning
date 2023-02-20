<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\UserAuth;
use App\Models\Instructorapplication;


class AdminController extends Controller
{
    //
    public function index(){
        $data = array();
        if(Session::has('loggedInUser')){
            $data = UserAuth::where('id','=',Session::get('loggedInUser'))->first();
        }
        return view('admin.index')->with('data',$data);
    }
    public function applications(){
        $applications = Instructorapplication::get();
        return view('admin.applications')->with('applications',$applications);

    }
    public function approved($id){
        $application = Instructorapplication::find($id);
        $application->status = 1;
        $application->save();
        if($application){
         $user = UserAuth::where('id','=',$application->user_id)->first();
         $user->role=1;
         $user->save();
         if($user){
             return redirect()->route('applications');
         }
 
 
        }
     }
     public function desapproved($id){
        $application = Instructorapplication::find($id);
        $application->status = 0;
        $application->save();
        if($application){
         $user = UserAuth::where('id','=',$application->user_id)->first();
         $user->role=0;
         $user->save();
         if($user){
             return redirect()->route('applications');
         }
 
 
        }
     }
     public function view($id){
        $application = Instructorapplication::find($id);
        return view('admin.viewapplication')->with('application',$application);
     }
     public function delete($id){
        $application = Instructorapplication::find($id);
        if($application){
            $user = UserAuth::where('id','=',$application->user_id)->first();
            $user->role=0;
            $user->save();
            if($user){
                $application->delete();
                return redirect()->route('applications');
            }
       
        }   
     }
 public function instructors(){
    $instructors = Instructorapplication::where('status','=','1')->get();
    return view('admin.instructors')->with('instructors',$instructors);
 }
}
