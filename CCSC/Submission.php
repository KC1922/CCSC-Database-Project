<!DOCTYPE html>
<html>
  <head>
    <title>
      Submission
    </title>

    <link rel="stylesheet" href="styles/general.css">
    <link rel="stylesheet" href="styles/header.css">
    <link rel="stylesheet" href="styles/footer.css">
    <link rel="stylesheet" href="styles/submission.css">
  </head>

  <body>
    <?php
      include("header.php");
    ?>
    
    <div class="submission-container">
      <div class="abstract-preview">
        <div class="upload">
          <button class="upload-button">
            Upload your full text PDF document here
          </button>
        </div>
        
        <div class="title-div">
          <label for="title">Title: </label>
          <textarea class="textarea" name="title"cols="30" rows="1" placeholder="[enter Paper Title]"></textarea>
        </div>

        <div class="authors-container">
          <div class="authors">
            Authors:
          </div>

          <div class="selected-authors-container">
            <div class="selected-authors">
              Selected Authors:
            </div>

            <div>
              1. Jefferson Hovey
            </div>
          </div>

          <div class="coauthor-container">
            <div>
              Add a New Co-Author:
            </div>

            <div class="coauthor-div">
              <div>
                <label for="name-id">Name:</label>
                <input type="text" id="name-id">
              </div>
  
              <div>
                <label for="email-id">Email:</label>
                <input type="text" id="email-id">
              </div>
  
              <div>
                <button>
                  Add
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- <div class="affiliations">

        </div> -->

        <div class="date-written">
          <label for="date-id">Date paper was written:</label>
          <input type="date" id="date-id">
        </div>

        <div class="references">
          <div>
            References:
          </div>

          <div>
            Is this a working paper or an accepted paper?
            <form>
              <input type="radio" id="wps" name="temp" value="WPS">
              <label for="wps">WPS</label><br>
              <input type="radio" id="aps" name="temp" value="APS">
              <label for="aps">APS</label><br>
            </form>
          </div>

          <div>
            Has this paper appeared, or been selected to appear, in a Paper Series, Journal, or Book?
            <form>
              <input type="radio" id="yes" name="temp" value="yes">
              <label for="yes">Yes</label><br>
              <input type="radio" id="no" name="temp" value="No">
              <label for="no">No</label><br>
            </form>
          </div>

          <div>
            Is this paper a health science case report?
            <form>
              <input type="radio" id="yes" name="temp" value="yes">
              <label for="yes">Yes</label><br>
              <input type="radio" id="no" name="temp" value="No">
              <label for="no">No</label><br>
            </form>
          </div>
        </div>

        <div class="abstract">
          Abstract:
          <form class="form" action="">
            <label for="abstract-body">Abstract Body: </label>
            <textarea class="textarea" name="abstract-body"cols="30" rows="1" placeholder="[enter Abstract Body]"></textarea> <br>
            <label for="title">Keywords: </label>
            <input type="text" placeholder="[comma separated]"> <br>
            <label for="title">JEL Codes: </label>
            <input type="text" placeholder="[comma separated]"> <br>
            <label for="topic-id">Topic: </label>
            <input type="checkbox" id="analysis-of-algorithms-id">
            <label for="analysis-of-algorithms-id">Analysis of Algorithms</label>
            <input type="checkbox" id="applications-id">
            <label for="applications-id">Applications</label>
            <input type="checkbox" id="architecture-id">
            <label for="architecture-id">Architecture</label>
            <input type="checkbox" id="artificial-intelligence-id">
            <label for="artificial-intelligence-id">Artificial Intelligence</label>
            <input type="checkbox" id="computer-engineering-id">
            <label for="computer-engineering-id">Computer Engineering</label>
            <input type="checkbox" id="curriculum-id">
            <label for="curriculum-id">Curriculum</label>
            <input type="checkbox" id="data-structures-id">
            <label for="data-structures-id">Data Structures</label>
            <input type="checkbox" id="databases-id">
            <label for="databases-id">Databases</label>
            <input type="checkbox" id="distance-learning-id">
            <label for="distance-learning-id">Distance Learning</label>
            <input type="checkbox" id="distributed-systems-id">
            <label for="distributed-systems-id">Distributed Systems</label>
            <input type="checkbox" id="ethical-societal-issues-id">
            <label for="ethical-societal-issues-id">Ethical/Social Issues</label>
            <input type="checkbox" id="first-year-computing-id">
            <label for="first-year-computing-id">First Year Computing</label>
            <input type="checkbox" id="gender-issues-id">
            <label for="gender-issues-id">Gender Issues</label>
            <input type="checkbox" id="grant-writing-id">
            <label for="grant-writing-id">Grant Writing</label>
            <input type="checkbox" id="graphics-image-processing-id">
            <label for="graphics-image-processing-id">Graphics Image Processing</label>
            <input type="checkbox" id="human-computer-interaction-id">
            <label for="human-computer-interaction-id">Human Computer Interaction</label>
            <input type="checkbox" id="laboratory-environments-id">
            <label for="laboratory-environments-id">Laboratory Environment</label>
            <input type="checkbox" id="literacy-id">
            <label for="literacy-id">Literacy</label>
            <input type="checkbox" id="mathematics-in-computing-id">
            <label for="mathematics-in-computing-id">Mathematics in Computing</label>
            <input type="checkbox" id="multimedia-id">
            <label for="multimedia-id">Multimedia</label>
            <input type="checkbox" id="networking-data-communications-id">
            <label for="networking-data-communications-id">Networking/Data Communications</label>
            <input type="checkbox" id="non-major-courses-id">
            <label for="non-major-courses-id">Non-Major Courses</label>
            <input type="checkbox" id="object-oriented-issues-id">
            <label for="object-oriented-issues-id">Object Oriented Issues</label>
            <input type="checkbox" id="operating-systems-id">
            <label for="operating-systems-id">Operating Systems</label>
            <input type="checkbox" id="parallel-processing-id">
            <label for="parallel-processing-id">Parallel Processing</label>
            <input type="checkbox" id="pedageogy-id">
            <label for="pedageogy-id">Pedageogy</label>
            <input type="checkbox" id="programming-languages-id">
            <label for="programming-languages-id">Programming Languages</label>
            <input type="checkbox" id="research-id">
            <label for="research-id">Research</label>
            <input type="checkbox" id="security-id">
            <label for="security-id">Security</label>
            <input type="checkbox" id="software-engineering-id">
            <label for="software-engineering-id">Software Engineering</label>
            <input type="checkbox" id="systems-analysis-and-design-id">
            <label for="systems-analysis-and-design-id">Systems Analysis and Design</label>
            <input type="checkbox" id="using-technology-in-the-classroom-id">
            <label for="using-technology-in-the-classroom-id">Using Technology in the Classroom</label>
            <input type="checkbox" id="web-and-internet-programming-id">
            <label for="web-and-internet-programming-id">Web and Internet Programming</label>
            <input type="checkbox" id="other-id">
            <label for="other-id">Other (Desribe)</label>
          </form>
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