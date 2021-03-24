<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Link;

class MainController extends Controller
{
    function index ($username){
        $user = User::where('username',$username)->first();
        if(!$user){
            return abort(404);
        }

        return view('site.pages.main',compact('user'));
    }
}
