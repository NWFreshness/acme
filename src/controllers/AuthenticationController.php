<?php 

namespace Acme\Controllers;

use Acme\Models\User;
use Acme\Validation\Validator;
use duncan3dc\Laravel\BladeInstance;
use Acme\Auth\LoggedIn;

class AuthenticationController extends BaseController
{
    
    public function getShowLoginPage(){
        echo $this->blade->render('login');
    }
    
    public function postShowLoginPage()
    {
        $okay = true;
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];

        //look up the user
        $user = User::where('email', '=', $email)->first();

        //check if user was found
        if($user != null){
            //validate credentials
            if(!password_verify($password, $user->password)){
                $okay = false;
            }
        }else{
            $okay = false;
        }
        
        if($user->active == 0){
            $okay = false;
        }

        //if valid, log them in
        if($okay){
            $_SESSION['user'] = $user;
            header("Location: /");
            exit();
        }else{
            //if not valid, redirect to login page
            $_SESSION['msg'] = ["Invalid Login"];
            echo $this->blade->render('login');
            unset($_SESSION['msg']);
            exit();
        }

        
    }

    public function getLogout(){
        unset($_SESSION['user']);
        session_destroy();
        header("Location: /login");
        exit();
    }
    
}
