<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of UserController
 *
 * @author qiyou
 */
class UserController extends BaseController {
    //put your code here
    public function Index(){
        $data = User::all();
        return View::make("user")->with('users', $data);
    }
}
