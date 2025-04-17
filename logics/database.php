<?php
    $host       = "localhost";
    $db_user    = "root";
    $password   = "";
    $dbname     = "solidforge";
    
$db = new mysqli($host, $db_user, $password, $dbname);

if(!$db == true){
    echo 'failed';
}
