<?php
require_once __DIR__ . '/../vendor/autoload.php';

use coding\app\controllers\booksController;
use coding\app\controllers\UsersController;
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


$system->start();

