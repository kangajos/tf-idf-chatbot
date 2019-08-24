<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;
use App\Register as M_reg;

class Register extends Controller
{
	public function index()
	{
		return view('register');
	}

	public function post_register(Request $req)
	{
		// echo password_verify("user", '');die;
		// print_r(password_hash($req->password, PASSWORD_DEFAULT));die;
		$req->validate([
		    'username' => 'required',
		    'email' => 'required',
		    'password' => 'required',
		    're_password' => 'required',
		]);

		if($req->post('password') != $req->post('re_password'))
		{
			$req->session()->flash('alert', '<script>alert("Konfirmasi Password Tidak Sesuai!")</script>');
			return redirect('/register');
		}

		$data_input = array(
			'username' => $req->post('username'),
			'email' => $req->post('email'),
			'password' => password_hash($req->post('password'),PASSWORD_DEFAULT)
		);

		$insert = M_reg::insert_data($data_input);

        Mail::send('template_email', array('username'=>$req->post('username'),'password'=>$req->post('password')), function($message) use ($req){
        $message->to($req->post('email'), $req->post('username'))->subject('Selamat datang di APP Chat-Bot');
    	});

		$req->session()->flash('alert', '<script>alert("Register berhasil, silahkan cek email anda")</script>');
		return redirect('/register');
	}
}
