<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class AdminModel extends Model
{
    public $timestamps = false;
    protected $table = "tb_faq";

    static function getAllQuiz()
    {
        return self::get();
    }

    static function saved($params = array())
    {
        DB::beginTransaction();
        try {
            self::insert($params);
            DB::commit();
            return TRUE;
        } catch (\Exception $e) {
            DB::rollBack();
            return FALSE;
        }
    }

    static function edit($where = array())
    {
        return self::where($where)->first();
    }

    static function updated($params = array(), $where = array())
    {
        return self::where($where)->update($params);
    }

    static function deleted($where = array())
    {
        return self::where($where)->delete();
    }

    static function getChatBot()
    {
        return DB::table("tb_pertanyaan")->get();
    }

    static function getUser()
    {
        return DB::table("users")->get();
    }

    static function user_edit($where = array())
    {
        return DB::table("users")->where($where)->first();
    }

    static function login($where = array())
    {
        return DB::table("users")->where($where)->fisrt();
    }

    static function no()
    {
        return DB::table("tb_pertanyaan")->where('status', "no")->get()->count();
    }

    static function yes()
    {
        return DB::table("tb_pertanyaan")->where('status', "yes")->get()->count();
    }

    static function trendingChat()
    {
        return DB::table("tb_pertanyaan")->select(DB::raw("COUNT(id_faq) as total"), "hasil_faq")->where("status","yes")->groupBy("id_faq","hasil_faq")->orderBy("total","DESC")->first();
    }
}
