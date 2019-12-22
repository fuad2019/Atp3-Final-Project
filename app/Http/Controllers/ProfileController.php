<?php

namespace App\Http\Controllers;
use App\Profile;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //




 function index(Request $request){




if($request->session()->has('name')){
    		return view('doctor.index');
    	}else{
    		return redirect('/login');
    	}

// $a  = $request->session()->get('name');
      // echo "$a";

 }


 function view($name){


$std = Profile::where('username', $name)->first();

       //  return response()->json($std);
      
    }



    function add(){

        return view('doctor.add');
    }










function insert(Request $req)
{


        $profile = new Profile();
      


  			   	$profile->firstname = $req->firstname;
   				 $profile->lastname = $req->lastname;
   				 $profile->username = $req->username;

  			     $profile->gender = $req->gender;
				 $profile->designation = $req->designation;
	 			 $profile->email = $req->email;
	   		     $profile->phone = $req->phone;
	     		 $profile->address = $req->address;

    			 $profile->password = $req->password;
       
       
        // $user->save();
        if($profile->save()){
            return redirect()->route('profile.index');

//return response->json()
        }else{
            return redirect()->route('profile.add');
        }
    }










}




