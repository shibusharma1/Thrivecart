<?php
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
    <form action="validation/cregister_validation.php" method="post" class="sform">
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
            <option value="" disabled selected>Select your country</option>
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
        
        <input type="submit" value="Register">
    </form>
</body>
</html>
