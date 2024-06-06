
<?php
session_start();
//$_SESSION['uid'] = 1;

if(isset($_SESSION['uid'])){
    // header("Location:login.php");
    echo "User login";
    echo "<a href='logout.php'>Logout</a>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
         Dashboard | ThriveCart
    </title>
    <link rel="stylesheet" href="css/main.css">
    <style>
        img{
            width:"375px";
            height:"500p0x";
        }

    </style>
</head>


<body class="ibody">
<inav class="inavbar">
    <div class="logo">
        <img src="assets/logo.png" alt="Logo">
    </div>
    <div class="search">
        <input type="text" placeholder="Search...">
        <button type="submit">Search</button>
    </div>
    <div class="cart">
        <a href="#"><img src="assets/cart.png" alt="Cart"></a>
    </div>
</inav>


        <div class="hero-content">
            <img src="assets/Herosection1.png" alt="WELCOME TO THRIVECART" class="icenter">
            <a href="login.php" class="btn">Shop Now</a>
        </div>
   <?php
   include_once 'config/select.php'
   ?>
     <div class="container">
        <div class="product">
            <img src="assets/product1.jpeg" alt="Product 1">
            <h2>Product 1</h2>
            <p>Rs 999</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="assets/product2.webp" alt="Product 2">
            <h2>Product 2</h2>
            <p>Rs 299</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="assets/product3.jpg" alt="Product 2">
            <h2>Product 3</h2>
            <p>Rs 1999</p>
            <button>Add to Cart</button>
        </div>
        <div class="product">
            <img src="assets/product4.jpeg" search-baralt="Product 3">
            <h2>Product 4</h2>
            <p>Rs 199</p>
            <button>Add to Cart</button>
        </div>
        
    </div>
<?php
include("includes/outfooter.php")
?>
