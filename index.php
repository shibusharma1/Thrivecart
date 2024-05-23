
<?php
session_start();

if(!isset($_SESSION['uid'])){
    // header("Location:login.php");
    echo "User not login";
}
?>

        <div class="hero-content">
            <img src="assets/Herosection1.png" alt="WELCOME TO THRIVECART" class="icenter">
            <a href="login.php" class="btn">Shop Now</a>
        </div>
   
</body>
</html>
