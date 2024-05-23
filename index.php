<?php
session_start();
if(!isset($_SESSION['uid'])){
    header("Location:login.php");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
        <h1>Welcome to Dashboard,
        <?php echo "User";
        ?>
    </h1>
</body>
</html>