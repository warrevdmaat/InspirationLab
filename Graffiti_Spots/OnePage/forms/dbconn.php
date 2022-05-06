<?php
  $name = $_POST['name'];
  $username = $_POST['username'];
  $email = $_POST['email'];
  $birthday = $_POST['birthday'];
  $password = $_POST['password'];
  $gender = $_POST['gender'];

//database connection
  $dbHost = 'ID329822_GS.db.webhosting.be';
  $dbUsername = 'ID329822_GS';
  $dbPassword = 'GrafittiMaps';
  $dbName = 'ID329822_GS';

  $conn = mysqli_connect($dbHost,$dbUsername,$dbPassword,$dbName);

  if ($conn == false){
    die("connection failed");
  }
  echo "connected";

?>