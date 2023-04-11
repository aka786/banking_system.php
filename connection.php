<?php
    $servername="localhost";
    $user="root";
    $passwoard="";
    $database="banking";
    $conn =  mysqli_connect ($servername,$user,$passwoard,$database);
    if(!$conn){
        die("your are not able to connect to a database ");
    }
    
?>