<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function index(Request $req){
    	$req->session()->forget('type');
    	$req->session()->forget('active');
		$req->session()->put('user', "Signup");
		$req->session()->put('action', "Login");
		$req->session()->put('hide2', "");
		$req->session()->put('hide', "none");
    	return redirect()->route('login.index');
    }
}
