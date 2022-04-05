<?php
namespace App\Controllers;

use App\Models\User;

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

           if ($user) {
               # code...
           }
        }else {
            return header('location: /login');
        }

    }
}