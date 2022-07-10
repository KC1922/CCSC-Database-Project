<?php
  session_start();
?>

<header class="header">
  <div class="left-container">
    <a href="Create-SignIn.php">
      <div class="ccsc-logo">
        CCSC
      </div>
    </a>
  </div>

  <div class="right-container">
    <div class="submit-a-paper">
      <a href="Submission.php">
        Submit a paper
      </a>
    </div>

    <div class="browse">
      <a href="DispalyAbstractSearch.php">
        Browse
      </a>
    </div>

    <?php
      if (isset($_SESSION["id"])) {
        echo '
          <div class="create-account-div">
            <a href="includes/logout-inc.php">
              <button class="create-account">
                Log Out
              </button>
            </a>
          </div>
        ';
      }

      else {
        echo '
          <div class="create-account-div">
            <a href="Create-SignIn.php">
              <button class="create-account">
                Create account
              </button>
            </a>
          </div>
        ';

        echo '
          <div class="sign-in-div">
            <a href="Create-SignIn.php">
              <button class="sign-in">
                Sign in
              </button>
            </a>
          </div>
        ';
      }
    ?>
  </div>
</header>