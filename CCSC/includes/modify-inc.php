<?php
  include_once "dbh-inc.php";

  $id = $_POST['id'];
  $modifications = $_POST['modifications'];
  $modification = $_POST['modification'];

  $sql = "UPDATE paper
          SET $modifications = '$modification'
          WHERE id = '$id';";

  mysqli_query($conn, $sql);

  header("Location: ../Delete-Modify.php?modificationsuccess");