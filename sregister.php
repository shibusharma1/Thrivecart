<?php
  $title = "Register";
  $active = "Register";
  include_once 'includes/header.php';
  ?>
<body class="sregister">
  <nav>
    <div class="">
      <a href="#" class="logo">Your Logo</a>
      <div class="auth">
        < id="login-form">
          <input type="text" placeholder="Username" required>
          <input type="password" placeholder="Password" required>
          <button type="submit">Login</button>
        </form>
        <span>or</span>
        <a href="#" class="register-link">Register</a>
      </div>
    </div>
  </nav>
  <div class="register-form-container">
    <div class="scontainer">
      <h2>Register here</h2>
      <form id="register-form">
        <input type="text" placeholder="Username" required>
        <input type="email" placeholder="Email" required>
        <input type="password" placeholder="Password" required>
        <button type="submit">Register</button>
      </form>
    </div>
  </div>
</body>
</html>
