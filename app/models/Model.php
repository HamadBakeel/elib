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

    public function getItem($table,)
    {

    }
}
?>