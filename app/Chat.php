<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Chat extends Model
{
    protected $table = "tb_pertanyaan";

    static function get_where_by_email($email)
    {
        $data_input = array('email' => $email);
        return self::where($data_input)->orderBy('id_pertanyaan', 'desc')->get();
    }

    static function getChat($where = array())
    {
        return self::where($where)->get();
    }

    static function updatedFlag($where = array())
    {
        self::where($where)->update(array('flag_read' => 1));
    }


// sudah pakai ajax
    //   public static function get_jawaban_api($pertanyaan)
    //   {
    //   	$post = array(
    //   		'email' => Session('email'),
    //   		'pertanyaan' => $pertanyaan
    //   	);

    // $curl = curl_init();

    // curl_setopt_array($curl, array(
    //   CURLOPT_URL => "http://localhost/app-bot/bot.php",
    //   CURLOPT_RETURNTRANSFER => true,
    //   CURLOPT_ENCODING => "",
    //   CURLOPT_MAXREDIRS => 10,
    //   CURLOPT_TIMEOUT => 30,
    //   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    //   CURLOPT_CUSTOMREQUEST => "POST",
    //   CURLOPT_POSTFIELDS => $post,
    //   CURLOPT_HTTPHEADER => array(
    //     "authorization: Basic ZmludGU6TWlrYW0wMTExMjAxMA==",
    //     "cache-control: no-cache",
    //     "content-type: application/x-www-form-urlencoded",
    //     "postman-token: 9a7d10ed-56bb-2386-332e-20e3545dcecc"
    //   ),
    // ));

    // $response = curl_exec($curl);
    // $err = curl_error($curl);

    // curl_close($curl);

    // if ($err) {
    //   echo "cURL Error #:" . $err;
    // } else {
    //   echo $response;
    // }
    //   }
}
