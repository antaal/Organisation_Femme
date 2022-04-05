<?php
namespace App\Controllers;

use App\Models\User;
// use App\Validation\Validator;

class UserController extends Controller
{
    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {
        $user = (new User($this->getDB()))->getByUsername($_POST['username']);

        
         if (password_verify($_POST['password'], $user->password)) {
           
        $_SESSION['auth'] = (int) $user->admin;
        return header('Location: /?success=true');
        }else {
                 return header('Location: /login');
        }

       

    }

    public function logout()
    {
        session_destroy();
        return header('Location: /');
    }
}