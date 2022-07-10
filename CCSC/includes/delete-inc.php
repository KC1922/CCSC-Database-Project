<?php
  $fileNames = $_POST['filename'];
  $removeSpaces = str_replace(" ", "", $fileNames);
  $allFileNames = explode(",", $removeSpaces);
  $countAllNames = count($allFileNames);

  // for ($i = 0; $i < $countAllNames; $i++) {
  //   if (file_exists("../uploads/".$allFileNames[$i]) == false) {
  //     header("Location: Delete-Modify.php?deleteerror");
  //     exit();
  //   }
  // }

  include_once "dbh-inc.php";

  for ($i = 0; $i < $countAllNames; $i++) {
    $path = "../uploads/".$allFileNames[$i];

    if (!unlink($path)) {
      echo "Error deleting file.";
      exit();
    }

    $sql = "DELETE FROM paper
            WHERE pdf_data = '$allFileNames[$i]';";

    mysqli_query($conn, $sql);
  }

  header("Location: Delete-Modify.php?deletesuccess");