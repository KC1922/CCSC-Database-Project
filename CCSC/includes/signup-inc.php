<?php
  include_once 'dbh-inc.php';

  $email = $_POST['email'];

  $sql = "INSERT INTO `user` (email) VALUES ('$email');";
  mysqli_query($conn, $sql);

  header("Location: ../Create-SignIn.php?signup=success");