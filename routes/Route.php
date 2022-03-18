<?php
namespace Router;

use Database\DBConnection;

class Route {

    public $path;
    public $action;
    public $matches;

    public function __construct($path, $action)
    {
        $this->path= trim($path, '/'); //on va stocker le path qu'il envoie
        $this->action= $action; //on va stocker l'action envoyer
    }

    public function matches (string $url){
        $path = preg_replace('#:([\w]+)#', '([^/]+)', $this->path); //\w est egale à [azAZ0-9]
        $pathToMatch = "#^$path$#";

        if (preg_match($pathToMatch, $url, $matches)) {
            $this->matches = $matches;
            return true;
        }else{
            return false;
        }
        
    }

    public function execute()//Pour Recuperer le controller et l'action
    {
        $params = explode('@', $this->action); //@ est le delimiteur
        $controller = new $params[0]( new DBConnection(DB_NAME, DB_HOST, DB_USER, DB_PWD));
        $method = $params[1];

        return isset($this->matches[1]) ? $controller->$method($this->matches[1]) : $controller->$method();
    }

}