<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class PagesController extends Controller
{
    public function index(){
        if((Auth::guard('web')->check())) {
            return redirect('/home');
        }
        
        else{
            return view('welcome');
        } 
        
    } 
}
