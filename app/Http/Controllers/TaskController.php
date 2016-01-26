<?php

namespace App\Http\Controllers;

use App\Task;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\TaskRepository;
use DB;
use App\User;
use App\Users;
use Mail;
class TaskController extends Controller
{
	public function mail()
	{

		/*$user = User::getUser();
		echo $user[0]->first_name;
		return;
		
		echo "Welcome Utkarsh";*/
		$array = ['foo' => 'bar'];
		Mail::send('emails.welcome',$array, function ($message) {
    		$message->from('info@obscuraconflu.com', 'Laravel');

    		$message->to('utkarsh578@gmail.com');
	});
		
	}
}