<?php
    require_once('/config/connection.php');
    require_once('/config/retrieve.php');

    $errors = Array();

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $phone=$_POST['phone'];

    //First Name Validation 
    $fname = trim($fname);
    if(!strlen($fname) > 0){
        echo "<bR>";

        $errors['fname_error'] = "First name is required ";
        echo "<br>";

    }
    $pattern = "/^[a-zA-Z ]+$/";//it includes more than one alphabet with space
    if(!preg_match($pattern,$fname)){
        echo "<br>";
        echo "<br>";

        $errors['fname_error'] = "First name can't contain digits and special characters<br>";
        echo "<bR>";

    }


        //First Name Validation 
        $lname = trim($lname);
        if(!strlen($lname) > 0){
            echo "<br>";
    
            $errors['lname_error'] = "Last name is required ";
            echo "<br>";
    
        }
        $pattern = "/^[a-zA-Z ]+$/";//it includes more than one alphabet with space
        if(!preg_match($pattern,$lname)){
            echo "<br>";
            echo "<br>";
    
            $errors['lname_error'] = "Last name can't contain digits and special characters<br>";
            echo "<bR>";
    
        }


    //Email validation
    $email = trim($email);
    if(!strlen($email) > 0){
        $errors['email_error'] = "Email can't be blank<br>";

    }else{
        $pattern ="/^[a-z0-9\.-_]+@[a-z]+[\.][a-z]+([\.][a-z]{2})?$/";
        if(!preg_match($pattern,$email))
        {
            $errors['email_error'] = "Email address is not valid<br>";
        }
    }
    
    
    //Phone validation
    $phone = trim($phone);
    $phone_pattern = "/^9[87][0-9]{8}$/";
    if(!strlen($phone) > 0){
        $errors['phone_error'] = "Phone number is required.<br>";
        
    }else
    if(!preg_match($phone_pattern,$phone))   {
        $errors['phone_error'] = "Phone number is not valid.<br>";
    }
    
    
            // country validation 
            //Alternative method
            if(empty($country)){
                $errors['country_error']="Please select your country<br>";
                
            }
                
                //password validation
                $password = trim($password);
                if(!strlen($password) > 0){
                    $errors['password_error'] = "password is  required<br>";
            
                }else{
                if(strlen($password) >= 8){
                    $errors['password_error'] = "password should be greater than 8 digits<br>";
                    return false;
                   
                }else{
                    $pattern ="/^[a-zA-Z0-9@\.#]+$/";
                    if(!preg_match($pattern,$password))
                    {
                        $errors['password_error'] = "password is not valid<br>";
                    }
                }
            }

                //confirm password validation
                $confirm_password = trim($confirm_password);
                if(!strlen($confirm_password) > 0){
                    $errors['confirm_password_error'] = "Re enter your password is  required<br>";
            
                }else{
                    
                    if($confirm_password !== $password)
                    {
                        $errors['confirm_password_error'] = "confirm password and password should be same<br>";
                    }
                }           
                
                $password = md5($password);
                $sql = "Insert into user (fname,lname,email,password,country,phone) values ('$fname','$lname','$email','$password','$country','$phone')";
                
                if(mysqli_query($con,$sql)){
                    echo "<br>Successfully Inserted<br>";
                }
                else{
                    echo "<br>Error in Code<br>";
                }
}

     header("Location: /onlinestores/login.php");
       ?> 
  
            