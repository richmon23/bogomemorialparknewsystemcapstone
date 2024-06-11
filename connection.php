<?php

$servername = "localhost";
$username="root";
$password="";
$database="bogomemorialpark_newdb";

 try{

    //connection of database 
    $conn = new PDO("mysql:host=$servername;dbname=$database",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    //echo "Connection Successfully";



 }
 catch(PDOException $e){
    echo "Connection Failed" .$e->getMessage();
 }

 


?>

<?php


