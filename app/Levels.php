<?php

namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;


class Levels extends Model
{
	protected $table="levels";
	public static function getLevel($levelName)
	{
		return DB::select('select level from levels where levelName=?',array($levelName));
	}

	public static function getLevelName($levelId)
	{
		return DB::select('select levelName from levels where id=?',array($levelId));
	}

}
