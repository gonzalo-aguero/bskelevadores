<?php
    error_reporting(0);
    $host = "localhost:3306";
    $user = "";
    $pass = "";
    $db = "";
    $connection = mysqli_connect($host,$user,$pass,$db);
    mysqli_set_charset($connection, "utf8");
    if(!$connection){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "bsk_elevadores";
        $connection = mysqli_connect($host,$user,$pass,$db);
        mysqli_set_charset($connection, "utf8");  
    }
?>