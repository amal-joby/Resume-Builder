<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>A+ Resumes | Log In</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="./css/login.css">

</head>
<body>
<!-- db connect -->
<?php
  require './partials/_dbconnect.php';
?>
<div class="login-form">
  <form action="partials/_loginHandler.php" method ="POST">
    <h1>Log In</h1>
    <div class="content">
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope" name="loginEmail">
      </div>
      <div class="input-field">
        <input type="password" placeholder="Password" autocomplete="new-password" name="loginPassword">
      </div>
      <a href="#" class="link">Forgot Your Password?</a>
    </div>
    <div class="action">
      <button>Register</button>
      <button>Sign in</button>
    </div>
  </form>
</div>
 <!-- js -->
  <script >
    let form = document.querySelecter('form');

      form.addEventListener('submit', (e) => {
        e.preventDefault();
        return false;
      }); 
  </script>

</body>
</html> 
