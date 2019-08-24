<?php

namespace App\Http\Controllers;

use App\Login as M_log;
use Illuminate\Http\Request;

class Login extends Controller
{
    public function index()
    {
    	return view('login');
    }

    public function post_login(Request $req)
    {
    	$req->validate([
    		'username' => 'required',
    		'password' => 'required',
    	]);

    	$data_input = array(
    		'username' => $req->post('username'),
    	);

    	$cek_akun = M_Log::get_where_by_userpass($data_input)->first();
        if(!empty($cek_akun))
        {
        	if(password_verify($req->post('password'), $cek_akun->password) == true)
        	{
    			$req->session()->put(
    				array(
    					'username' => $req->post('username'),
    					'email' => $cek_akun->email
    				)
    			);
    			return redirect('/web/dashboard');
        	}
        	else
        	{
    			$req->session()->flash('alert', '<script>alert("Login gagal, silahkan cek username dan password anda")</script>');
    			return redirect('/login');
        	}
        }
        else
        {
            $req->session()->flash('alert', '<script>alert("Login gagal, silahkan cek username dan password anda")</script>');
            return redirect('/login');
        }
            
    }
}
