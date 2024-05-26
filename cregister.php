<?php
require_once('config/connection.php');

$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $fname = trim($_POST['fname']);
    $lname = trim($_POST['lname']);
    $email = trim($_POST['email']);
    $country = $_POST['country'];
    $phone = trim($_POST['phone_number']);
    $password = trim($_POST['password']);
    $confirm_password = trim($_POST['confirmpassword']);

    // First Name Validation
    if (empty($fname)) {
        $errors['fname_error'] = "First name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $fname)) {
        $errors['fname_error'] = "First name can't contain digits and special characters.";
    }

    // Last Name Validation
    if (empty($lname)) {
        $errors['lname_error'] = "Last name is required.";
    } elseif (!preg_match("/^[a-zA-Z ]+$/", $lname)) {
        $errors['lname_error'] = "Last name can't contain digits and special characters.";
    }

    // Email Validation
    if (empty($email)) {
        $errors['email_error'] = "Email can't be blank.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email_error'] = "Email address is not valid.";
    }

    // Phone Validation
    if (empty($phone)) {
        $errors['phone_error'] = "Phone number is required.";
    } elseif (!preg_match("/^9[87][0-9]{8}$/", $phone)) {
        $errors['phone_error'] = "Phone number is not valid.";
    }

    // Country Validation
    if (empty($country)) {
        $errors['country_error'] = "Please select your country.";
    }

    // Password Validation
    if (empty($password)) {
        $errors['password_error'] = "Password is required.";
    } elseif (strlen($password) < 8) {
        $errors['password_error'] = "Password should be at least 8 characters.";
    } elseif (!preg_match("/^[a-zA-Z0-9@.#]+$/", $password)) {
        $errors['password_error'] = "Password is not valid.";
    }

    // Confirm Password Validation
    if (empty($confirm_password)) {
        $errors['confirm_password_error'] = "Confirm password is required.";
    } elseif ($confirm_password !== $password) {
        $errors['confirm_password_error'] = "Passwords do not match.";
    }

    // If no errors, insert into database
    if (empty($errors)) {
        $password = md5($password);
        $sql = "INSERT INTO cregister (fname, lname, email, password, country, phone) VALUES ('$fname', '$lname', '$email', '$password', '$country', '$phone')";

        if (mysqli_query($conn, $sql)) {
            header("Location: login.php");
            exit;
        } else {
            echo "Error adding the details: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

$title = "Register";
$active = "Register";
include_once 'includes/header.php';

$countries = array(
    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia",
    "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin",
    "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi",
    "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia",
    "Comoros", "Congo, Democratic Republic of the", "Congo, Republic of the", "Costa Rica", "Croatia", "Cuba", "Cyprus",
    "Czech Republic", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador",
    "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia",
    "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti",
    "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica",
    "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kosovo", "Kuwait", "Kyrgyzstan",
    "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar",
    "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico",
    "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru",
    "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan",
    "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar",
    "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent and the Grenadines", "Samoa",
    "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore",
    "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan", "Spain", "Sri Lanka", "Sudan",
    "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo",
    "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates",
    "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen",
    "Zambia", "Zimbabwe"
);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Register</h2>
    <form action="" method="post" class="sform">
        <label for="first_name">First Name:</label><br>
        <input type="text" id="first_name" name="fname" required><br>
        <?php if (isset($errors['fname_error'])): ?>
            <label style="color:red">** <?php echo $errors['fname_error']; ?></label>
        <?php endif; ?>
        <br>
        <label for="last_name">Last Name:</label><br>
        <input type="text" id="last_name" name="lname" required><br>
        <?php if (isset($errors['lname_error'])): ?>
            <label style="color:red">** <?php echo $errors['lname_error']; ?></label>
        <?php endif; ?>
        <br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br>
        <?php if (isset($errors['email_error'])): ?>
            <label style="color:red">** <?php echo $errors['email_error']; ?></label>
        <?php endif; ?>
        <br>
        <label for="country">Country:</label><br>
        <select id="country" name="country" required>
            <option value="Nepal" selected>Nepal</option>
            <?php foreach ($countries as $value): ?>
                <option value="<?php echo $value; ?>"><?php echo $value; ?></option>
            <?php endforeach; ?>
        </select><br>
        <?php if (isset($errors['country_error'])): ?>
            <label style="color:red">** <?php echo $errors['country_error']; ?></label>
        <?php endif; ?>
        <br>
        <label for="phone_number">Phone Number:</label><br>
        <input type="tel" id="phone" name="phone_number" required><br>
        <?php if (isset($errors['phone_error'])): ?>
            <label style="color:red">** <?php echo $errors['phone_error']; ?></label>
        <?php endif; ?>
        <br>
        <label for="password">Password:</label><br>
        <input type="password" id="cpassword" name="password" required><br>
        <?php if (isset($errors['password_error'])): ?>
            <label style="color:red">** <?php echo $errors['password_error']; ?></label>
        <?php endif; ?>
        <br>
        <label for="confirmpassword">Confirm Password:</label><br>
        <input type="password" id="ccpassword" name="confirmpassword" required><br>
        <?php if (isset($errors['confirm_password_error'])): ?>
            <label style="color:red">** <?php echo $errors['confirm_password_error']; ?></label>
        <?php endif; ?>
        <br>
        <input type="submit" name="register" value="Register">
    </form>
</body>
</html>
