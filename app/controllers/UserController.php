<?php
/**
 * Created by PhpStorm.
 * User: Ivan Marchuk
 * Date: 28.03.2018
 * Time: 22:46
 */

namespace app\controllers;


use app\models\User;

class UserController extends AppController
{
    public function signupAction(){
        if(!empty($_POST)){
            $user = new User();
            debug($user);
            die;
        }
        $this->setMeta('Registrieren');

    }
    public function loginAction(){

    }
    public function logoutAction(){

    }

}