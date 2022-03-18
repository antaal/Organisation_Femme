<?php
use Router\Router;
require '../vendor/autoload.php';

//Definir des Variables
define('VIEWS', dirname(__DIR__) . DIRECTORY_SEPARATOR . 'views' . DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR );
define('DB_NAME', 'brief_9');
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PWD', '');



$router= new Router($_GET['url']);

$router ->get('/', 'App\Controllers\EntrepriseController@welcome');
$router ->get('/entreprises', 'App\Controllers\EntrepriseController@index');

$router -> get('/entreprises/:id', 'App\Controllers\EntrepriseController@show');



$router->run();