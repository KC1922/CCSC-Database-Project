<?php
  include_once 'dbh-inc.php';

  $email = $_POST['email'];

  $sql = "INSERT INTO `user` (id, email) VALUES (5, '$email');";
  mysqli_query($conn, $sql);

  header("Location: ../Create-SignIn.php?signup=success");