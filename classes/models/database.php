<?php

include_once ("classes/dal/Sql.php");

class DataBase{


    public static function listDataBase(){

        $sql = new Sql();

        return $sql->select("SELECT DISTINCT SCHEMA_NAME
        FROM information_schema.SCHEMATA
        WHERE  SCHEMA_NAME NOT IN ('information_schema', 'performance_schema', 'mysql')
        ORDER BY SCHEMA_NAME");
    }
}

?>