<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/sendmail','TaskController@mail');
Route::get('/fb_login','UsersController@facebook_redirect');
Route::get('/account/facebook','UsersController@facebook');

Route::get('/google_login','UsersController@google_redirect');
Route::get('/account/google','UsersController@google');
//Route::get('/check','UsersController@check');

Route::get('/credits', 'UsersController@credits');
	
Route::get('/obscura','UsersController@obscura');

Route::get('/signup','UsersController@signup');

Route::get('/login','UsersController@login');
Route::post('/postLogin','UsersController@postLogin');
Route::get('/','UsersController@home');
//Route::post('/test','HomeController@test');
Route::post('/updateCollege','UsersController@updateCollege');
Route::post('/postSignup','UsersController@postSignup');
Route::post('/postfbgoogle','UsersController@postfbgoogle');
Route::get('/fbgoogle','UsersController@fbgoogle');

Route::get('/profile', [
    'middleware' => 'auth',
    'uses' => 'UsersController@show'
]);






Route::group(['middleware' => ['auth']], function () {
    //

 Route::get('/dashboard','UsersController@dashboard');
Route::get('/college','UsersController@college');   
Route::get('/start','UsersController@start');
Route::get('/level0','UsersController@level0');
Route::get('/level1','UsersController@level1');
Route::get('/level2','UsersController@level2');
Route::get('/level3','UsersController@level3');
Route::get('/level4','UsersController@level4');
Route::get('/level5','UsersController@level5');
Route::get('/level6','UsersController@level6');
Route::get('/level6_1','UsersController@level6_1');
Route::get('/level7','UsersController@level7');
Route::get('/level8','UsersController@level8');

Route::get('/level8_lol123', 'UsersController@level8_lol123');
Route::get('/level8_obsda', 'UsersController@level8_obsda');
Route::get('/level8_delhi', 'UsersController@level8_delhi');
Route::get('/level8_sup1_', 'UsersController@level8_sup1_');
Route::get('/level8_alpha', 'UsersController@level8_alpha');
Route::get('/level8_roger', 'UsersController@level8_roger');
Route::get('/level8_hahaha', 'UsersController@level8_hahaha');
Route::get('/level8_stairs', 'UsersController@level8_stairs');
Route::get('/level8_zozozo', 'UsersController@level8_zozozo');

Route::get('/level9','UsersController@level9');
Route::get('/level10','UsersController@level10');
Route::get('/level11','UsersController@level11');
Route::get('/level12','UsersController@level12');
Route::get('/level13','UsersController@level13');
Route::get('/level14','UsersController@level14');
Route::get('/level15','UsersController@level15');
Route::get('/level16','UsersController@level16');
Route::get('/level17','UsersController@level17');
Route::get('/level18','UsersController@level18');
Route::get('/level19','UsersController@level19');
Route::get('/level20','UsersController@level20');
Route::get('/level21','UsersController@level21');
Route::get('/level21_1','UsersController@level21_1');
Route::get('/level22','UsersController@level22');
Route::get('/level22_1','UsersController@level22_1');

Route::get('/gsh','UsersController@gsh');
Route::get('/dd1','UsersController@dd1');
Route::get('/divfinal','UsersController@divfinal');
Route::get('/dsa','UsersController@dsa');
Route::get('/harry_cccsweg','UsersController@harry_cccsweg');
Route::get('/hutfinal','UsersController@hutfinal');
Route::get('/lovecgood','UsersController@lovecgood');
Route::get('/wwwnewfinal1','UsersController@wwwnewfinal1');
Route::get('/wall','UsersController@wall');


Route::get('/level23','UsersController@level23');
Route::get('/level24','UsersController@level24');
Route::get('/level24_1','UsersController@level24_1');
Route::get('/level25','UsersController@level25');
Route::get('/level26','UsersController@level26');
Route::get('/level27','UsersController@level27');
Route::get('/level28','UsersController@level28');
Route::get('/level29','UsersController@level29');
Route::get('/level30','UsersController@level30');
Route::get('/level31','UsersController@level31');
Route::get('/level32','UsersController@level32');
Route::get('/congo','UsersController@congo');
Route::get('/logout','UsersController@logout');
Route::get('/leaderboard','UsersController@leaderboard');
//Route::get('/home','UsersController@home');

Route::post('/checkAnswer','UsersController@checkAnswer');


Route::get('/feedback','UsersController@feedback');
Route::post('/postFeedback','UsersController@postFeedback');
});