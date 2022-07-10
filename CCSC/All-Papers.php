<?php
  include_once 'includes/dbh-inc.php';
?>

<?php
  $sql = "SELECT * FROM paper;";
  $result = mysqli_query($conn, $sql);

  $resultCheck = mysqli_num_rows($result);

  echo  "id", "\t",
        "title", "\t",
        "pdf_data", "\t",
        "\n";

  if ($resultCheck > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
      echo  $row['id'], "\t",
            $row['title'], "\t",
            $row['pdf_data'], "\t",
            "\n";
    }
  }

  header('Content-Type: text/plain')
?>