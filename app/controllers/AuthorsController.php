<?php

namespace coding\app\controllers;

use coding\app\models\Author;

class AuthorsController extends Controller{

    public function listAll(){
        $author =new Author();
        $allAuthors= $author->getAll();
        $this->view('list_authors',$allAuthors);
    }

    function create(){
        $this->view('new_author');
    }

    function store(){
//        echo "<pre>";
//        print_r($_POST);
        $author=new Author();

        $author->name=$_POST['authorName'];
        $author->email = $_POST['authorEmail'];
        $author->phone = $_POST['authorPhone'];
        $author->bio = $_POST['authorBio'];
        $author->created_by=$_POST['createdBy'];
        $author->is_active=$_POST['is_active'];

        $author->save();
        header("location: /authors");
    }
    function edit(){}
    function update(){}
    function remove(){}







}

?>