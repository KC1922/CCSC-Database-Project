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
      include("header.php");
    ?>

    <div class="create-signin-container">
      <div class="signin-container">
        <div class="signin-div">
          Sign in
        </div>

        <div class="email-address-div">
          <input class="email-address" type="text" name="email" placeholder="Email Address">
        </div>

        <div class="password-div">
          <input class="password" type="text" name="pwd" placeholder="Password">
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

        <div class="signin-div-button">
          <button class="signin-button">
            Sign in
          </button>
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
            <input class="email-address" type="text" name="lname" placeholder="Last Name">
            <input class="email-address" type="text" name="email" placeholder="Email Address">
            <input class="email-address" type="text" name="password" placeholder="Password">
            <button class="join-button" type="submit" name="submit">
              Join CCSC
            </button>
          </form>
        </div>
  
        <div class="join-div">
          
        </div>
  
        <div>
          <a class="privacy-policy" href="">Privacy Policy</a>
        </div>
      </div>
    </div>

    <?php
      include("footer.php");
    ?>
  </body>
</html>
