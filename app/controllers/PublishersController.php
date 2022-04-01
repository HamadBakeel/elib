<?php
namespace coding\app\controllers;

use coding\app\models\Publisher;

class PublishersController extends Controller {

    public function listAll(){
        $publisher =new Publisher();
        $allPublishers=$publisher->getAll();

        $this->view('list_publishers',$allPublishers);
    }
    function create(){
        $this->view('new_publisher');
    }

    function store(){
        echo "<pre>";
        print_r($_POST);
        echo "<pre>";
        print_r($_FILES);
        $publisher=new Publisher();

        $imageName=$this->uploadFile($_FILES['publisherImage']);

        $publisher->name=$_POST['publisherName'];
        $publisher->phone= $_POST['publisherPhone'];
        $publisher->alt_phone=$_POST['publisherAltPhone'];
        $publisher->fax = $_POST['publisherFax'];
        $publisher->email= $_POST['publisherEmail'];
        $publisher->address = $_POST['publisherAddress'];
        $publisher->country = $_POST['publisherCountry'];
        $publisher->image=$imageName!=null?$imageName:"default.png";

        $publisher->created_by=1;


        $publisher->save();

    }

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
?>