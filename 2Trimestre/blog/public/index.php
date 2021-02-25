<?php
session_start();

ini_set("display_errors",1);
ini_set("display_startup_errors",1);
error_reporting(E_ALL);

require_once "../vendor/autoload.php";
use App\Models\Blog;
use App\Models\Comment;
use App\Models\Users;

use Illuminate\Database\Capsule\Manager as Capsule;
$capsule = new Capsule;

$capsule -> setAsGlobal();
$capsule->bootEloquent();



//20
// use Vlucas\Phpdotenv;
// use Vlucas\Phpdotenv;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
// $dotenv = new Dotenv\Dotenv(__DIR__."/..");

$dotenv->load();
$capsule->addConnection([
    'driver'    => 'mysql',
    'host'      => $_ENV['DB_HOST'],
    'database'  => $_ENV['DB_NAME'],
    'username'  => $_ENV['DB_USER'],
    'password'  => $_ENV['DB_PASS'],
    'charset'   => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix'    => '',
]);

$request = Laminas\Diactoros\ServerRequestFactory::fromGlobals(
    $_SERVER,
    $_GET,
    $_POST,
    $_COOKIE,
    $_FILES
    );
    //  var_dump($request->getUri()->getPath());
    use Aura\Router\RouterContainer;
    $routerContainer = new RouterContainer();
    $map=$routerContainer->getMap();
    // $map->get("index", "/2Trimestre/blog/", "../index.php");
    $map->get("addblog", "/2Trimestre/blog/add", ['controller' => 'App\Controllers\BlogsController','action' => 'getAddBlogAction']);
    $map->post("saveBlog", "/2Trimestre/blog/add", ['controller' => 'App\Controllers\BlogsController','action' => 'getAddBlogAction']);

    $map->get("index", "/2Trimestre/blog/", ['controller' => 'App\Controllers\IndexController','action' => 'indexAction']);
    

    //contact
    $map->get("contact", "/2Trimestre/blog/contact",  ['controller' => 'App\Controllers\IndexController','action' => 'contactAction']);
    //about
    $map->get("about", "/2Trimestre/blog/about",  ['controller' => 'App\Controllers\IndexController','action' => 'aboutAction']);

    //show
    $map->get("show", "/2Trimestre/blog/show",  ['controller' => 'App\Controllers\IndexController','action' => 'showAction']);

    //add usuer
    $map->get("addUser", "/2Trimestre/blog/addUser", ['controller' => 'App\Controllers\AddUserController','action' => 'addAction', 'auth'=>true]);
    $map->post("AddUserSave", "/2Trimestre/blog/addUser", ['controller' => 'App\Controllers\AddUserController','action' => 'addAction', 'auth'=>true] );


      //add blog
      $map->get("addBlog", "/2Trimestre/blog/addblog", ['controller' => 'App\Controllers\BlogsController','action' => 'getAddBlogAction', 'auth'=>true]);
      $map->post("AddBlogSave", "/2Trimestre/blog/addblog", ['controller' => 'App\Controllers\BlogsController','action' => 'getAddBlogAction', 'auth'=>true] );
  
    //registro
    $map->get("login", "/2Trimestre/blog/login", ['controller' => 'App\Controllers\AuthController','action' => 'getLogin']);
    $map->post("postlogin", "/2Trimestre/blog/login", ['controller' => 'App\Controllers\AuthController','action' => 'postLogin']);

    //registro
    $map->get("admin", "/2Trimestre/blog/admin", ['controller' => 'App\Controllers\AdminController','action' => 'getIndex', 'auth'=>true]);
    // $map->post("postlogin", "/2Trimestre/blog/login", ['controller' => 'App\Controllers\AdminController','action' => 'postLogin']);


    $matcher = $routerContainer->getMatcher();
    $route=$matcher->match($request);

    if(!$route){
        echo "no route";
    }else{
        // require $route->handler;
    
    $handlerData=$route->handler;
    $controllerName = $handlerData["controller"];
    $actionName = $handlerData["action"];
        
    $needsAuth=$handlerData["auth"] ?? false;
    $sessionUserId = $_SESSION["userId"] ?? null;

    if($needsAuth && !$sessionUserId){
            header("location: ./login");
        
        }else{
            $controller = new $controllerName;
        
            $response=$controller->$actionName($request);
        
            foreach ($response->getHeaders() as $name => $values) {
                foreach ($values as $value) {
                    header(sprintf("%s: %s", $name, $value), false);
                }
            }
            http_Response_code($response->getStatusCode());
            echo $response -> getBody();
        }
    }





    // var_dump($route);
    // var_dump($route->handler);


// if (!isset($_GET["ruta"])) {
//     $ruta="/";
// }else{
//     $ruta=$_GET["ruta"];
// }


// if ($ruta=="/") {
//     require "../index.php";
//     echo "index";
// } 
// elseif($ruta=="addBlog"){
//     require "../add_blog.php";
//     echo "addBlog";
// }
// elseif($ruta=="contact"){
//     require "../contact_sb.php";
// }
// elseif($ruta=="about"){
//     require "../about_sb.php";
// }
// elseif($ruta=="show"){
//     require "../show_sb.php";
// }

?>