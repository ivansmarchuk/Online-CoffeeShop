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
    /**
     * action for form validation
     */
    public function signupAction(){
        if(!empty($_POST)){
            $user = new User();
            $data = $_POST;
            $user->load($data);
            if(!$user ->validate($data)){
               $user->getErrors();
               redirect();
            }else{
                $_SESSION['success'] = 'OK';
                redirect();
            }
     }
        $this->setMeta('Registrieren');

    }
    public function loginAction(){

    }
    public function logoutAction(){

    }

}