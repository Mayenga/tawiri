<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conference_users;

class RegconferenceController extends Controller
{
    public function index()
    {
        return view('register');
    }

    public function register(Request $request){
        $request->validate([
            'title' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'middlename' => 'required',
            'email' => 'required',
            'country' => 'required',
            'nation' => 'required',
            'company' => 'required'
        ]);

        $intention = $request->intention;
        $title = $request->title;
        $firstname = $request->firstname;
        $lastname = $request->lastname;
        $middlename = $request->middlename;
        $email = $request->email;
        $country = $request->country;
        $nation = $request->nation;
        $company = $request->company;
        $website = $request->website;
        $comments = $request->comments;

        $Conference_users = Conference_users::create(['title' => $title,'firstname' => $firstname,'lastname' => $lastname,'middlename' => $middlename,'email' => $email,'country' => $country,'nation' => $nation,'company' => $company,'website' => $website,'comments' => $comments]);
        
        return redirect()->back()->with('success', "You have successfully register in the conference");            
    }
}
