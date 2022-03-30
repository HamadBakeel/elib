<?php

namespace coding\app\controllers;

use coding\app\models\Category;

class CategoriesController extends Controller{

    function listAll(){
        $categories=new Category();
        $allCategories=$categories->getAll();
        //print_r($allCategories);

        $this->view('list_categories',$allCategories);

    }
    function create(){
        $this->view('new_category');

    }

    function store(){
        print_r($_POST);
        echo "<pre>";
        print_r($_FILES);
        $category=new Category();

        $category->name=$_POST['categoryName'];
        echo print_r($_FILES);
        $imageName=$this->uploadFile($_FILES['categoryImage']);

        $category->image=$imageName!=null?$imageName:"default.png";
        $category->created_by=1;
        $category->is_active=$_POST['is_active'];

        $category->save();
        header('Location: /categories');
    }
    function edit(){

    }

    function update(){

    }

    public function unActivate(){
        $id = $_POST['id'];
        $is_active = $_POST['is_active'];
        if($is_active == 0) $is_active =1;
        else $is_active = 0;
        $category = new Category();
        $category->update(array("is_active"), array ($is_active), "id = $id");
        header("Location: /categories");
    }

    public static function uploadFile(array $imageFile): string
    {
        // check images directory
        if (!is_dir(__DIR__ . '/../../public/images')) {
            mkdir(__DIR__ . '/../../public/images');
        }

        if ($imageFile && $imageFile['tmp_name']) {
            $image = explode('.', $imageFile['name']);
            $imageExtension = end($image);

            $imageName = uniqid(). "." . $imageExtension;
            $imagePath =  __DIR__ . '/../../public/images/' . $imageName;

            move_uploaded_file($imageFile['tmp_name'], $imagePath);

            return $imageName;
        }

        return "";
    }


}

?>