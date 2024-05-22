<?php
// creating connection  with database
require_once('connection.php');

// retrieving the data submitted from the form 
require_once('retrieve.php');

// Inserting into database
$sql="INSERT INTO cregister(fname,lname,email,country,phone) VALUES ('$fname','$lname','$email','$country','$phone')";

if(mysqli_query($conn,$sql)){
    echo "Data Inserted Successfully";
}else{
    echo "Error adding the details: ".$sql."<br>".mysqli_error($conn);
}

?>
