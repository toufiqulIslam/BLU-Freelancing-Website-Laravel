<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\ValidateForget;
use App\User;
use Illuminate\Support\Facades\DB;


class LoginController extends Controller
{

	public function index(Request $req){	

		$req->session()->forget('type');
		$req->session()->put('user', "Signup");
		$req->session()->put('action', "Login");
		$req->session()->put('hide2', "");
		$req->session()->put('hide', "none");

		return view('login.index');
	}
	public function index2(){	

		return view('login.signup');
	}

	public function forget(){	

		return view('login.forget',["std2"=>""],["std"=>""]);
	}
	
	public function update(ValidateForget $req){

		$user = DB::table('users')->where('email', $req->email)
		->get();

		if(count($user)>0){
			if($user[0]->security != ""){
				if($user[0]->security == $req->security){
					$std = User::find($user[0]->id);
					$std->password  = $req->password;
					$std->save();

					return view('login.index');
				}
				else{
					return view('login.forget',["std"=>"Security Question Answer Didn't Match"],["std2"=>""]);
				}
			}else{

				$std = User::find($user[0]->id);
				$std->password  = $req->password;
				$std->save();

				return view('login.index');
			}
		}else{
			return view('login.forget',["std2"=>"Invalid Email"],["std"=>""]);
		}
		
		
	}

	public function verify(Request $req){	
		
		//$req->session()->put('abc', 'works!');
		//$req->session()->get('msg');
		//$req->session()->forget('msg');
		//$req->session()->flush();
		//$req->session()->has('msg')
		//$req->session()->flash('xyz', 'invalid username or password');
		//$req->session()->flash('pqr', 'invalid username or password');
		//$req->session()->keep('xyz');
		//$req->session()->reflash();
		//$data = $req->session()->all();

		//User::all();
		//$result = User::find(1);
		/*$result = User::where('username', $req->uname)
				->where('password', $req->password)
				->get();*/

		//DB::table('users')->get();

				$result = DB::table('users')->where('email', $req->email)
				->where('password', $req->password)
				->get();

		//echo $result[0]->type;

				if(count($result) > 0){
			/*if($result[0]->type == "client")
			{*/
				$req->session()->put('user', $req->email);
				$req->session()->put('pathUser', $result[0]->id);
				$req->session()->put('hide2', "none");
				$req->session()->put('hide', "");
				$req->session()->put('type', $result[0]->type);
				$req->session()->put('action', "Logout");
				$req->session()->put('active', $result[0]->status);
				return redirect()->route('home.index');
			/*}
			else if($result[0]->type == "emp")
			{
			$req->session()->put('user', $req->uname);
			$req->session()->put('type', $result[0]->type);
			return redirect()->route('emp.index');
		}*/
	}else{
			//echo "hello";
		$req->session()->forget('type');
		$req->session()->forget('active');
		$req->session()->put('user', "Signup");
		$req->session()->put('hide2', "");
		$req->session()->put('hide', "none");
		$req->session()->put('pathUser', "Signup");
		$req->session()->put('action', "Login");

		return redirect()->route('home.index');
			//return view('login.index');
	}
}
}
