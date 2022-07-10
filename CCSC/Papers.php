<?php
  include_once 'includes/dbh-inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      Paper
    </title>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/papers.css">
  </head>

  <body>
    <?php
      $sql = "SELECT * FROM paper;";
      $result = mysqli_query($conn, $sql);

      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['id'];
        }
      }
    ?>

    <div>
      <button>
        Download This Paper
      </button>

      <button>
        Open PDF in Browser
      </button>
    </div>

    <div>
      <div>

      </div>

      <div>

      </div>

      <div>
        
      </div>
    </div>
  </body>
</html>