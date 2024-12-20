<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $db = "chef_cuisine";

  $conn = mysqli_connect($servername ,$username ,$password ,$db);
  
  if(!$conn){
    die("connect failed: ". mysqli_connect_error());
  }
  echo "connect successfully";
?>