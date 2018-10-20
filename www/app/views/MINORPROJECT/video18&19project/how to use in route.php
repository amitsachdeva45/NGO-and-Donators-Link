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
//STEP 1:SETUP DATABASE
//STEP2::ALLOW USERS TO ADD PROJECT ON WEBSITE
//STEP 3: ALLOW USERS TO DOANTE MONEY TO PROJEXCT



Route::get('/', function()
{
	

$project=DB::table('projects')->get();
	
  	
  	return View::make('MINORPROJECT/project')->with('aaa',$project);
	

	
});


Route::get('hhh',function()

{     
	$project=DB::table('projects')->get();
	return View::make('MINORPROJECT/project')->with('name','gaga')->with('aaa',$project);
}
	);


Route::post('add', function()
{
//dd(Input::all()); whole array on input form
$name=Input::get('username');//SINGLE PERSON OF ARRAY get name from form
$id=Input::get('id');//SINGLE PERSON OF ARRAY get id from form

if(DB::table('projects')->whereId($id)->first()!=null)//CHECK NO DUPLICACY IS DATABASE
	return 'already exits';
DB::table('projects')->insert(array('name'=>$name,'id'=>$id));//INSERT IN DATABSSE

return Redirect::to('/');//ridirect to which page& HERE GIVE PATH

});

Route::post('uu',function()
{
	$donation=Input::get('money');
	if($donation==null)
		$donation=0;
	$uid=Input::get('uid');
	DB::table('projects')->where('id',$uid)->increment('money',$donation);
	return Redirect::to('/');
});

/*
//BASIC  CONTROLLER
Route::get('/','HomeController@showWelcome');
//RESTFUL CONTROLLER
Route::controller('portfolio','portfolioController');
//RESOURCE CONTROLLER
Route::resources('recipes','projectController');
 
	*/
  	

	




Route::get('/', function()
{
	

$project=DB::table('projects')->get();
	
  	
  	return View::make('MINORPROJECT/project')->with('aaa',$project);
	

	
});


Route::get('hhh',function()

{     
	$project=DB::table('projects')->get();
	return View::make('MINORPROJECT/project')->with('name','gaga')->with('aaa',$project);
}
	);


Route::post('add', function()
{
//dd(Input::all()); whole array on input form
$name=Input::get('username');//SINGLE PERSON OF ARRAY get name from form
$id=Input::get('id');//SINGLE PERSON OF ARRAY get id from form

if(DB::table('projects')->whereId($id)->first()!=null)//CHECK NO DUPLICACY IS DATABASE
	return 'already exits';
DB::table('projects')->insert(array('name'=>$name,'id'=>$id));//INSERT IN DATABSSE

return Redirect::to('/');//ridirect to which page& HERE GIVE PATH

});

Route::post('uu',function()
{
	$donation=Input::get('money');
	if($donation==null)
		$donation=0;
	$uid=Input::get('uid');
	DB::table('projects')->where('id',$uid)->increment('money',$donation);
	return Redirect::to('/');
});

/*
//BASIC  CONTROLLER
Route::get('/','HomeController@showWelcome');
//RESTFUL CONTROLLER
Route::controller('portfolio','portfolioController');
//RESOURCE CONTROLLER
Route::resources('recipes','projectController');
 
	*/
  	

	




