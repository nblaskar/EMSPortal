<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AdminController extends Controller
{
    //Function dor Admin Logout
    public function Logout(){
        //Run Command to find out the logout method comming by JetStream Authentication
        // php artisan route:list
        Auth::logout();
        return Redirect()->route('login');
        // Return to predefine login route
    }
}
