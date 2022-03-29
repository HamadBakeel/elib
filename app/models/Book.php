<?php

namespace coding\app\models;

use coding\app\models\Model;

class Book extends Model{


    function __construct()
    {
        parent::$tblName="books";
    }

    function __set($name, $value)
    {
        $this->$name=$value;
    }

}
