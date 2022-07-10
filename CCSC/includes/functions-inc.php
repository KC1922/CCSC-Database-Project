<?php
  function emptyInputSignup($fname, $email, $password, $lname) {
    $flag;

    if (empty($fname) || empty($email) || empty($password) || empty($lname)) {
      $flag = true;
    }

    else {
      $flag = false;
    }

    return $flag;
  }

  function invalidName($fname, $lname, $minitial) {
    $flag;

    if (!preg_match("/^[a-zA-Z]*$/", $fname) || !preg_match("/^[a-zA-Z]*$/", $lname) || !preg_match("/^[A-Z]*$/", $minitial)) {
      $flag = true;
    }

    else {
      $flag = false;
    }

    return $flag;
  }

  function invalidEmail($email) {
    $flag;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $flag = true;
    }

    else {
      $flag = false;
    }

    return $flag;
  }

  function pwdMatch($password, $passwordRepeat) {
    $flag;

    if ($password !== $passwordRepeat) {
      $flag = true;
    }

    else {
      $flag = false;
    }

    return $flag;
  }

  function uidExists($conn, $email) {
    $sql = "SELECT * FROM `user`
            WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../Create-SignIn.php?error=stmtfailed");
      exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
      return $row;
    }

    else {
      $flag = false;
      return $flag;
    }

    mysqli_stmt_close($stmt);
  }

  function createUser($conn, $fname, $email, $password, $phone, $website, $lname, $minitial) {
    $sql = "INSERT INTO `user` (fname, email, `password`, phone, website, lname, minitial)
            VALUES (?, ?, ?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);

    if (!mysqli_stmt_prepare($stmt, $sql)) {
      header("Location: ../Create-SignIn.php?error=stmtfailed");
      exit();
    }

    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sssssss", $fname, $email, $hashedPwd, $phone, $website, $lname, $minitial);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);

    header("Location: ../Create-SignIn.php?error=none");
  }

  function emptyInputLogin($email, $password) {
    $flag;

    if (empty($email) || empty($password)) {
      $flag = true;
    }

    else {
      $flag = false;
    }

    return $flag;
  }

  function loginUser($conn, $email, $password) {
    $uidExists = uidExists($conn, $email);

    if ($uidExists === false) {
      header("Location: ../Create-SignIn.php?error=wronglogin");
      exit();
    }

    $pwdHashed = $uidExists["password"];
    $checkPwd = password_verify($password, $pwdHashed);

    if ($checkPwd === false) {
      header("Location: ../Create-SignIn.php?error=wronglogin");
      exit();
    }

    else if ($checkPwd === true) {
      session_start();
      $_SESSION["id"] = $uidExists["id"];
      $_SESSION["email"] = $uidExists["email"];
      header("Location: ../Create-SignIn.php");
    }
  }

  function uploadFile($pdf_data) {
    // $fileName = $_FILES['pdf_data']['name'];
    $fileName = $pdf_data['name'];
    $fileTmpName = $pdf_data['tmp_name'];
    $fileSize = $pdf_data['size'];
    $fileError = $pdf_data['error'];
    $fileType = $pdf_data['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('pdf');

    if (in_array($fileActualExt, $allowed)) {
      if ($fileError === 0) {
        if ($fileSize < 10000000) {
          $fileNameNew = uniqid('', true).".".$fileActualExt;

          $fileDestination = '../uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName, $fileDestination);

          return $fileNameNew;
        }

        else {
          echo "File is too big.";
        }
      }

      else {
        echo "There was an error uploading you file.";
      }
    }

    else {
      echo "pdf's only.";
    }

    return "test";
  }