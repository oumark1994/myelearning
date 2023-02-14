<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\UserAuth;


class AdminController extends Controller
{
    //
    public function index(){
   
        return view('admin.index');
    }
}
