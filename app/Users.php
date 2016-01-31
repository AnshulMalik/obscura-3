<?php
namespace App;
use DB;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
	protected $table="users";
	protected $primaryKey = 'user_id';
	protected $fillable = ['first_name','last_name','email','uid','mobno','password','user_access_token','user_remember_token','college','level','signup_type'];

	public static $rulesSignup=array(
		'email'=>'required|unique:users,email',
		'password'=>'required|confirmed|min:6',
		'college' => 'required',
		'first_name' => 'required',
		'last_name'  => 'required',
		'mobno' => 'required|min:10',
		'g-recaptcha-response' => 'required|captcha',
	);
	public static $rules_login=[
		'email'=>'required',
		'password'=>'required',
	];

	public static $rulesfbgoole=array(
		'mobno' => 'required|min:10',
		'college' => 'required',
		'email'=>'required|unique:users,email',
		'password'=>'required|confirmed|min:6',
	);

	public static function getData($id)
	{
		return DB::select('select * from users');
	}
	public static function getUserId($uid)
	{
		return DB::table('users')->where('uid',$uid)->pluck('user_id');
	}
	public static function getFirstName($userId)
	{
		return DB::table('users')->where('user_id',$userId)->pluck('first_name');
	}
	public static function getCollege($userId)
	{
		return DB::table('users')->where('user_id',$userId)->pluck('college');
	}
	public static function updateCollege($college,$userId)
	{
		return DB::table('users')
            ->where('user_id', $userId)
            ->update(['college' => $college]);
	}
	public static function getLevel($id)
	{
		return DB::table('users')->where('user_id',$id)->pluck('level');
	}
	public static function getUserMaxLevel($userId)
	{
		return DB::table('users')->where('user_id',$userId)->pluck('level');
	}

	public static function updateLevel($userMaxLevel)
	{
		DB::table('users')
            ->where('user_id', Auth::id())
            ->update(array('answerTime' => time()));
		DB::table('users')
            ->where('user_id', Auth::id())
            ->update(array('level' => $userMaxLevel+1));
	}
	public static function leaderboard()
	{
		return DB::select('SELECT first_name,level,college,last_name FROM users ORDER BY level DESC,answerTime LIMIT 0, 2000');
	}


	public static function getUser()
    {
        return DB::select('select * from ticker');
    }
	public static function getTicker()
	{
		return DB::table('ticker')->where('id','1')->pluck('message');
	}

}