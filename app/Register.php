<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class Register extends Model
{
	protected $table = "users";
	public static function insert_data($data_input)
	{
		return self::insert($data_input);
	}
}
