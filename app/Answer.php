<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;
class Answer extends Model
{
	protected $table="answers";



	public static function getAnswer($id,$answer)
	{
		return DB::table('answers')->where('id',$id)->pluck($answer);
	}
}