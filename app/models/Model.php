<?php 
namespace coding\app\models;
use coding\app\system\AppSystem;
class Model{
    public static  $tblName;

        function save():bool{
        
      
        $values=array();
        $columns=array();
        foreach(get_object_vars($this) as $key=> $property){
            if($property!=self::$tblName)
            {
                $values[]=is_string($property)?"'".$property."'":$property;
                $columns[]=$key;}
            }
        $values=implode(",",$values);
        $columns=implode(",",$columns);
        $sql_query="insert into ".self::$tblName." (".$columns." ) values (".$values.")";

        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
//     echo $sql_query;
        if($stmt->execute())
            return true;
        return false;
       // return true;
    }

    public static function getAll($tableName): array{
        $sql_query="select * from ".$tableName."";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();
    }

    public static function getItem($table,$item,$id)
    {
        $sql_query="SELECT $item FROM ".$table." WHERE id = $id";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetch();
    }
    public static function getItemAsObj($table,$item,$id)
    {
        $sql_query="SELECT $item FROM ".$table." WHERE id = $id";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchObject();
    }

    public static function getAllItems($table,$id):array
    {
        $sql_query="SELECT *  FROM ".$table." WHERE category_id = $id";
        $stmt=AppSystem::$appSystem->database->pdo->prepare($sql_query);
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>