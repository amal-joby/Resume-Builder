<?php
  $error = "";
  if($_SERVER['REQUEST_METHOD']=='POST'){
    require '_dbconnect.php';
    $f_name=$_POST['name'];
    $s_name=$_POST['sname'];
    $e_mail=$_POST['email'];
    $pass=$_POST['pass'];
    $c_pass=$_POST['cpass'];

    $sql = "SELECT * FROM `user` WHERE `email`='$e_mail';";
    $sqlResult = mysqli_query($conn,$sql);
    $numOfUsers = mysqli_num_rows($sqlResult);
    if($numOfUsers>0){
      $error = "User already exist";
    }else{
      if($pass == $c_pass){
        $sql = "INSERT INTO `user` (`firstname`,`secondname`,`email`,`password`,`tstamp`) VALUES ('$f_name','$s_name','$e_mail','$pass',current_timestamp());";
        $sqlResult = mysqli_query($conn,$sql);
        if($sqlResult){
          header('location: /login-dir/Resume-Builder-main/index.php?signUp=true');
          exit();
        }
      }else{
        $error = "Passwords do not match";
      }
      
    }
    header('location: /login-dir/Resume-Builder-main/index.php?signUp=false&error='.$error);
  }
?>