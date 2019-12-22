<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Profile;

class DoctorController extends Controller
{
    

 function index(Request $request){


  //  $a= $request->session()->get('username');

 	//echo "$a";
      
       return view('doctor.index');
    }

/////////profile/////////

function view(Request $request)
{


    //$a= $request->session()->get('username');

 	//echo "$a";

 
         $profile = Profile::where('username',session('username'))->first();
     //   return view('student.profile')->with('student',$student);

          return view('doctor.profile')->with('profile',$profile);
    
        // return response()->json($profile);


}





 function editProfile(){


       $profile = Profile::where('username',session('username'))->first();

        return view('doctor.editprofile')->with('profile',$profile);
   

    }



 function updateProfile(Request $req){


   


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
           
             $imagefile_name = "image_".$username."_".time().rand(100,999).".".$image->getClientOriginalExtension();
            $image->move('upload_image',$imagefile_name);
        }
        else{}


$profile = Profile::where('username',session('username'))->first();
      
 


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
         $user=User::where('username',session('username'))->first();
         $user->username=$username;
        $user->password=$password;
        $user->type=5;
      
         if($profile->save() && $user->save())

{


//echo "done";
          


           return redirect()->route('view.profile');


}



        else

        {

      //  echo "error";

            return redirect()->route('edit.profile');

}



 }






}
