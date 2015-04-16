<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});
Route::get('/home', function()
{
	return View::make('posting.home');
});
Route::get('/acc', function()
{
  return View::make('posting.acc');
});
Route::get('/register', function()
{
	return View::make('posting.register');
});

Route::post('/register', array(
    'uses' => 'UserController@postRegister'
));
Route::get('/login', function()
{
	return View::make('posting.login');
});

Route::post('/login', array(
    'uses' => 'UserController@postLogin'
));

Route::group(array('before' => 'auth'), function()
{
  Route::get('/logout', array(
    'uses' => 'UserController@Logout'
));

Route::get('/welcome', function()
      {
       return View::make('posting.welcome');

      });
});

if (Auth::check())
{
Route::get('/welcome', function()
{
return View::make('posting.welcome');
});
}

Route::get('/readques?qid={id}',array(
  'uses'=>'ViewController@get_ques'
));

Route::post('/readques',array(
  'uses'=>'ViewController@read'
));

Route::get('/readques', function()
{
return View::make('forum.readques');
});

Route::get('/ansques',array(
'uses'=>'ViewController@get_ques'
));

Route::post('/anslist',array(
'uses'=>'ViewController@get_ans'
));

Route::get('/anslist', function()
{
return View::make('forum.anslist');
});


Route::resource('askques','QuesController');
Route::resource('ansques','AnsController');
Route::resource('viewques','ViewController');
