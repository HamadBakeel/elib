<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\booksController;
use coding\app\controllers\HomeController;
use coding\app\system\AppSystem;
use coding\app\system\Router;
use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(dirname(__DIR__));//createImmutable(__DIR__);
$dotenv->load();

$config=array(
  'servername'=>$_ENV['DB_SERVER_NAME'],
  'dbname'=>$_ENV['DB_NAME'],
  'dbpass'=>$_ENV['DB_PASSWORD'],
  'username'=>$_ENV['DB_USERNAME']
);
$system=new AppSystem($config);

Router::get('/users',[UsersController::class,'show']);


Router::get('/books',function(){
  echo "books route path";
});

Router::get('/new_book',[booksController::class,'create']);
Router::get('/books',[booksController::class,'listAll']);
Router::post('/save_book',[booksController::class,'store']);
Router::get('/home',[HomeController::class,'home']);
Router::get('/details',[HomeController::class,'details']);
Router::get('/cart',[HomeController::class,'cart']);
Router::get('/checkout',[HomeController::class,'checkout']);
Router::get('/categories',[HomeController::class,'categories']);


//Router::get('/cart',function (){
//    AppSystem::$appSystem->router->view('cart',[]);
//});
//Router::get('/details',function (){
//    AppSystem::$appSystem->router->view('details',[]);
//});
//Router::get('/categories',function (){
//    AppSystem::$appSystem->router->view('categories',[]);
//});
//Router::get('/checkout',function (){
//    AppSystem::$appSystem->router->view('checkout',[]);
//});
//Router::get('/home',function (){
//    AppSystem::$appSystem->router->view('home',[]);
//});
$system->start();

