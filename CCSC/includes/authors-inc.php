<?php
  include_once "dbh-inc.php";

  $author_id = $_SESSION["id"];
  $paper_id = $_POST[];

  $sql = "INSERT INTO author-writes-paper (author_id)
          VALUES ('$author_id');";

  mysqli_query($conn, $sql);

  header("Location: ../Submission.php");