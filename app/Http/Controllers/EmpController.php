<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Job;
use Validator;
use App\Http\Requests\StudentRequest;
use Illuminate\Support\Facades\DB;

class EmpController extends Controller
{


    public function index(Request $req){
		return view('emp.index');
	}

    public function add(){
    	return view('emp.add');
    }

    public function create(Request $req){

/*        $this->validate($req, [

            "uname"     => "required | unique:users,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "dept"      => "required",
            "cgpa"      => "required"
        ]);*/

/*        $req->validate([

            "uname"     => "required | unique:users,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "dept"      => "required",
            "cgpa"      => "required"
        ]);*/

/*        $validator = Validator::make($req->all(), [

            "uname"     => "required | unique:users,username",
            "password"  => "required|min:8",
            "name"      => "required",
            "dept"      => "required",
            "cgpa"      => "required"
        ])->validate();*/
        
        //$validator->validate();

        /*if($validator->fails()){

            //dd($validator);
            return back()
                    ->with('errors', $validator->errors());
        } */     

    	$user = new Job();
    	$user->cname = $req->cname;
    	$user->title = $req->title;
        $user->location = $req->location;
        $user->salary = $req->salary;
        //$user->password = $req->password;
    	//$user->type = "emp";
    	$user->save();

    	$data = DB::table('job')->where('cname', $req->cname)->get();

    	return redirect()->route('emp.details', $data[0]->id);
    }

	public function details($id){

		$std = Job::find($id);
		
		return view('emp.details', ['std'=>$std]);
    }

    public function show(){

    	$stdList = Job::all();

        //return json($stdlist);
    	return view('emp.stdlist', ['std'=> $stdList]);
    }
	
	public function edit($id){

		$std = Job::find($id);
		return view('emp.edit', ['std'=>$std]);
    }

    public function update(Request $req, $id){

    	$user = Job::find($id);
    	$user->cname = $req->cname;
        $user->title = $req->title;
        $user->location = $req->location;
        $user->salary = $req->salary;
    	$user->save();

		return redirect()->route('emp.stdlist');
    }
	public function delete($id){

		$std = Job::find($id);
		return view('emp.delete', ['std'=>$std]);
    }

    public function destroy($id){

		Job::destroy($id);
		return redirect()->route('emp.stdlist');
	}

    public function profile(){

        return view('emp.profile');
    }

    public function upload(Request $req){


        if($req->hasFile('pic')){

            $file = $req->file('pic');

/*          echo "Name: ".$file->getClientOriginalName();
            echo "<br>Extension: ".$file->getClientOriginalExtension();
            echo "<br>Size: ".$file->getSize();
            echo "<br>Mime Type: ".$file->getMimeType();
*/
            if($file->move('upload', $file->getClientOriginalName())){
                echo "success";
            }else{
                echo "error";
            }

        }else{
            echo "File upload error!";
        }

    }
}




