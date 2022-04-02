<?php

namespace coding\app\controllers;

use coding\app\models\Book;


class BooksController extends Controller
{
    public function create(){

        $categories = Book::getAll('categories');
        $authors = Book::getAll('authors');
        $publishers = Book::getAll('publishers');

        $params = array('categories'=> $categories, 'authors'=> $authors, 'publishers'=>$publishers);

        $this->view("new_book",$params);
    }

    public function listAll(){
        $allBooks = Book::getAll("books");
        $this->view('list_books',$allBooks);
    }



    function store(){
//        echo "<pre>";
//        print_r($_POST);
//        echo "<pre>";
//        print_r($_FILES);
        $book=new Book();

        $imageName = $this->uploadFile($_FILES['bookImage']);
        $book->title = $_POST['bookTitle'];
        $book->image = $imageName!=null?$imageName:"default.png";
        $book->price = $_POST['bookPrice'];
        $book->description = $_POST['bookDescription'];
        $book->pages_number = $_POST['bookPages'];
        $book->quantity = $_POST['bookQuantity'];
        $book->format = $_POST['bookFormat'];
        $book->category_id = $_POST['bookCategory'];
        $book->author_id = $_POST['bookAuthor'];
        $book->publisher_id = $_POST['bookPublisher'];
        $book->created_by=1;
        $book->is_active = 1;
        $book->save();
        header("location: /books");
    }
    function edit(){}
    function update(){}
    public function remove(){}


    public static function uploadFile(array $imageFile): string
    {
        // check images direction
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