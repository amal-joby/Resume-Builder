<?php
$servername="localhost";
$username="root";
$password="";
$dbname="resumebuilder";
$conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
        die("failed conn".mysqli_connect_error());
    }
  
?>