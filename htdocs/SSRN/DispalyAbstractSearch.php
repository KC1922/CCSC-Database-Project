<?php
  include_once 'includes/dbh-inc.php';
?>

<!DOCTYPE html>
<html>
  <head>
    <title>
      Search eLibrary :: SSRN
    </title>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/display-abstract-search.css">
  </head>

  <body>
    <?php
      $sql = "SELECT * FROM `user`;";
      $result = mysqli_query($conn, $sql);

      $resultCheck = mysqli_num_rows($result);

      if ($resultCheck > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
          echo $row['fname'];
        }
      }
    ?>

    <header class="header">
      <div class="left-container">
        <a href="">
          <img class="ssrn-logo" src="images/SSRNlogo.png">
        </a>
      </div>

      <div class="right-container">
        <div class="product-and-services">
          Product & Services
        </div>

        <div class="subscribe">
          <a href="">
            Subscribe
          </a>
        </div>

        <div class="submit-a-paper">
          <a href="">
            Submit a paper
          </a>
        </div>

        <div class="browse">
          <a href="">
            Browse
          </a>
        </div>

        <div class="rankings">
          Rankings
        </div>

        <div class="contact">
          <a href="">
            Contact
          </a>
        </div>

        <div class="search-icon-div">
          <a href="">
            <img class="search-icon" src="icons/search.webp">
          </a>
        </div>

        <div class="shopping-cart-icon-div">
          <a href="">
            <img class="shopping-cart-icon" src="icons/shopping-cart.png">
          </a>
        </div>

        <div class="create-account-div">
          <a href="">
            <button class="create-account">
              Create account
            </button>
          </a>
        </div>

        <div class="sign-in-div">
          <a href="">
            <button class="sign-in">
              Sign in
            </button>
          </a>
        </div>
      </div>
    </header>

    <div class="abstract-search-container">
      <div class="advanced-search-container">
        <div class="advanced-browse-container">
          <div class="advanced-search-div">
            <div class="advanced-search">
              Advanced Search
            </div>

            <div class="author-title-by">
              Author, title, abstract, keywords
            </div>
          </div>

          <div class="browse-div">
            <div class="browse">
              Browse
            </div>

            <div class="author-title-by">
              by Network & Subject Area
            </div>
          </div>

          <div class="browse-div2">
            <div class="browse">
              Browse
            </div>

            <div class="author-title-by">
              by JEL code
            </div>
          </div>
        </div>

        <div class="advanced-search-inputs-container">  
          <div class="inputs-container">
            <div class="search-terms-input-div">
              <label class="das-labels" for="search-terms">Search Term(s):</label>
              <div class="search-terms-div">
                <input class="text-input" type="text" id="search-terms">

                <form class="abs-radio" action="">
                  <input type="radio" name="search-terms" id="title-only">
                  <label for="title-only">Title Only</label> <br>
                  <input type="radio" name="search-terms" id="title-abstract-keywords"> Title, Abstract & Keywords
                  <label for="title-abstract-keywords"></label> <br>
                  <input type="radio" name="search-terms" id="title-abstract-keywords-fulltext">
                  <label for="title-abstract-keywords-fulltext">Title, Abstract, Keywords & Full Text</label>
                </form>
              </div>
    
              <div>
                <button class="search-button">
                  Search
                </button>
              </div>
            </div>

            <div class="authors-input-div">
              <label class="das-labels" for="authors">Author(s):</label>
              <input class="text-input" type="text" id="authors">
            </div>
  
            <div class="date-input-div">
              <label class="das-labels" for="datesid">Dates:</label>
              <select class="date-input" name="dates" id="datesid">
                <option value="all-dates">All Dates</option>
                <option value="last-week">Last Week</option>
                <option value="last-month">Last Month</option>
                <option value="last-three-months">Last 3 Months</option>
                <option value="last-six-months">Last 6 Months</option>
                <option value="last-year">Last Year</option>
                <option value="last-two-years">Last 2 Years</option>
                <option value="last-three-years">Last 3 Years</option>
              </select>
            </div>

            <div id="test">
              <label class="das-labels" for="test">Networks:</label>
              <div class="current-selection-div" id="current-selection-id">
                <div>
                  Current Selection:
                </div>
    
                <div class="all-ssrn-networks">
                  All SSRN Networks
                </div>
    
                <div>
                  <a href="">Modify</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="elibrary-statistics-container">
        <div class="elibrary-statistics">
          SSRN eLibrary Statistics:
        </div>

        <div class="papers-and-authors-container">
          <div class="papers-and-authors">
            Papers &#38; Authors
          </div>

          <div>
            Abstracts:
          </div>

          <div>
            Full Text Papers:
          </div>

          <div>
            Authors:
          </div>

          <div>
            Paper's received:
          </div>

          <div>
            (last 12 months)
          </div>
        </div>

        <div class="paper-downloads-container">
          <div class="paper-downloads">
            Paper Downloads
          </div>

          <div>
            To date:
          </div>
          
          <div>
            Last 12 months:
          </div>

          <div>
            Last 30 days:
          </div>
        </div>

        <div class="referenecs-and-citations-container">
          <div class="references-and-citations">
            References and Citations
          </div>

          <div>
            Total References:
          </div>

          <div>
            Total Citations:
          </div>
        </div>
      </div>
    </div>

    <div class="footer">
      <div class="row1-1">
        <div class="column1-1">
          <div class="row2-1">
            <button class="submit-a-paper-button">
              Submit a Paper &#8250;
            </button>
          </div>
          
          <a href="">
            <div class="row2-2">
              Section 508 Text Only Pages
            </div>
          </a>
        </div>

        <div class="column1-2">
          <div class="ssrn-quick-links">
            SSRN Quick Links
          </div>

          <a href="">
            <div>
              SSRN Solutions
            </div>
          </a>

          <a href="">
            <div>
              Research Paper Series
            </div>
          </a>

          <a href="">
            <div>
              Conference Papers
            </div>
          </a>

          <a href="">
            <div>
              Partners in Publishing
            </div>
          </a>

          <a href="">
            <div>
              Jobs & Announcements
            </div>
          </a>

          <a href="">
            <div>
              Newsletter Sign Up
            </div>
          </a>
        </div>

        <div class="column1-3">
          <div class="ssrn-rankings">
            SSRN Rankings
          </div>

          <a href="">
            <div>
              Top Papers
            </div>
          </a>

          <a href="">
            <div>
              Top Authors
            </div>
          </a>

          <a href="">
            <div>
              Top Organizations
            </div>
          </a>
        </div>

        <div class="column1-4">
          <div class="about-ssrn">
            About SSRN
          </div>

          <a href="">
            <div>
              SSRN Objectives
            </div>
          </a>

          <a href="">
            <div>
              Network Directors
            </div>
          </a>

          <a href="">
            <div>
              Presidential Letter
            </div>
          </a>

          <a href="">
            <div>
              Announcements
            </div>
          </a>

          <a href="">
            <div>
              Contact us
            </div>
          </a>

          <a href="">
            <div>
              FAQs
            </div>
          </a>
        </div>
      </div>

      <div class="row1-2">
        <img src="images/facebook.png">
        <img src="images/linkedin.png">
        <img src="images/twitter.png">
      </div>

      <div class="row1-3">
        <div class="elsevier-div">
          <img class="elsevier" src="images/elsevier.png">
        </div>

        <div class="footer-copyright-column">
          <div class="footer-row2-1">
            <div>
              Copyright
            </div>

            <div>
              Terms and Conditions
            </div>

            <div class="privacy-policy-div">
              Privacy Policy
            </div>
          </div>

          <div class="we-use-cookies-div">
            We use cookies to help provide and enhance our service and tailor content.
          </div>

          <div class="to-learn-more-div">
            To learn more, visit <a class="cookie-settings" href="">Cookie Settings</a> <img class="lightning" src="images/lightning.jpg">
          </div>
        </div>

        <div class="relx-div">
          <img class="relx" src="images/relx.png">
        </div>
      </div>
    </div>
  </body>
</html>