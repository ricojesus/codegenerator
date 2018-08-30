<?php
include_once ("classes/models/database.php");


$lstDataBase = DataBase::listDataBase();
include_once ("classes/views/main.php");

?>