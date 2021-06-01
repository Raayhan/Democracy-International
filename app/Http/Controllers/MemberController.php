<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Models\Party;

class MemberController extends Controller
{
    public function MemberForm(){
        $parties = Party::all(['partyName']); 
        return view('members.add',['parties'=>$parties]);
      
    }
}
