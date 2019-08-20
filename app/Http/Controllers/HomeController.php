<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Job;
use App\Save;
use App\Support;
use App\JobRequest;
use App\FreelancerSkill;
use App\FreelancerProfile;
use Validator;
use App\Http\Requests\ValidatePost;
use App\Http\Requests\ValidateUpdate;
use App\Http\Requests\ValidateJob;
use App\Http\Requests\ValidateComplain;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{

    public function index(Request $req){
      if($req->session()->has('type')){
        return view('home.index');
    }
    else{
        //$req->session()->forget('type');
        $req->session()->put('user', "Signup");
        $req->session()->put('hide2', "");
        $req->session()->put('hide', "none");
        $req->session()->put('pathUser', "Signup");
        $req->session()->put('action', "Login");

        return view('home.index');
    }

}

public function add(){
 return view('home.add');
}

public function create(ValidatePost $req){

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

                $user = new User();
                $user->username  = $req->uname;
                $user->email   = $req->email ;
                $user->password  = $req->password;
                $user->dob = $req->dob;
                $user->gender = $req->gender;
                $user->type = $req->user_type;
                $user->card = $req->payment_method;
                $user->cardnumber = $req->cardNumber;
                $user->cardcvc = $req->cardCVC;
                $user->expire = $req->expire;
    	//$user->type = "emp";
                $user->save();

    	/*$data = DB::table('emp')->where('username', $req->uname)
                ->where('password', $req->password)
                ->get();*/
                return redirect()->route('home.index');
            }

            public function details($id){

              $std = User::find($id);

              return view('home.details', ['std'=>$std]);
          }

          public function freelancers($skill){

            $skill2="";

            $std = DB::table('skills')->where('skill', $skill)
            ->get();
            $count = DB::table('skills')->where('skill', $skill)
            ->count();
        //echo $std[1]->freelancer;
            $nameArr = array();
            $skillArr = array();
            $id = array();
            for ($i=0; $i < $count; $i++) { 
            //echo $std[$i]->freelancer;
            //$std[$i]->freelancer;
                $temp = $std[$i]->freelancer;
                array_push($id,(int) $temp);
            //echo gettype($id);
            }

            for ($i=0; $i < $count; $i++) { 

                $std = FreelancerProfile::find($id[$i]);
                $name = (string) $std['username'];
                $skill = (string) $std['key_skills'];

                if($skill=="web"){
                    $skill = "Web, Mobile & Software Development";
                }
                if($skill=="design"){
                    $skill = "Design & Creative";
                }
                if($skill=="writing"){
                    $skill = "Writing";
                }
                if($skill=="sales"){
                    $skill = "Sales & Marketing";
                }
                array_push($nameArr, $name);
                array_push($skillArr, $skill);
            }
        //print_r($nameArr);
        /*$std = Freelancer::find($id);
        $s = (string) $std['skills'];
        $std = explode(",",$s);*/
        
        //echo $std;
        if($skill=="web"){
            $skill = "Web, Mobile & Software Development";
        }
        if($skill=="design"){
            $skill = "Design & Creative";
        }
        if($skill=="writing"){
            $skill = "Writing";
        }
        if($skill=="sales"){
            $skill = "Sales & Marketing";
        }
        $nameArr = array_combine($nameArr, $skillArr);
        return view('home.team', ['std'=>$nameArr],['std2'=>$skill]);
    }

    public function freelancersPrf($username, Request $req){

        $std = DB::table('freelancers')->where('username', $username)
        ->get();
        $std2 = $std[0]->description;
        //$std = FreelancerProfile::find($id);
        $s = (string) $std[0]->skills;
        $b = (string) $std[0]->username;
        $s = $s.", ".$b;
        $std = explode(",",$s);

        $std3 = DB::table('save')->where('client', $req->session()->get('user'))
        ->where('freelancerName', $username)
        ->get();
        if(count($std3)>0){
            return view('home.freelancer', ['std'=>$std], ['std2'=>$std2, 'std3'=>"Saved"]);
        }
        else{
            return view('home.freelancer', ['std'=>$std], ['std2'=>$std2, 'std3'=>""]);
        }
    }

    public function freelancersPrfSave($username, Request $req){

        $std = DB::table('freelancers')->where('username', $username)
        ->get();
        $std2 = $std[0]->description;
        $std4 = $std[0]->email;
        //$std = FreelancerProfile::find($id);
        $s = (string) $std[0]->skills;
        $b = (string) $std[0]->username;
        $s = $s.", ".$b;
        $std = explode(",",$s);

        if($req->session()->get('user') != "Signup"){
            if($req->nameF != "Saved"){
               /* $std3 = DB::table('users')->where('email', $req->session()->get('user'))
                ->get();*/
                DB::table('save')->insert(
                    ['client' =>  $req->session()->get('user'), 'freelancerEmail' => $std4, 'freelancerName' => $username]
                );

                return view('home.freelancer', ['std'=>$std], ['std2'=>$std2,'std3'=>"Saved"]);
            }else{
                
                DB::table('save')->where('client', $req->session()->get('user'))->delete();

                return view('home.freelancer', ['std'=>$std], ['std2'=>$std2,'std3'=>""]);
            }
        }
        else{
            return view('home.freelancer', ['std'=>$std], ['std2'=>$std2,'std3'=>"You must login first to save a profile"]);
        }

    }

    public function show(){

    	$stdList = User::all();

        //return json($stdlist);
    	return view('home.stdlist', ['std'=> $stdList]);
    }

    //Search
    public function searchLaunch(Request $req){

        $data = DB::table('freelancers')
        ->where('skills', 'LIKE', "%hhhhhhh%")
        ->get();

        //return json($stdlist);
        return view('home.search', ['std'=> $data]);
    }

    public function search(Request $req){

        $data = DB::table('freelancers')
        ->where('skills', 'LIKE', "%$req->search%")->where('hourly', '>', 0)
        ->where('hourly', '<=', $req->points)
        ->get();

        if(count($data) == 0){
            $data = DB::table('freelancers')
        ->where('key_skills', 'LIKE', "%$req->search%")->where('hourly', '>', 0)
        ->where('hourly', '<=', $req->points)
        ->get();

        return view('home.search', ['std'=> $data]);
        }
        
        return view('home.search', ['std'=> $data]);

                        //echo $data[0]->empname;
        //return json($stdlist);
    }

/*    public function fetch(Request $request)
    {
       if($request->get('query'))
       {
          $query = $request->get('query');
          $data = DB::table('freelancers')
          ->where('skills', 'LIKE', "%HTML%")
          ->get();
          $output = '<ul class="dropdown-menu" style="display:block; position:relative">';
          foreach($data as $row)
          {
             $output .= '
             <li><a href="#">'.$row->username.'</a></li>
             ';
         }
         $output .= '</ul>';
         echo $output;
     }
      /*$data = DB::table('freelancers')
          ->where('skills', 'LIKE', "%{$query}%")
          ->get();
      }*/

      public function edit($id){

          $std = User::find($id);
          return view('home.edit', ['std'=>$std]);
      }

      public function profile($id){
        $std = User::find($id);
        $job = Job::all();
        $save = Save::all();
        return view('home.profile',['std'=>$std],['job'=>$job, 'save'=>$save, 'com'=>""]);
    }

    public function profile2($id, ValidateComplain $req){

        $std = new Support();
        $std->client = $id;
        $std->complain = $req->complain;
        $std->liable = $req->liable;
        $std->save();

        $std = User::find($id);
        $job = Job::all();
        $save = Save::all();

        return view('home.profile',['std'=>$std],['job'=>$job, 'save'=>$save, 'com'=>""]);
    }

    public function user($id){

        $std = User::find($id);
        return view('home.user', ['std'=>$std]);
    }

    public function active(Request $req, $id){

        $com = "";
        if($req->complain != "Complain is Required Field" && $req->complain != ""){
            $std = new Support();
            $std->client = $id;
            $std->complain = $req->complain;
            $std->liable = $req->liable;
            $std->save();
        }else{
            $com = "Complain is Required Field";
        }

        $user = User::find($id);
        $user->status = $req->active;
        $user->save();

        $std = User::find($id);
        $job = Job::all();
        $save = Save::all();

        return view('home.profile', ['std'=>$std],['job'=>$job, 'save'=>$save, 'com'=>$com]);
    }

    public function notification($id){
        $std = User::find($id);

        $jobR = DB::table('jobrequest')
        ->where('client', $id)
        ->get();
        return view('home.notifications',['std'=>$std, 'job'=>$jobR]);
    }
    public function notification2($id, $plan){
        $std = User::find($id);
        $std->plans = $plan;
        $std->save();

        $jobR = DB::table('jobrequest')
        ->where('client', $id)
        ->get();
        return view('home.notifications',['std'=>$std, 'job'=>$jobR]);
    }

    public function notificationUpdate($id, Request $req){
        $std = User::find($id);

        $jobR = DB::table('jobrequest')
        ->where('client', $id)
        ->get();

       $up = Job::find($req->var2);
       $up->hired = $req->var;
       $up->save();

        return view('home.notifications',['std'=>$std, 'job'=>$jobR]);
    }

    public function tables($id){
        $std = User::find($id);
        return view('home.tables',['std'=>$std]);
    }
    public function userUpdate(ValidateUpdate $req, $id){

     $user = User::find($id);
     $user->company = $req->company;
     $user->username  = $req->username;
     $user->email   = $req->email ;
     $user->password  = $req->password;
     $user->dob = $req->dob;
     $user->gender = $req->gender;
     $user->card = $req->card;
     $user->cardnumber = $req->cardNumber;
     $user->cardcvc = $req->cardCVC;
     $user->expire = $req->expire;
     $user->security = $req->security;
     $user->save();

     $std = User::find($id);

        //echo $req->cardcvc;

     return view('home.user', ['std'=>$std]);
 }
 public function jobPost(ValidateJob $req, $id){

     $user = new Job;
     $user->category = $req->category;
     $user->skills  = $req->skills;
     $user->deadline   = $req->deadline ;
     $user->salary  = $req->salary;
     $user->save();

     $std = User::find($id);

        //echo $req->cardcvc;

     return view('home.tables', ['std'=>$std]);
 }
 public function delete($id){

  $std = User::find($id);
  return view('home.delete', ['std'=>$std]);
}

public function destroy($id){

  User::destroy($id);
  return redirect()->route('home.stdlist');
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




