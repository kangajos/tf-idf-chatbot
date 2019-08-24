<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
class Login extends Model
{
	protected $table = "users";

    public  static function get_where_by_userpass($data_input)
    {
    	return self::selectRaw('users.*')
    		->where($data_input);
    }
}
