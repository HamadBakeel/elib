<?php

namespace coding\app\controllers;

use coding\app\models\Book;


class booksController extends Controller
{

    public function addBook(){
        $this->view("new_book");
    }

    public function saveBook(){

        $book = new Book();
        print_r($book) ;
        //print_r($_POST);
//        $user=new User();
//        $user->name=$_POST['name'];
//        $user->email=$_POST['email'];
//        $user->password=md5($_POST['password']);
//        $user->is_active=isset($_POST['is_active'])?1:0;
//        $user->role_id=1;
//        $user->save();
//        if($user->save())
//
//            $this->view('feedback',['success'=>'data inserted successful']);
//        else
//            $this->view('feedback',['danger'=>'can not add data']);

    }
}