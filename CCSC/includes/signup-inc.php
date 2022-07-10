<?php
  if (isset($_POST["submit"])) {
    $fname = $_POST["fname"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $passwordRepeat = $_POST["password-repeat"];
    $phone = $_POST["phone"];
    $website = $_POST["website"];
    $lname = $_POST["lname"];
    $minitial = $_POST["minitial"];

    require_once "dbh-inc.php";
    require_once "functions-inc.php";

    if (emptyInputSignup($fname, $email, $password, $lname)) {
      header("Location: ../Create-SignIn.php?error=emptyinput");
      exit();
    }
  
    if (invalidName($fname, $lname, $minitial)) {
      header("Location: ../Create-SignIn.php?error=invalidname");
      exit();
    }
  
    if (invalidEmail($email)) {
      header("Location: ../Create-SignIn.php?error=invalidemail");
      exit();
    }
  
    if (pwdMatch($password, $passwordRepeat)) {
      header("Location: ../Create-SignIn.php?error=passwordsdontmatch");
      exit();
    }
  
    if (uidExists($conn, $email)) {
      header("Location: ../Create-SignIn.php?error=emailtaken");
      exit();
    }

    createUser($conn, $fname, $email, $password, $phone, $website, $lname, $minitial);
  }

  else {
    header("Location: ../Create-SignIn.php");
  }