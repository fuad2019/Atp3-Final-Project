<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;
class RegController extends Controller
{
    //

 function index(){


//$a= $request->session()->get('username');

 	//echo "$a";
      
       return view('doctor.add');
    

//echo "hi";
    }




 function insertDoctor(Request $req){
      
      





 
     


  			     $firstname = $req->firstname;
   				$lastname = $req->lastname;
   				 $username = $req->username;

  			     $gender = $req->gender;
				 $designation = $req->designation;
	 			 $email = $req->email;
	   		     $phone = $req->phone;
	     		$address = $req->address;

    			 $password = $req->password;
    
               $imagefile_name="";
        if($req->hasFile('image')){


            
            $image = $req->file('image');
           
            $imagefile_name = "image_".$username."_".time().rand(100,999).".".$image->getClientOriginalExtension();;
         
            $image->move('upload_image',$imagefile_name);
        }
        else{}



        $profile=new Profile(); 
        $user=new User();
     



        	     $profile->firstname = $firstname;
   				 $profile->lastname = $lastname;
   				 $profile->username = $username;

  			     $profile->gender = $gender;
				 $profile->designation = $designation;
	 			 $profile->email = $email;
	   		     $profile->phone = $phone;
	     		 $profile->address = $address;
				 $profile->password = $password;

       
        $profile->image=$imagefile_name;
        $user->username=$username;
        $user->password=$password;
        $user->type=5;
        if($profile->save() && $user->save())
            return redirect()->route('doctor.index');
        else
            return redirect()->route('reg.index');
   











    }






















}
