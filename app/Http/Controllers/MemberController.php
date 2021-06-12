<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Member;
use App\Models\Party;

class MemberController extends Controller
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
    public function MemberForm()
    {
        $parties = Party::all(['partyName']);
        return view('members.add', ['parties' => $parties]);
    }

    public function AddMember(Request $request)
    {

        $this->validator($request); // Validate registration form


        $member = new Member; // Creating new model object
        $member->memberName           = $request->input('memberName');
        $member->memberAge            = $request->input('memberAge');
        $member->memberParty          = $request->input('memberParty');
        $member->save();
        return redirect()->to('/members/view')->with('status', 'New member has been created successfully');
    }
    private function validator(Request $request)
    {
        //validation rules.
        $rules = [
            'memberName'        => 'required|string|min:3|max:191',
            'memberAge'         => 'required',
            'memberParty'       => 'required',
        ];

        $messages = [];
        //validate the request.
        $request->validate($rules, $messages);
    }

    public function ViewMember()
    {

        $members = DB::table('members')->get();
        return view('members.view', ['members' => $members]);
    }

    public function MemberEditForm(Request $request)
    {
        $parties = Party::all(['partyName']);
        $memberId = $request->input('memberId');
        $members = DB::table('members')->where('id', $memberId)->get();
        return view('members.edit', ['members' => $members, 'parties' => $parties]);
    }


    public function EditMember(Request $request)
    {
        $memberId = $request->input('memberId');
        $member = Member::findOrFail($memberId);
        $this->validator($request); // Validate registration form
        $member->memberName           = $request->input('memberName');
        $member->memberAge            = $request->input('memberAge');
        $member->memberParty          = $request->input('memberParty');
        $member->save();
        return redirect()->to('/members/view')->with('status', 'Member Information Updated');
    }
    public function DeleteMember(Request $request)
    {
        $memberId = $request->input('memberId');
        $member = Member::findOrFail($memberId);
        DB::table('members')->where('id', '=', $memberId)->delete(); // deleting the table

        return redirect()->to('/members/view')->with('error', 'Member has been removed');
        // Redirecting to the department page with session message
    }
}
