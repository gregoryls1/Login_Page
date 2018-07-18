<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    
    <title>Login</title>
    
    <link rel="stylesheet" href="css/style_login.css">

</head>

<body>
<?php
    if($_POST){
        include("funcoesPHP/validaLogin.php");
    }
?>

  <div class="loginBox">
      <img src="img/darth.png" class="user">
      <h2>Log In Here</h2>
      <form method="post">
          <p>User ou Email</p>
          <input type="text" name="userid" placeholder="Enter user or email">
          <p>Password</p>
          <input type="password" name="pswrd" placeholder="***">
          <input class="button" type="submit" value="Sign In">
          <a href="#">Forget Password</a>
      </form>
  </div>  
</body>

</html>