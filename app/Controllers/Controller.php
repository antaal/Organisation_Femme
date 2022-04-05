<?php

namespace App\Controllers;

use Database\DBConnection;

abstract class Controller { //cette classe ne sera jamais instancie donc on le met en abstract
    protected $db;

    public function __construct(DBConnection $db)
    {
       if (session_status() === PHP_SESSION_NONE) {
          session_start();
       }
        $this->db = $db;
    }
    
    protected function view(string $path,array $params = null) //cette function est pour les enfants donc elle peut etre en protected
    {
        ob_start();
        $path = str_replace('.', DIRECTORY_SEPARATOR, $path);
        require VIEWS . $path . '.php';
        $content = ob_get_clean();
        require VIEWS . 'layout.php';
    }

    protected function getDB() // permet la connection a la BD
    {
        return $this->db;
    }

    protected function isAdmin()
    {
        if(isset($_SESSION['auth']) && $_SESSION['auth'] ===1){
            return true;
        }else {
            return header('Location: /login');
        }
    }
}
