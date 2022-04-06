<?php
namespace App\Controllers;

use App\Models\User;
use App\Validation\Validator;

class UserController extends Controller
{
    public function login()
    {
        return $this->view('auth.login');
    }

    public function loginPost()
    {   
        $validator = new Validator($_POST);
        $errors = $validator->validate([
            'username' =>['required', 'min:3'],
            'password' => ['required']
        ]);
        if ($errors) {
            $_SESSION['errors'][] = $errors;
            header('Location: /login');
            exit;
        }
        $user = (new User($this->getDB()))->getByUsername($_POST['username']);
        // var_dump(password_verify($_POST['password'], $user->password)) ;
        // die(var_dump($user->password));
        // die(var_dump($_POST));


         if (password_verify($_POST['password'], $user->password)) {
           
        $_SESSION['auth'] = (int) $user->admin;
        return header('Location: /admin/entreprises?success=true');
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