<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }










    public function facebook_redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }


    public function facebook()
    {
        $user = Socialite::driver('facebook')->user();

        //print_r($user);
        echo $user['id'];


        $userId=Users::getUserId($user['id']);
            if($userId)
            {
                Auth::loginUsingId($userId);
                $firstname = Users::getFirstName($userId);
                Session::put('first_name',$firstname);
                $data = "Welcome ";
                return Redirect::to('/dashboard')->with('message',$data." ".$firstname);
            }
            else{

            echo "haha";
            return;
            $newUserData['first_name'] = $user['first_name'];
            $newUserData['last_name'] = $user['last_name'];
            $newUserData['email'] = $user['email'];
            $newUserData['uid'] = $user['id'];
            $newUserData['signup_type'] = 2;
            //$newUserData['profile_image'] = "https://graph.facebook.com/"+$result['id']+"/picture?width=250&height=250";
            Session::put('fb',$newUserData);
            return View::make('fbgoogle')->with('newUserData',$newUserData);

        }
        return;
    }

    /*public function loginWithFacebook() {

    // get data from input
  

    // get fb service
    // 
    //return "utkarsh";
    $fb = OAuth::consumer( 'Facebook','http://www.obscuraconflu.com/fb/');

    // check if code is valid
   // $code = "";
    // if code is provided get user data and sign in
    // if not ask for permission first
   
        // get fb authorization
        $url = $fb->getAuthorizationUri();

        // return to facebook login url
         return Redirect::to( (string)$url );


}
public function loginDone()
{


    $code = Input::get( 'code' );
    $fb = OAuth::consumer( 'Facebook','http://www.obscuraconflu.com/fb/');


    // check if code is valid
    //$code = "";
    // if code is provided get user data and sign in
   

        // This was a callback request from facebook, get the token
        $token = $fb->requestAccessToken($code);

        // Send a request with it
        $result = json_decode( $fb->request( '/me' ), true );
        //$result1 = json_decode($fb->getUser());
            $userId=Users::getUserId($result['id']);
            if($userId)
            {
                Auth::loginUsingId($userId);
                $firstname = Users::getFirstName($userId);
                Session::put('first_name',$firstname);
                $data = "Welcome ";
                return Redirect::to('/dashboard')->with('message',$data." ".$firstname);
            }
            else{


            $newUserData['first_name'] = $result['first_name'];
            $newUserData['last_name'] = $result['last_name'];
            $newUserData['email'] = $result['email'];
            $newUserData['uid'] = $result['id'];
            $newUserData['signup_type'] = 2;
            //$newUserData['profile_image'] = "https://graph.facebook.com/"+$result['id']+"/picture?width=250&height=250";
            Session::put('fb',$newUserData);
            return View::make('fbgoogle')->with('newUserData',$newUserData);

        }
        //$message = 'Your unique facebook user id is: ' . $result['id'] . ' and your name is ' . $result['name'];
        //echo $message. "<br/>".$result['link']."<br>",$result['link']."<br>".$result['username'];

        //Var_dump
        //display whole array().
        //dd($result);

}
*/
public function googleAuth()
{
     // get data from input
    $code = Input::get( 'code' );

    // get google service
    $googleService = OAuth::consumer( 'Google' ,'http://www.obscuraconflu.com/google');


    $url = $googleService->getAuthorizationUri();

        // return to google login url
        return Redirect::to( (string)$url );
    // check if code is valid

    // if code is provided get user data and sign in
}

public function loginDoneGoogle()
{
    $code = Input::get( 'code' );
    $googleService = OAuth::consumer( 'Google' ,'http://www.obscuraconflu.com/google');


     $token = $googleService->requestAccessToken( $code );

        // Send a request with it
        $result = json_decode( $googleService->request( 'https://www.googleapis.com/oauth2/v1/userinfo' ), true );


        //Var_dump
        //display whole array().
        $userId=Users::getUserId($result['id']);
            if($userId)
            {
                Auth::loginUsingId($userId);
                $firstname = Users::getFirstName($userId);
                Session::put('first_name',$firstname);
                $data = "Welcome ";
                return Redirect::to('/dashboard')->with('message',$data." ".$firstname);
            }
            else{


            $newUserData['first_name'] = $result['given_name'];
            $newUserData['last_name'] = $result['family_name'];
            $newUserData['email'] = $result['email'];
            $newUserData['uid'] = $result['id'];
            $newUserData['signup_type'] = 3;
            //$newUserData['profile_image'] = "https://graph.facebook.com/"+$result['id']+"/picture?width=250&height=250";
            Session::put('fb',$newUserData);
            return View::make('fbgoogle')->with('newUserData',$newUserData);

        }
        
  

    }


public function obscura()
{
    //echo $event;
    return Redirect::to('/test');
    //$data = Users::find(1);
    //return $data->email;

    $data['firstname'] = "Bharat";
    $data['lastname'] = "Maan";
    $data['email']  = "bharat6dx@gmail.com";
    $data['level'] = 10;
    $data['college'] = "NIT Kurukshetra";
    if(Users::create($data))
    {
        return "Success";
    }
    else
    {
        return "Failed";
    }
}
 public function signup()
 {
    if(Auth::check())
        {
            
            return Redirect::to("/dashboard")->with('message','You are all-ready logged in');
        }
    return View::make('register');
 }

 public function postSignup()
 {
    $validator=Validator::make($newUserData=Input::all(),Users::$rulesSignup);
    if($validator->fails())
        {

            return Redirect::back()->withErrors($validator)->withInput(Input::except('password','email'));
        }
    else
    {
            
                $newUserData['password'] = Hash::make(Input::get('password'));
                Users::create($newUserData);
                return Redirect::to('/login')->with('message','Registered Successfully');
    }
 }
 public function postfbgoogle()
 {
    $validator=Validator::make($newUserData=Input::all(),Users::$rulesfbgoole);
    if($validator->fails())
        {

            return Redirect::to('/fbgoogle')->withErrors($validator)->withInput();
        }
    else
    {
                if(Session::has('fb'))
                {
                    $tempData = Session::get('fb');
                    $newUserData['uid'] = $tempData['uid'];
                    $newUserData['signup_type'] = $tempData['signup_type'];
                    if(Users::create($newUserData))
                    {
                        Session::forget('fb');
                        return Redirect::to('/login')->with('message','Registered succesfully');
                    }
                    else
                    {
                        return Redirect::to('/login')->with('message','Registration failed');
                    }
                    Session::forget('fb');
            }
    }
 }
 public function fbgoogle()
 {
    return View::make('fbgoogle');
 }

 public function login()
 {
    if(Auth::check())
        {
            
            return Redirect::to("/dashboard")->with('message','You are all-ready logged in');
        }
        return view('login');
 }

 public function postLogin()
{
    $remember=(Input::has('remember'))?true:false;
        $credentials=$this->getCerdentials();
        if(Auth::attempt($credentials,$remember))
            {
                Session::flash('success','Welcome user!');
                /*
                |$id is used to store the the unique 'user_id'
                |of the logged in user in session varible so thar
                |latter this can be used.
                |
                */
                //$data=$this->users->get(Input::get('email'));
                $firstname = Users::getFirstName(Auth::id());
                Session::put('first_name',$firstname);
                $data = "Welcome ";
                return Redirect::to('/dashboard')->with('message',$data." ".$firstname);
            }
            
        else
            {
                return Redirect::back()->with('message','Wrong email or password');
                //return Redirect::to('/login')->with('failed',Lang::get('login.invalid_login'));
            }

}

public function getCerdentials()
    {
        return [
            "email"=>Input::get('email'),
            "password"=>Input::get('password'),
        ];
    }

public function logout()
    {
        if(Users::getUserMaxLevel(Auth::id()) == 6)
        {
            Users::updateLevel(6);
        }
        Auth::logout();
        Session::flush();
        return Redirect::to("/login")->with('message','Successfully you are logged-out');
    }
}
