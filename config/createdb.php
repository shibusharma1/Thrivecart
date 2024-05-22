<?php
   echo "Welcome to the stage where we are ready to connect with database <br>";
   // connecting to database
    $servername = "localhost";
     $username = "root";
     $password = "";

    $conn = mysqli_connect($servername,$username,$password);


     #Create a database 
    $sql = "CREATE DATABASE thrivecart";
    $res = mysqli_query($conn , $sql);
    echo "<br>";
    //Check for the database creation success
    if($res){
        
        echo "DB created successfully!!!";
    }
    else{
        
        echo "DB not created successfully because of this error ---->".mysqli_error($conn);
    }  
//creating table for cregister
$sql="CREATE TABLE cregister(
     id INT PRIMARY KEY AUTO_INCREMENT,
     fname VARCHAR(30) NOT NULL,
     lname VARCHAR(30) NOT NULL,
     email VARCHAR(30) NOT NULL,
     COUNTRY VARCHAR(30) NOT NULL,
     phone BIGINT(10) NOT NULL
     )
    ";

?>
    

