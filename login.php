<?php
  //starting the session
  session_start();

  $title = "Log in";
  $active = "login";
  require_once('config/connection.php');

if($_SERVER['REQUEST_METHOD'] == 'POST'){
  
  #Prevent from mysqli injection
  
  $email = stripcslashes($_POST['email']);
  $password = $_POST['psw'];
  $email = mysqli_real_escape_string($conn,$email);

  $password = md5($password);
  $sql = "select * from cregister where email = '$email' and password = '$password'";
  
  $result = mysqli_query($conn,$sql);
  
  $count = mysqli_num_rows($result);
    echo $password;
    echo $email;

  if($count == 1){
      $row = mysqli_fetch_assoc($result);
      if($row['email'] == $email && $row['password'] == $password){
          $_SESSION['uid'] = $row['id'];
          header("Location: index.php");
      }else{
          echo "<h1>Login failed due to invalid username or password</h1>";
      }
      
  }
  else{
      echo "<h1>User Doesnot Exist </h1>";
  }

}

include_once 'includes/header.php';
?>
    <div class="split left">
        <img src="assets/logo.png" align="center" width="300px" alt="Thrievecart.. Loading" title="Thrievecart">
      
    </div>
    
    <div class="split right">
        <form name = "myForm" method="POST" style="border:1px solid #ccc" action="" onsubmit = "return validation()">
            <div class="container">
              <h1 class="tree">LogIn</h1>
              <p id="note">Please fill in this form to create an account.</p>
              <hr>
          
              <label for="email" class="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" >
          
              <label for="psw" class="time"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" >
         
           
        
              <p id="note">By creating an account you agree to our <a href="terms.php" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
              <div class="clearfix">
                <button type="button" class="cancelbtn">Cancel</button>
                <button type="submit" class="supbtn">Log In</button>
              </div>
              <p>Don't have account? <a href="cregister.php">Sign In</a></p> 
            </div>
          </form>
<script>
    function validation()
    {
      var un=document.myFrom.email.value;
      var ps=document.myFrom.psw.value;
      if(un.length=="" && ps.length==""){
        alert("User Name and Password fields are empty.");
        document.myForm.username.focus();
        return false;
      }
      else{
        if(un.lenght==""){
          alert("User Name is empty.");
          document.myForm.username.focus();
          return false;
        }
        if(ps.length==""){
          alert("Password field is empty.");
          document.myForm.psw.focus();
          return false;
          }
      }
      }
</script>
         
</body>
</html>