<?php

    require_once('config/connection.php');

    $errors = Array();

   if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $email=$_POST['email'];
    $country=$_POST['country'];
    $phone=$_POST['phone_number'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirmpassword'];

    //First Name Validation 
    $fname = trim($fname);
    if(!strlen($fname) > 0){
        echo "<br>";

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


        //Last Name Validation 
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

               // Inserting into database
                $sql="INSERT INTO cregister(fname,lname,email,password,country,phone) VALUES ('$fname','$lname','$email','$password','$country','$phone')";

                if(mysqli_query($conn,$sql)){
                    echo "Data Inserted Successfully";
                }else{
                    echo "Error adding the details: ".$sql."<br>".mysqli_error($conn);
                }
             //   header("Location: login.php");
            }
            print_r($errors);
             $title = "Register";
             $active = "Register";

             include_once 'includes/header.php';

           $countries = array(
               "Afghanistan",
               "Albania",
               "Algeria",
               "Andorra",
               "Angola",
               "Antigua and Barbuda",
               "Argentina",
               "Armenia",
               "Australia",
               "Austria",
               "Azerbaijan",
               "Bahamas",
               "Bahrain",
               "Bangladesh",
               "Barbados",
               "Belarus",
               "Belgium",
               "Belize",
               "Benin",
               "Bhutan",
               "Bolivia",
               "Bosnia and Herzegovina",
               "Botswana",
               "Brazil",
               "Brunei",
               "Bulgaria",
               "Burkina Faso",
               "Burundi",
               "Cabo Verde",
               "Cambodia",
               "Cameroon",
               "Canada",
               "Central African Republic",
               "Chad",
               "Chile",
               "China",
               "Colombia",
               "Comoros",
               "Congo, Democratic Republic of the",
               "Congo, Republic of the",
               "Costa Rica",
               "Croatia",
               "Cuba",
               "Cyprus",
               "Czech Republic",
               "Denmark",
               "Djibouti",
               "Dominica",
               "Dominican Republic",
               "Ecuador",
               "Egypt",
               "El Salvador",
               "Equatorial Guinea",
               "Eritrea",
               "Estonia",
               "Eswatini",
               "Ethiopia",
               "Fiji",
               "Finland",
               "France",
               "Gabon",
               "Gambia",
               "Georgia",
               "Germany",
               "Ghana",
               "Greece",
               "Grenada",
               "Guatemala",
               "Guinea",
               "Guinea-Bissau",
               "Guyana",
               "Haiti",
               "Honduras",
               "Hungary",
               "Iceland",
               "India",
               "Indonesia",
               "Iran",
               "Iraq",
               "Ireland",
               "Israel",
               "Italy",
               "Jamaica",
               "Japan",
               "Jordan",
               "Kazakhstan",
               "Kenya",
               "Kiribati",
               "Korea, North",
               "Korea, South",
               "Kosovo",
               "Kuwait",
               "Kyrgyzstan",
               "Laos",
               "Latvia",
               "Lebanon",
               "Lesotho",
               "Liberia",
               "Libya",
               "Liechtenstein",
               "Lithuania",
               "Luxembourg",
               "Madagascar",
               "Malawi",
               "Malaysia",
               "Maldives",
               "Mali",
               "Malta",
               "Marshall Islands",
               "Mauritania",
               "Mauritius",
               "Mexico",
               "Micronesia",
               "Moldova",
               "Monaco",
               "Mongolia",
               "Montenegro",
               "Morocco",
               "Mozambique",
               "Myanmar",
               "Namibia",
               "Nauru",
               "Nepal",
               "Netherlands",
               "New Zealand",
               "Nicaragua",
               "Niger",
               "Nigeria",
               "North Macedonia",
               "Norway",
               "Oman",
               "Pakistan",
               "Palau",
               "Palestine",
               "Panama",
               "Papua New Guinea",
               "Paraguay",
               "Peru",
               "Philippines",
               "Poland",
               "Portugal",
               "Qatar",
               "Romania",
               "Russia",
               "Rwanda",
               "Saint Kitts and Nevis",
               "Saint Lucia",
               "Saint Vincent and the Grenadines",
               "Samoa",
               "San Marino",
               "Sao Tome and Principe",
               "Saudi Arabia",
               "Senegal",
               "Serbia",
               "Seychelles",
               "Sierra Leone",
               "Singapore",
               "Slovakia",
               "Slovenia",
               "Solomon Islands",
               "Somalia",
               "South Africa",
               "South Sudan",
               "Spain",
               "Sri Lanka",
               "Sudan",
               "Suriname",
               "Sweden",
               "Switzerland",
               "Syria",
               "Taiwan",
               "Tajikistan",
               "Tanzania",
               "Thailand",
               "Timor-Leste",
               "Togo",
               "Tonga",
               "Trinidad and Tobago",
               "Tunisia",
               "Turkey",
               "Turkmenistan",
               "Tuvalu",
               "Uganda",
               "Ukraine",
               "United Arab Emirates",
               "United Kingdom",
               "United States",
               "Uruguay",
               "Uzbekistan",
               "Vanuatu",
               "Vatican City",
               "Venezuela",
               "Vietnam",
               "Yemen",
               "Zambia",
               "Zimbabwe"
           );
           

?>

<body>
</div>
    <h2>Register</h2>
    <form action="" method="post" class="sform">
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="fname" required><br>
        <?php
        if(isset($errors['fname_error'])){
            echo $errors['fname_error'];
        }
     ?>
     <br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="lname" required><br>
        <?php
        if(isset($errors['lname_error'])){
            echo $errors['lname_error'];
        }
     ?>
     <br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <?php
        if(isset($errors['email_error'])){
            echo $errors['email_error'];
        }
     ?>
     <br>
        <label for="country">Country:</label><br>
        <select id="country" name="country" required>
            <option value="Nepal" selected>Nepal</option>
        <?php 
        foreach($countries as $value)
        {
        echo "<option value='$value'>$value</option>";
}
        ?>

            <!-- Add more options as needed -->
        </select><br>
        <?php
        if(isset($errors['country_error'])){
            echo $errors['country_error'];
        }
     ?>
     <br>
        <label for="phone_number">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone_number"  required><br>
        <?php
        if(isset($errors['country_error'])){
            echo $errors['country_error'];
        }
     ?>
     <br>
        <label for="password">Password:</label><br>
        <input type="password" id="cpassword" name="password"  required><br>
        <?php
        if(isset($errors['password_error'])){
            echo $errors['password_error'];
        }
     ?>
     <br>
        <label for="confirmpassword">Confirm Password:</label><br>
        <input type="password" id="ccpassword" name="confirmpassword"  required><br>
        
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
