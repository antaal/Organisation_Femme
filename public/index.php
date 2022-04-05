<?php
use Router\Router;
use App\Exceptions\NotFoundException;
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

$router ->get('/login', 'App\Controllers\UserController@login');
$router ->post('/login', 'App\Controllers\UserController@loginPost');


$router -> get('/admin/entreprises', 'App\Controllers\Admin\PostController@index');
$router -> get('/admin/entreprises/create', 'App\Controllers\Admin\PostController@create');
$router -> post('/admin/entreprises/create', 'App\Controllers\Admin\PostController@createPost');
$router -> post('/admin/entreprises/delete/:id', 'App\Controllers\Admin\PostController@destroy');
$router -> get('/admin/entreprises/edit/:id', 'App\Controllers\Admin\PostController@edit');
$router -> post('/admin/entreprises/edit/:id', 'App\Controllers\Admin\PostController@update');





try {
    $router->run();
} catch (NotFoundException $e) {
    return $e->error404();
}