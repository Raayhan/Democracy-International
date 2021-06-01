<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function AddPartyPage(){
      return view('parties.add');
    }
}
