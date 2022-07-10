<?php
  include_once "dbh-inc.php";

  $title = $_POST["title"];
  $num_pages = $_POST["num_pages"];
  $date_written = $_POST["date_written"];
  $downloads = $_POST["downloads"];
  $abstract = $_POST["abstract"];
  $date_posted = $_POST["date_posted"];
  $date_last_revised = $_POST["date_last_revised"];
  $abstract_views = $_POST["abstract_views"];
  $suggested_citation = $_POST["suggested_citation"];
  $series = $_POST["series"];
  $path = $_POST["path"];

  $sql = "INSERT INTO paper (title, num_pages, date_written, downloads, abstract, date_posted, date_last_revised, abstract_views, suggested_citation, series, `path`)
          VALUES ('$title', '$num_pages', '$date_written', '$downloads', '$abstract', '$date_posted', '$date_last_revised', '$abstract_views', '$suggested_citation', '$series', '$path');";

  mysqli_query($conn, $sql);

  header("Location: ../Submission.php");