<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Chat as M_chat;
use Session;
class Chat extends Controller
{
    public function index()
    {
    	$email = Session::get('email');

    	$data['chat'] = M_chat::get_where_by_email($email);
//    	return dd($email    );
    	return view('chat',$data);
    }

    public function getChat()
    {
        $where = array('email' => Session::get('email'),'flag_read' => 0);
        $msg_ = M_chat::getChat($where);
        if (!empty($msg_))
        {
            foreach ($msg_ as $key => $msg):
//            M_chat::updatedFlag($where);
            echo '<div class="speech-bubble speech-right color-black">
                '.$msg->pertanyaan.'
            </div>	
            <div class="clear"></div>
            <div class="speech-bubble speech-left bg-highlight">
                '.$msg->hasil_faq.'
            </div>	
            <div class="clear"></div>
            <em class="speech-read">Delivered & Read - '.$msg->tgl.'</em>';
            endforeach;
        }
    }

// sudah pakai ajax
    // public function post_chat(Request $req)
    // {
    // 	$email = session('email');
    // 	$data['chat'] = M_chat::get_where_by_email($email);
    // 	return view('chat',$data);
    // }
}
