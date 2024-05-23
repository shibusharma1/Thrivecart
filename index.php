
<?php
session_start();

if(!isset($_SESSION['uid'])){
    // header("Location:login.php");
    echo "User not login";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
         <?php
        echo $title;
        ?> | ThriveCart
    </title>
    <link rel="stylesheet" href="css/main.css">
</head>


<body class="ibody">
    <nav class="inav">
        <div class="ilogo">
            <img src="assets/logo.png" alt="ThriveCart Logo">
        </div>
        <div class="search-bar">
            <input type="text" placeholder="Search...">
            <button type="submit" class="isearchbutton">Search</button>
        </div>
        <div class="cart">
            <a href="#"><img src="assets/cart.png" alt="Cart"></a>
        </div>
      
    </nav>

        <div class="hero-content">
            <img src="assets/Herosection1.png" alt="WELCOME TO THRIVECART" class="icenter">
            <a href="login.php" class="btn">Shop Now</a>
        </div>
   
</body>
</html>
