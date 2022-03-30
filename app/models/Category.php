<?php
namespace coding\app\models;

use coding\app\models\Model;

use coding\app\system\AppSystem;

class Category extends Model{
    function __construct()
    {

        parent::$tblName="categories";
    }
    function save():bool{


        $values=array();
        $columns=array();
        //get_object_
        foreach(get_object_vars($this) as $key=> $property){
            //echo $property;
            if($property!=self::$tblName)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}

        }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
        $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";
        //echo $sql_query;

        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        if($stmt->execute())
            return false;
        return false;
        // return true;
        //echo $sql_query;
    }
    public function getAll(){
        $sql_query="select * from ".self::$tblName."";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public function update($columns,$values,$condition){
        $finalQuery = "";
        if(count($columns) == count($values)){
            $finalQuery = "UPDATE ".self::$tblName." SET ";
            for ($i=0 ; $i<count($values) ; $i++) {
                $column = $columns[$i];
                $value = $values[$i];
                if ($i == count($values) - 1) $pair = "$column = \"$value\"";
                else $pair = "$column = $value , ";
                $finalQuery .= $pair;
            }
            $finalQuery.=" WHERE ".$condition;
//            echo $finalQuery;
        }
        $stmt=AppSystem::$appSystem->database->pdo->prepare($finalQuery);
        $stmt->execute();
//        return $stmt->fetchAll();
    }
}
?>