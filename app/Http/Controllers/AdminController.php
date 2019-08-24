<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\AdminModel as admin;
use App\Stemming as stemming;

class AdminController extends Controller
{
    public function index()
    {
//        if (!Session::has("username")) {
//            return redirect("admin-login");
//        }
        $data = admin::getAllQuiz();
        return view("pages.admin.index", compact("data"));
    }

    public function post(Request $request)
    {
        $kata_dasar = array();
        $kata = explode(" ", strtolower($request->pertanyaan));
//        return dd($kata);
//        print_r($kata);
        foreach ($kata as $item) {
            $kata_dasar[] = stemming::stemming($item);
        }
        $isi = $request->pertanyaan;
        $stemming = trim(implode(" ", $kata_dasar));
        $jawaban = $request->jawaban;
        $params = array("isi" => $isi, "stemming" => $stemming, "jawab" => $jawaban);
        $insert = admin::saved($params);
        if ($insert)
            Session::flash("msg", "data berhasil di simpan");
        else
            Session::flash("msg", "data gagal di simpan");

        return redirect("admin");
    }

    public function edit($id = null)
    {
        $where = array("id_faq" => $id);
        $edit = admin::edit($where);
        if (empty($edit))
            return redirect("admin");
//        return dd($edit);
        return view("pages.admin.edit", compact("edit"));
    }

    public function update(Request $request)
    {
        $kata_dasar = array();
        $kata = explode(" ",  strtolower($request->pertanyaan));
        foreach ($kata as $item) {
            $kata_dasar[] = stemming::stemming($item);
        }
        $id = $request->id;
        $isi = $request->pertanyaan;
        $stemming = trim(implode(" ", $kata_dasar));
        $jawaban = $request->jawaban;
        $params = array("isi" => $isi, "stemming" => $stemming, "jawab" => $jawaban);
        $where = array("id_faq" => $id);
        $update = admin::updated($params, $where);
        if ($update)
            Session::flash("msg", "data berhasil di update");
        else
            Session::flash("msg", "data tidak ada perbahan");

        return redirect("admin");
    }

    public function delete($id = null)
    {
        $where = array("id_faq" => $id);
        $delete = admin::deleted($where);
        if ($delete > 0)
            Session::flash("msg", "data berhasil di update");
        else
            Session::flash("msg", "data tidak ada perbahan");

        return redirect("admin");
    }

    public function dataChatBot()
    {
//        if (!Session::has("username")) {
//            return redirect("admin/login");
//        }
        $data = admin::getChatBot();
        $yes = admin::yes();
        $no = admin::no();
        $trending = admin::trendingChat();
        return view("pages.data_chat.index", compact("data","yes","no","trending"));
    }

    public function user()
    {
        $data = admin::getUser();
        return view("pages.user.index", compact("data"));
    }

    public function post_user(Request $req)
    {
        $params = array(
            "username" => $req->username,
            "email" => $req->email, "password" => password_hash($req->password, PASSWORD_DEFAULT),
            "level" => $req->level,
        );
    }

    public function user_edit($id)
    {
        $where = array("id" => $id);
        $edit = admin::user_edit($where);
        return view("pages.user.edit", compact("edit"));
    }
}
