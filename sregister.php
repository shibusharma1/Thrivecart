<?php
  $title = "Register";
  $active = "Register";
  include_once 'includes/header.php';
  ?>
<div class="sregister">
  <nav>
    <div class="">
      <!-- <a href="index.php" class="logo">Your Logo</a> -->
      <div class="auth" id="login-form">
        <br>
          <input type="text" placeholder="Username" required>
          <br>
          <input type="password" placeholder="Password" required>
          <br>
          <button type="submit">Login</button>
          <br>
        </form>
        <br>
        <span>or</span>
        <br>
        <a href="#" class="register-link">Register</a>
        <br>
      </div>
    </div>
  </nav>
  <div class="register-form-container">
    <div class="scontainer">
      <h2>Register here</h2>
      <br>
      <form id="register-form">
        <input type="text" placeholder="Username" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Register</button>
      </form>
    </div>
  </div>
  <?php
include_once "includes/sellfooter.php";
?>
