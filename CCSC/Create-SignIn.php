<!DOCTYPE html>
<html>
  <head>
    <title>
      Sign in Join
    </title>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/create-signin.css">
  <body>
    <?php
      include_once("header.php");
    ?>

    <div class="create-signin-container">
      <div class="signin-container">
        <div class="signin-div">
          Sign in
        </div>

        <div class="email-address-div">
          <form action="includes/login-inc.php" method="POST">
            <input class="email-address" type="text" name="email" placeholder="Email Address">
            <input class="password" type="password" name="password" placeholder="Password">
            <button class="signin-button" type="submit" name="submit">Sign in</button>
          </form>
        </div>

        <div>
          <?php
            if (isset($_GET["error"])) {
              if ($_GET["error"] == "wronglogin") {
                echo "<p>Incorrect login information.</p>";
              }
            }

            if (isset($_SESSION["email"])) {
              echo "<p>Signed in as " . $_SESSION["email"] . "</p>";
            }
          ?>
        </div>

        <div class="remember-forgot-div">
          <div class="remember-div">
            <input type="checkbox">
            Remember me
          </div>

          <div class="forgot-password-div">
            <a class="forgot-password" href="">Forgot password?</a>
          </div>
        </div>
      </div>

      <div class="create-container">
        <div class="create-div">
          Create an Account
        </div>
  
        <div class="membership-div">
          CCSC Membership is always free.
        </div>
  
        <div class="share-and-revise-div">
          By creating an account, you can easily share and revise your research; view and download the latest research in your field; and interact with thousands of scholars worldwide.
        </div>
  
        <div class="email-address-div">
          <form action="includes/signup-inc.php" method="POST">
            <input class="email-address" type="text" name="fname" placeholder="First Name">
            <input class="email-address" type="text" name="minitial" placeholder="Middle Initial (Optional)">
            <input class="email-address" type="text" name="lname" placeholder="Last Name">
            <input class="email-address" type="text" name="email" placeholder="Email Address">
            <input class="email-address" type="password" name="password" placeholder="Password">
            <input class="email-address" type="password" name="password-repeat" placeholder="Password">
            <input class="email-address" type="text" name="phone" placeholder="Phone Number (Optional)">
            <input class="email-address" type="url" name="website" placeholder="Website (Optional)">
            <button class="join-button" type="submit" name="submit">
              Join CCSC
            </button>
          </form>
        </div>

        <div>
          <?php
            if (isset($_GET["error"])) {
              if ($_GET["error"] == "emptyinput") {
                echo "<p>Fill in all necessary fields.</p>";
              }

              else if ($_GET["error"] == "invalidname") {
                echo "<p>Name must be only letters and middle inital must be capital.</p>";
              }

              else if ($_GET["error"] == "invalidemail") {
                echo "<p>Invalid email.</p>";
              }

              else if ($_GET["error"] == "passwordsdontmatch") {
                echo "<p>Passwords must match.</p>";
              }

              else if ($_GET["error"] == "emailtaken") {
                echo "<p>That email is already in the database.</p>";
              }

              else if ($_GET["error"] == "stmtfailed") {
                echo "<p>Statement failed. You shouldn't see this.</p>";
              }

              else if ($_GET["error"] == "none") {
                echo "<p>You have signed up.</p>";
              }
            }
          ?>
        </div>
        
        <div>
          <a class="privacy-policy" href="">Privacy Policy</a>
        </div>
      </div>
    </div>

    <?php
      include_once("footer.php");
    ?>
  </body>
</html>