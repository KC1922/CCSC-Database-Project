<!DOCTYPE html>
<html>
  <head>
    <title>
      Search
    </title>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/display-abstract-search.css">
  </head>

  <body>
    <?php
      include_once("header.php");
    ?>

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
                <form action="Papers.php">
                  <button class="search-button">
                    Search
                  </button>
                </form>
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
    
                <div class="all-ccsc-networks">
                  All CCSC Topics
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
          CCSC eLibrary Statistics:
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

    <?php
      include_once("footer.php");
    ?>
  </body>
</html>