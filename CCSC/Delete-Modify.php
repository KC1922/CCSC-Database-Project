<!DOCTYPE html>
<html>
  <head>
    <title>
      Delete/Modify
    </title>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
  </head>

  <body>
    <?php
      include_once("header.php");
    ?>

    <form action="includes/delete-inc.php" method='POST'>
      <input type="text" name="filename" placeholder="Seperate each pdf name with a comma (,)" style="width: 300px;">
      <button type="submit" name="submit">
        Delete files/rows
      </button>
    </form>

    <form action="includes/modify-inc.php" method='POST'>
      <input type="text" name="id" placeholder="Paper ID to be modified">
      <select name="modifications" id="modifications-id">
        <option value="title">Title</option>
        <option value="num_pages">Number of Pages</option>
        <option value="date_written">Date Written</option>
        <option value="abstract">Abstract</option>
        <option value="suggested_citation">Suggested Citation</option>
        <option value="series">Series</option>
      </select>
      <textarea class="textarea" name="modification" cols="30" rows="1" placeholder="[enter Modification]"></textarea>
      <button type="submit" name="submit">
        Modify
      </button>
    </form>

    <?php
      include_once("footer.php");
    ?>
  </body>
</html>