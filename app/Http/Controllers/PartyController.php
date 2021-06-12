<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Party;

class PartyController extends Controller

{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function PartyForm(){
        
        return view('parties.add');
      
    }

    public function AddParty(Request $request){
        
        $this->validator($request); // Validate registration form


        $party = new Party; // Creating new model object
        $party->partyName           = $request->input('partyName');
        $party->membershipCost      = $request->input('membershipCost');
        $party->save();
        return redirect()->to('/parties/all')->with('status','New party  has been created successfully');


    }
    private function validator(Request $request)
    {
            //validation rules.
            $rules = [
                'partyName'        => 'required|string|unique:parties|min:3|max:191',
                'membershipCost'   => 'required',
            ];

            $messages = [
                'partyName.unique'  => 'Party already exists',
            ];
            //validate the request.
            $request->validate($rules,$messages);

}

public function ViewParties(){

    $parties = Party::all(); 
    return view('parties.all',['parties'=>$parties]);
}
}
