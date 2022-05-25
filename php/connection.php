<?php
    error_reporting(0);
    $host = "localhost:3306";
    $user = "vphftsxp_bsk";
    $pass = "vaeleBSK92";
    $db = "vphftsxp_bskelevadoresdb";
    $connection = mysqli_connect($host,$user,$pass,$db);
    mysqli_set_charset($connection, "utf8");
    if(!$connection){
        $host = "localhost";
        $user = "root";
        $pass = "";
        $db = "bskelevadoresdb";
        $connection = mysqli_connect($host,$user,$pass,$db);
        mysqli_set_charset($connection, "utf8");  
    }
?>