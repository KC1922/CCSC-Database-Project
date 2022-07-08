<!DOCTYPE html>
<html>
  <head>
    <title>
      Review
    </title>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/submission.css">
    <link rel="stylesheet" href="styles/review.css">
  </head>

  <body>
    <?php
      include("header.php");
    ?>

    <div class="submission-container">
      <div class="abstract-preview">

        <div class="references">
          <div>
            Ratings:
          </div>

          <div>
            Content:
          </div>

          <div>
            Appropriateness of Paper:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            Timeliness of Topic:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            Supportive Evidence:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            Technical Quality:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            Scope of Coverage:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            Citation of Previous Work:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            Originality:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            <label for="abstract-body">Comments: </label>
            <textarea class="textarea" name="abstract-body"cols="30" rows="1" placeholder="[enter Comments]"></textarea>
          </div>

          <div>
            Written Document:
          </div>

          <div>
            Organization of Paper:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            Clarity of Main Message:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            Mechanics (grammar, etc.):
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            <label for="abstract-body">Comments: </label>
            <textarea class="textarea" name="abstract-body"cols="30" rows="1" placeholder="[enter Comments]"></textarea>
          </div>

          <div>
            Potential for Oral Presentation:
          </div>

          <div>
            Suitability for Presentation:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            Potential Interest in Topic:
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Poor</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Fair</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Average</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Good</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Excellent</label>
            </form>
          </div>

          <div>
            <label for="abstract-body">Comments: </label>
            <textarea class="textarea" name="abstract-body"cols="30" rows="1" placeholder="[enter Comments]"></textarea>
          </div>

          <div>
            Overall Rating:
          </div>
  
          <div>
            <form>
              <input type="radio" id="poor-id" name="question">
              <label for="poor-id">Definitely Should Not Accept Paper</label>
              <input type="radio" id="fair-id" name="question">
              <label for="fair-id">Probably Should Not Accept Paper</label>
              <input type="radio" id="average-id" name="question">
              <label for="average-id">Uncertain About Acceptance of Paper</label>
              <input type="radio" id="good-id" name="question">
              <label for="good-id">Probably Should Accept Paper</label>
              <input type="radio" id="excellent-id" name="question">
              <label for="excellent-id">Definitely Should Accept Paper</label>
            </form>
          </div>
  
          <div>
            <label for="abstract-body">Comments: </label>
            <textarea class="textarea" name="abstract-body"cols="30" rows="1" placeholder="[enter Comments]"></textarea>
          </div>
        </div>

        <div class="submit-div">
          <button class="submit-button">
            Submit
          </button>
        </div>
      </div>
    </div>

    <?php
      include("footer.php");
    ?>
  </body>
</html>