<?php
    session_start();
    require_once ('connection.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
    
    #Prevent from mysqli injection
    
    $email = stripcslashes($_POST['$email']);
    $password = stripcslashes($_POST['$password']);
    // $email = mysqli_real_escape_string($conn,$email);
    // $password = mysqli_real_escape_string($conn,$password);

    // $password = md5($password);
    $sql = "select * from cregister where email = '$email' and password = '$password'";
    
    $result = mysqli_query($conn,$sql);
    
    $count = mysqli_num_rows($result);
    if($count == 1){
        $row = mysqli_fetch_assoc($result);
        if($row['email'] == $email && $row['password'] == md5($password)){
            $_SESSION['uid'] =$row['id'];
            header("location : /thrivecart/index.php");
        }else{
            echo "<h1>Login failed due to invalid username or password</h1>";
        }
        
    }
    else{
        echo "<h1>Login failed due to invalid username or password</h1>";
    }

}

?>
