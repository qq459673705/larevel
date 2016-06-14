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

//Route::get('user', 'UserController@Index');

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

Route::get('test3', function(){   //这个才是正确从URL获取对应参数的方法 Input::get()
    if(Input::get('id') == 1){
        return "111";
    }else{
        return Input::get('id');
    }
});

//Route::get('user', array('before' => 'old', function()  //这个指的是 参数 before == old 时执行内部方法
//{
//    return 'You are over 200 years old!';             //测试 http://localhost/larevel/public/user?before=old
//}));


//Route::get('user', array('before' => 'auth|old', function()  //这种写法有问题,暂时不知道什么地方出了问题
//{
//    return 'You are authenticated and over 200 years old!';
//}));
//
//Route::filter('age', function($route, $request, $value)  //没看明白怎么用
//{
//    //
//});
//
//Route::get('user', array('before' => 'age:200', function()
//{
//    return 'Hello World';
//}));