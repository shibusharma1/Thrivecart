<?php
session_start();
session_unset();
session_destroy();
echo "Log out successfully";
?>
<a href="login.php" style="
text-decoration:none;
color:black;
background-color:light-blue;
">Go to Login Page</a>