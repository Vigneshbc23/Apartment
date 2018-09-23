<?php

namespace App\Http\Controllers;
use App\User;
use Auth;
use Session;
use Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Auth\Events\Registered;
use Hash;

class ActiveController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
	 
	 

	public function activite($id)
    {
	   $users = User::select('*')->where('random', $id)->where('active', '=', '0')->get()->toArray();

	    if (!empty($users))
		{
			$id = $users[0]['id'];
			
			$active = User::find($id);
			$active->active = '1';
			$active->save();
		
		    Auth::loginUsingId($id);
			return redirect()->route('home');
		}
		else
		{
			return redirect()->route('login');
		}
    }

    public function login(Request $request)
    {
	
	   $data = $request->post();

       $users = User::select('*')->where('email', $data['email'])->where('active', '1')->get()->toArray();

       if (!empty($users))
		{
	     
			$id = $users[0]['id'];
			$password = $users[0]['password'];
			$check = Hash::check($data['password'], $password);
			
			if($check == 1){

				Auth::loginUsingId($id);
			    return redirect()->route('home');
			}else{
                \Session::flash('msg', 'These credentials do not match our records.' );
				return redirect()->route('login');
			}
		
		    
		}
		else
		{ 
			\Session::flash('msg', 'These credentials do not match our records.' ); 
			return redirect()->route('login');
		}

    }
}
