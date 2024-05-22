<?php
    require_once ('connection.php');
    require_once ('retrieve.php');
    #Prevent from mysqli injection
    
    $email = stripcslashes($email);
    $password = stripcslashes($password);
    $email = mysqli_real_escape_string($conn,$email);
    $password = mysqli_real_escape_string($conn,$password);

    $password = md5($password);
    $sql = "select * from cregister where email = '$email' and password = '$password'";
    
    $result = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);
    if($count == 1){
        header("location : index.php");
    }
    else{
        echo "<h1>Login failed due to invalid username or password</h1>";
    }

    

?>
