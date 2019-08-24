<?php

namespace App\Http\Controllers;

use App\AdminModel as admin;
use Illuminate\Http\Request;
use Session;

class LoginAdminController extends Controller
{
    public function login()
    {
        return view("layout.login-admin");
    }

    public function out()
    {
        Session::flush();
        return redirect("admin-login");
    }

    public function loginPost(Request $request)
    {
        return dd($request->all());
        die("ok");
//        $cek_akun = admin::login(array("username" => $request->username));
//        return dd($cek_akun);
//
//        if (!empty($cek_akun->username)) {
//            if (password_verify($request->password, $cek_akun->password) === true) {
//                $session = array('username' => $cek_akun->username, 'email' => $cek_akun->email);
//                Session::put($session);
//                return redirect("admin");
//            }
//        }

//        Session::flash("msg", "Login salah");
//        return redirect("admin-login");
    }
}
