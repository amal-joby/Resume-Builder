<?php
$mess=0;
?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Rubik:400,700'>
  <link rel="stylesheet" href="./css/signUp.css">

</head>
<body>
  <!-- connection to database -->
  <?php
  require './partials/_dbconnect.php';
  ?>

<div class="login-form">
  <form action="partials/_signupHandler.php" method="POST">
    <h1>Sign Up</h1>
    <div class="content">
      <div class="input-field">
        <input type="text" placeholder="FIRST NAME" autocomplete="nope" name="name"required>
      </div>
      <div class="input-field">
        <input type="text" placeholder="SECOND NAME" autocomplete="nope" name="sname">
      </div>
      <div class="input-field">
        <input type="email" placeholder="Email" autocomplete="nope" name="email">
      </div>
      <div class="input-field">
        <input type="password" placeholder="PASSWORD" autocomplete="nope" name="pass">
      </div>
      <div class="input-field">
        <input type="password" placeholder="CONFIRM PASSWORD" autocomplete="new-password" name="cpass">
        <?php echo $mess ?>
</div>
     
    <div class="action">
      <button name="btn">Sign Up</button>
    </div>
  </form>
</div>

  <script>
    let form = document.querySelecter('form');

    let form = document.querySelecter('form');

    form.addEventListener('submit', (e) => {
      e.preventDefault();
      return false;
    });

  </script>

</body>
</html>