<?php
  if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];

    require_once 'dbh-inc.php';
    require_once 'functions-inc.php';

    if (emptyInputLogin($email, $password)) {
      header("Location: ../Create-SignIn.php?error=emptyinput");
      exit();
    }

    loginUser($conn, $email, $password);
  }

  else {
    header("Location: ../Create-SignIn.php");
  }