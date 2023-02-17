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
   
        return view('admin.index');
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
        $application->delete();
        return redirect()->route('applications');
     }
 
}
