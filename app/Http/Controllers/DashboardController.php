<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        if(Auth:: user()->hasRole('administrator')){
            return view('dashboard.admin');
        }elseif(Auth:: user()->hasRole('attendee')){
            return view('dashboard.attendee');
        }
    }
}
