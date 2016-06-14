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

//Route::get('/user', function(){
//    return "User!";
//});

Route::get('user', 'UserController@Index');

Route::get('test/{id}', function($id){
    if($id == 1){
        return "test1";
    }else{
        return $id;
    }
});

Route::get('test2', function(){
    if(Route::input('id') == 1){  //Route::input('id')  id这个参数该如何传过来,是通过 POST吗?
        return "test21";
    }else{
        return "test22";
    }
});