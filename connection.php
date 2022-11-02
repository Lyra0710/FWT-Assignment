<?php
$host="localhost";
$dbUsername= "root";
$dbPassword="";
$dbname = "credentials";

    //create connection
    $conn= new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if(!$conn){
        die('Could not Connect My Sql:' .mysql_error());
    }
?>