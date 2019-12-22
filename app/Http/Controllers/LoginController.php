<?php
namespace App\Http\Controllers;
use App\User;

use Illuminate\Http\Request;


class LoginController extends Controller
{
    public function index(){
		return view('login.index');
	}
	public function verify(Request $req){
		$user = User::where('username', $req->username)
					->where('password', $req->password)
					->first();			
		   if($user!=null){
			
			$req->session()->put('username', $req->input('username'));
			$req->session()->put('type', $user->type);			
			if($user->type==5)
                return redirect()->route('doctor.index');
           
                
             
		}else{
			$req->session()->flash('msg', 'invalid username/password');
			return redirect('/login');
		}
	}
}