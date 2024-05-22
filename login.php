<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AuroraAdorn</title>
    <link rel="stylesheet" href="css/main.css">
</head>
<body>
    <div class="split left">
        <img src="logo.jpg" align="center" width="300px"alt="BRAND LOGO">
          <p> Elevate Your Wardrobe, Illuminate Your Style </p>
    </div>
    
    <div class="split right">
        <form name = "myForm" method="POST" style="border:1px solid #ccc" action="login-validate.php" onsubmit = "return validation()">
            <div class="container">
              <h1 class="tree">LogIn</h1>
              <p id="note">Please fill in this form to create an account.</p>
              <hr>
          
              <label for="email" class="email"><b>Email</b></label>
              <input type="text" placeholder="Enter Email" name="email" required>
          
              <label for="psw" class="time"><b>Password</b></label>
              <input type="password" placeholder="Enter Password" name="psw" required>
         
           
        
              <p id="note">By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
          
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