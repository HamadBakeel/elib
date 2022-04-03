<?php

namespace coding\app\controllers;

use coding\app\models\Book;

class HomeController extends Controller
{
    public function home()
    {
        $books = Book::getAll('books');
        $categories = Book::getAll('categories');
        $params = array('categories'=>$categories, 'books'=>$books);
        $this->view('home',$params);

    }
    public function cart()
    {
        $this->view('cart');
    }
    public function details()
    {
        $bookId = $_POST['bookId'];
        $book = Book::getItemAsObj('books','*',$bookId);
//        echo "<pre>";
//        print_r($book);
        $this->view('details',$book);
    }
    public function categories()
    {
        $this->view('categories');
    }
    public function checkout()
    {
        $this->view('checkout');
    }

    public static function displayBook(array $book):string
    {
//        echo "<pre>";
//        print_r($book);
        return sprintf('
            <div class="offer">
            <form method="post" action="/details">
                <input type="hidden" value="%s" name="bookId">
                <img src="images/%s" alt="" />
                <button type="submit"></button>
            </form>
            <div class="type">
              <img src="assets/clientPagesAssets/imgs/svg/bookRed.svg" alt="" />
              <span>%s</span>
            </div>
            <p class="title">%s (%s)</p>
            <div class="price">
              <p>%s</p>
              <p>ر.س</p>
            </div>
            <p class="other"></p>
            <div class="options">
              <img src="assets/clientPagesAssets/imgs/svg/star.svg" alt="" />
              <img src="assets/clientPagesAssets/imgs/svg/cartRed.svg" alt="" />
              <img src="assets/clientPagesAssets/imgs/svg/inverseDirectionArrows.svg" alt="" />
            </div>
          </div>
        ',
        $book['id'],
        $book['image'],
        $book['format'],
        $book['title'],
        $book['format'],
        $book['price'],
        );
    }
}