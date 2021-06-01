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

    public function AddMember(Request $request){
        
        $this->validator($request); // Validate registration form


        $member = new Member; // Creating new model object
        $member->memberName           = $request->input('memberName');
        $member->memberAge            = $request->input('memberAge');
        $member->memberParty          = $request->input('memberParty');
        $member->save();
        return redirect()->to('/members/add')->with('status','New member has been created successfully');


    }
    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'memberName'        => 'required|string|min:3|max:191',
                'memberAge'         => 'required',
                'memberParty'       => 'required', 
            ];

            $messages = [
                
            ];
            //validate the request.
            $request->validate($rules,$messages);

}
}
