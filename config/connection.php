<?php
require_once('createdb.php');
//connecting to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "thrivecart";

//create a connection
$conn = mysqli_connect($servername,$username,$password,$dbname);


//Check Connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


//creating table for cregister
$sql="CREATE TABLE IF NOT EXISTS cregister(
    id INT PRIMARY KEY AUTO_INCREMENT,
    fname VARCHAR(30) NOT NULL,
    lname VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    country VARCHAR(30) NOT NULL,
    phone BIGINT(10) NOT NULL
    )";

    if(mysqli_query($conn,$sql)){
        echo "<br>";
        echo "Table Created Successfully.";
    }else{
        echo "<br>";
        echo "Error Creating table".mysqli_error($conn);
    }


?>
