<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
class Answer extends Model
{
	protected $table="answers";



	public static function getAnswer($level,$query)
	{
		return DB::table('answers')->where('level',$level)->pluck($query);
	}
}