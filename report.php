<?php
if (isset($_GET['submit'])) {

  $studentName = $_GET['studentName'];
  $ParentName = $_GET['ParentName'];
  $teacherName = $_GET['teacherName'];
  $ChildRank = $_GET['ChildRank'];
  if ($ChildRank == '10%') {
    $ChildRank = 10;
  } else if ($ChildRank == '20%') {
    $ChildRank = 20;
  } else if ($ChildRank == '30%') {
    $ChildRank = 30;
  } else {
    return 0;
  }
  $articulation = $_GET['articulation'];
  $Confidence = $_GET['Confidence'];
  $Extemporise = $_GET['Extemporise'];
  $Influencing = $_GET['Influencing'];
  $StructuredThinking = $_GET['StructuredThinking'];
  $programme = $_GET['programme'];

}
?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1" viewportWidth="1440" pageSize=A4>
  <title>Trinity Report Card</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
         <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canva"></script> 
         <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.2/jspdf.min.js"></script> -->

  <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script> -->


  <style type="text/css">
    * {
      event-box-sizing: border-event-box;
    }

    html,
    body,
    div,
    span,
    p,
    a,
    font,
    img,
    center,
    ul,
    li,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td {
      margin: 0;
      padding: 0;
      border: 0;
      outline: 0;
      font-size: 100%;
      vertical-align: baseline;
      background: transparent;
    }

    body {
      width: 1000px;
      margin: 0 auto;
      font-family: "Poppins";
    }

    section {
      border: 10px solid #4f1a48;
      background: url(images/bg.png);
      background-repeat: no-repeat;
      background-size: cover;
      background-position: left;
      margin: 15px 0;

    }

    p {
      font-size: 22px;
      font-weight: 300;
    }

    #first {
      padding: 40px;
    }

    .logo {
      margin-bottom: 25px;
    }

    .logo img {
      height: 50px;
    }

    .logo ul {
      list-style: none;
      text-align: center;
    }

    .logo ul li {
      display: inline-block;
      padding: 0 20px;
    }

    .logo ul li:nth-child(1) {
      border-right: 4px solid #4f1a48;
    }

    .ribbon-both {
      color: #ffffff;
      background: #4f1a48;
      padding: 0px;
      font-size: 29.5px;
      width: max-content;
      position: relative;
      text-align: center;
      margin: 0 auto;
      font-weight: bold;
      padding: 5px 15px;
      line-height: 1.7;
    }

    .ribbon-both:before {
      content: "";
      position: absolute;
      display: block;
      bottom: 0;
      left: calc(-1.2 * 40px);
      border: 30px solid #4f1a48;
      border-left-color: transparent;
    }

    .ribbon-both:after {
      content: "";
      position: absolute;
      display: block;
      bottom: 0;
      right: calc(-1.2 * 40px);
      border: 30px solid #4f1a48;
      border-right-color: transparent;
    }

    .first-text {
      text-align: center;
      margin: 20px 0;
    }

    .report-entail {
      background: #4f1a48f0;
      margin-left: -40px;
      padding: 2px 40px;
      width: 60%;
      margin-bottom: 10px;
      margin-top: 10px;
      color: #ffffffff;
    }

    .report-entail h3 {
      font-size: 34px;
    }

    .report-entail ol {
      padding-left: 15px;
    }

    .report-entail ol li {
      font-size: 22px;
      font-weight: 300;
    }

    .report-entail h3 {
      font-size: 34px;
      border-bottom: 2px solid;
      padding-bottom: 12px;
      margin-bottom: 15px;
    }

    .first-text-column {
      display: table;
      width: 100%;
      margin-top: 40px;
    }

    .left-column {
      display: table-cell;
      vertical-align: top;
      width: 60%;
    }

    .left-column p:nth-child(1) {
      padding-bottom: 20px;
      border-bottom: 1px solid black;
    }

    .right-column {
      display: table-cell;
      vertical-align: top;
      width: 40%;
      padding-top: 40px;
    }

    /*---- Score section CSS ---*/
    /* #score h2 {
         position: relative;
         margin-left: 40px;
         } */
    #score {
      /* height: 1494.91px; */
    }

    #score img {
      width: 100%;
    }

    .border-right-thick {
      color: #4f1a48;
      border-left: 10px solid #4f1a48;
      padding-left: 8px;
      margin-top: 60px;
    }

    /* .border-right-thick:nth-child(1), .border-right-thick:nth-child(2) {
            margin-top: 0px;
         } */
    .global-score {
      display: table;
      padding: 40px;
    }

    .score-text {
      display: table-cell;
      width: 60%;
      vertical-align: middle;
      font-size: 22px;
    }

    .score-text h2 {}

    .score-img {
      display: table-cell;
      width: 40%;
      vertical-align: middle;
    }

    .score-ribbon {
      text-align: center;
      position: relative;
    }

    p.percentage {
      position: absolute;
      left: 0;
      top: 76px;
      text-align: center;
      color: #ffffff;
      right: 0;
      line-height: 47px;
      font-size: 30px;
      font-weight: 700;
    }

    span.percentile {
      font-size: 44px;
      font-weight: 700;
    }

    .score-ribbon img {
      width: 250px !important;
    }

    .sign-row {
      display: table;
      width: 100%;
      margin-top: 30px;
    }

    .sign {
      display: table-cell;
      vertical-align: middle;
      width: 60%;
    }

    .prg-level {
      display: table-cell;
      vertical-align: middle;
      width: 40%;
      background: #4f1a48;
      text-align: center;
      color: #fff;
      font-size: 32px;
    }

    .sign img {
      width: 150px;
    }

    .prg-level h3 {
      font-size: 30px;
    }

    /*---- Score section CSS END---*/
    .child-strengths,
    .child-development {
      padding: 0 40px;
    }

    #strengths h2 {
      font-size: 28px;
      font-weight: bold;
      position: relative;
    }

    .child-strengths ul li,
    .child-development ul li {
      margin: 15px 0 15px 45px;
    }

    #benefits h2 {
      position: relative;
    }

    #skills {}

    #skills h2 {
      position: relative;
      margin-bottom: 60px;
    }

    /* #strengths h2:before, #benefits h2:before, #score h2:before, #skills h2:before {
         content: "";
         position: absolute;
         width: 3px;
         height: 30px;
         background: #4f1a48;
         left: -19px;
         top: 6px;
         bottom: 0;
         } */
    #strengths ul li {
      font-size: 22px;
      font-weight: 300;
    }

    .recommended-sec {
      box-sizing: 0;
      background: #4f1a48;
      color: #ffffff;
      text-align: center;
      vertical-align: middle;
      padding: 20px 0;
      margin: 50px 0;
    }

    .recommended-sec h3 {
      font-size: 50px;
      font-weight: 700;
    }

    /*--- Benefits CSS--*/
    #benefits {
      padding: 0 40px;

    }

    .benefit-left ul,
    .benefit-right ul {
      list-style: none;
    }

    .benefit-left ul li,
    .benefit-right ul li {
      padding: 20px;
      background: #ffffff;
      border: 1px solid #dddddd;
      width: 263px;
      text-align: center;
      margin: 30px 0;
      border-radius: 20px;
      font-size: 20px;
      font-weight: 500;
      position: relative;
    }

    .benefit-left ul li:before,
    .benefit-right ul li:before {
      content: "";
      position: absolute;
      background: #ec572c;
      width: 180px;
      height: 5px;
      top: -5px;
      left: 64px;
      border-radius: 20px 20px 0 0;
    }

    .benefit-left ul li:after,
    .benefit-right ul li:after {
      content: "";
      position: absolute;
      background: #ec572c;
      width: 180px;
      height: 5px;
      bottom: -5px;
      left: 64px;
      border-radius: 0 0 20px 20px;
    }

    .benefit-right ul li {
      margin: 0 auto;
      margin-bottom: 60px;
    }

    .program-benefits {
      display: flex;
      flex-direction: column;
      width: 100%;
      /* justify-content: center; */
      align-items: center;
    }

    .benefit-left {
      display: inline-flex;
      vertical-align: top;
      justify-content: center;
      align-items: center;
    }

    .benefit-left ul {
      display: flex;
      flex-wrap: wrap;
      gap: 10px 120px;
      width: 81.14%;
    }

    .certificate {
      margin: 40px 0;
    }

    .certificate img {
      width: 500px;
    }

    #benefits {

      background: url(images/bg2.jpg);
      background-size: cover;
      background-repeat: no-repeat;
      background-position: left top;
    }

    /*----Skills--*/
    #skills {
      padding: 40px;
    }

    .skills-row {
      display: table;
      background: #ffffff;
      padding: 40px;
      border: 1px solid #ec572c;
      border-radius: 20px;
      position: relative;
      margin: 40px 0 40px 0;
      /* width: 80%; */
    }

    .skills-text {
      display: table-cell;
      width: 70%;
      vertical-align: middle;
      border-right: 2px solid #111111;
      padding-right: 15px;
    }

    .skills-star {
      display: table-cell;
      width: 30%;
      text-align: center;
      vertical-align: middle;
    }

    .skills-star img {
      width: 25px;
    }

    .skills-star ul {
      padding-left: 0;
      list-style: none;
    }

    .skills-star ul li {
      display: inline-block;
      text-align: center;
    }

    .skills-row h4 {
      background: #ec572c;
      width: fit-content;
      padding: 10px 30px;
      color: #ffffff;
      font-weight: 600;
      border-radius: 10px;
      position: absolute;
      top: -40px;
      left: -20px;
    }

    .skills-star h5 {
      font-size: 22px;
      margin: 0;
      padding-bottom: 13px;
    }
  </style>
</head>

<body>
  <div class="main" id="customers">
    <section id="first">
      <div class="logo">
        <ul>
          <li><img src="images/BeyondSkool-Logo.svg"></li>
          <li><img src="images/Trinity.svg"></li>
        </ul>
      </div>
      <div class="ribbon-both" contenteditable> Dear <?php echo $ParentName; ?> </div>
      <div class="first-text">
        <p>Thank you for joining us in the <span style="color:#ec572c; font-weight:700;">Speaking English and <br>Communication Honours Assessment</span> for <?php echo $studentName; ?>.</p>
        <br>
        <p> <span style="color:#ec572c; font-weight:700;">BeyondSkool and Trinity Assessment</span> session is to measure your child’s communication and vocabulary skills. Shows a percentile
          rank among all the students who have appeared for the assessment.</p>
        <br>
        <p> The assessment was given by our Trinity Trained Expert <span style="color:#ec572c; font-weight:700;"><?php echo $teacherName; ?> </span> who is known to instill communication skills in children.</p>
      </div>
      <div class="report-entail">
        <h3>What does the report card entail?</h3>
        <ol>
          <li>What is <?php echo $studentName; ?>'s overall score?</li>
          <li>How well did <?php echo $studentName; ?> perform in Spoken English and Communication skills?</li>
        </ol>
      </div>
      <div class="first-text-column">
        <div class="left-column">
          <p>We are delighted to share that your child is on a journey to transform into a stellar personality.</p>
          <br>
          <p>We’re sure we’ll see <span style="color:#ec572c; font-weight:700;"><?php echo $studentName; ?></span> make you proud and become a true leader!</p>
          <p style="margin-top: 30px;"> You can find the detailed report card curated by top educationists from NYU and Teach for India attached to this email.</p>
        </div>
        <div class="right-column">
          <div class="score-ribbon">
            <img src="images/ribbon.svg">
            <p class="percentage">Top <br><span class="percentile"><?php echo $ChildRank; ?>%</span></p>
          </div>
        </div>
      </div>
      <div class="sign-row">
        <div class="sign">
          <img src="images/sign.png">
          <p style="font-weight: 500;">Ms. Payal Gaba</p>
          <p>CEO, BeyondSkool</p>
        </div>
        <div class="prg-level">
          <h3>Programme Level <br>Recommended: <?php echo $programme; ?></h3>
        </div>
      </div>
    </section>
    <section id="score">
      <div class="global-score">
        <div class="score-text">
          <h2 class="border-right-thick" style="margin-top: 0;">Global Score</h2>
          <span style="color:#ec572c; font-weight:700;">Congratulations! </span><br> Your child has ranked in the top <?php echo $ChildRank; ?> percentile of the students who have appeared for this assessment. Students who are ready to ace Trinity College London exams rank in the Top 1 Percentile globally.
        </div>
        <div class="score-img">
          <div class="score-ribbon">
            <img src="images/ribbon.svg">
            <p class="percentage">Top <br><span class="percentile"><?php echo $ChildRank; ?>%</span></p>
          </div>
        </div>
      </div>
      <img src="images/IMG.png">
    </section>
    <section id="skills">
      <h2 class="border-right-thick" style="margin-top: 0;">Communication Skills Report</h2>
      <div class="skills-row">
        <div class="skills-text">
          <h4>Articulation</h4>
          <p>Ability to deliver with no grammatical errors and appropriate vocabulary. Able to enunciate and pronounce clearly. Able to truncate sentences without losing its meaning</p>
        </div>
        <div class="skills-star" id="articulation">
          <div id="ArticulationAverage" style="display:none">
            <h5>Average</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <!-- <li><img src="images/star.svg"></li> -->
            </ul>
          </div>
          <div id="ArticulationMerit" style="display:none">
            <h5>Merit</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
          <div id="ArticulationStellar" style="display:none">
            <h5>Stellar</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="skills-row">
        <div class="skills-text">
          <h4>Confidence</h4>
          <p>Ability to speak with assurance and
            enthusiasm. Ability to use appropriate
            gestures & maintain eye contact
          </p>
        </div>
        <div class="skills-star" id="Confidence">
          <div id="ConfidenceAverage" style="display:none">
            <h5>Average</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <!-- <li><img src="images/star.svg"></li> -->
            </ul>
          </div>
          <div id="ConfidenceMerit" style="display:none">
            <h5>Merit</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
          <div id="ConfidenceStellar" style="display:none">
            <h5>Stellar</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="skills-row">
        <div class="skills-text">
          <h4>Extemporise</h4>
          <p>Ability to present ideas on the spot.
            Ability to structure and communicate
            on the spot on unfamiliar topics.
          </p>
        </div>
        <div class="skills-star" id="Extemporise">
          <div id="ExtemporiseAverage" style="display:none">
            <h5>Average</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <!-- <li><img src="images/star.svg"></li> -->
            </ul>
          </div>
          <div id="ExtemporiseMerit" style="display:none">
            <h5>Merit</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
          <div id="ExtemporiseStellar" style="display:none">
            <h5>Stellar</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="skills-row">
        <div class="skills-text">
          <h4>Influencing</h4>
          <p>Ability to deliver a compelling message to an audience. Ability to persuade, present and influence.</p>
        </div>
        <div class="skills-star" id="Influencing">
          <div id="InfluencingAverage" style="display:none">
            <h5>Average</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <!-- <li><img src="images/star.svg"></li> -->
            </ul>
          </div>
          <div id="InfluencingMerit" style="display:none">
            <h5>Merit</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
          <div id="InfluencingStellar" style="display:none">
            <h5>Stellar</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="skills-row">
        <div class="skills-text">
          <h4>Structured Thinking</h4>
          <p>Ability to deliver a piece in a logical &
            sequential flow. Ability to use
            imagination and creativity skills
          </p>
        </div>
        <div class="skills-star" id="StructuredThinking">
          <div id="StructuredThinkingAverage" style="display:none">
            <h5>Average</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <!-- <li><img src="images/star.svg"></li> -->
            </ul>
          </div>
          <div id="StructuredThinkingMerit" style="display:none">
            <h5>Merit</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
          <div id="StructuredThinkingStellar" style="display:none">
            <h5>Stellar</h5>
            <ul>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
              <li><img src="images/star.svg"></li>
            </ul>
          </div>
        </div>
      </div>
  </div>
  </section>
  <section id="strengths">
    <div class="child-strengths">
      <h2 class="border-right-thick">Your child’s strengths</h2>
      <ul>
        <?php
        if (!empty($_GET['check_list'])) {
          foreach ($_GET['check_list'] as $check) {
            echo "<li>";
            echo $check . "<br />";
            echo "</li>";
          }
        }
        ?>

      </ul>
    </div>
    <div class="child-development">
      <h2 class="border-right-thick">Your child’s area of development</h2>
      <ul>

        <?php
        if (!empty($_GET['check_list1'])) {
          foreach ($_GET['check_list1'] as $check) {
            echo "<li>";
            echo $check . "<br />";
            echo "</li>";
          }
        }
        ?>

      </ul>
    </div>
    <div class="recommended-sec">
      <h3>Recommended <br> Programme Level: <?php echo $programme; ?></h3>
    </div>
  </section>
  <!-- Benefit Section Start -->
  <section id="benefits">
    <h2 class="border-right-thick">Programme Benefits</h2>
    <div class="program-benefits">
      <div class="benefit-left">
        <ul>
          <li>Improve School Participation</li>
          <li>Ace Trinity Exams and receive an International Certificate</li>
          <li>Increases vocabulary up to 5000 words across levels</li>
          <li>Improves Grammar & Fluency</li>
        </ul>
      </div>
      <div class="benefit-right">
        <div class="certificate">
          <img src="http://club-beyond.gobeyondskool.com/Trinity%20Report%20Card%20Lower%20Grade/images/certificate.png">
        </div>
      </div>
    </div>
  </section>
  </div>

  <!-- <button onclick="javascript:demoFromHTML();">PDF</button> -->
  <!-- <a id="saveAsPdfBtn" href="https://www.sejda.com/html-to-pdf"><b> Save as PDF </b></a> -->

  <div style="width: 100%; text-align: center; display: flex; justify-content: center;"><a id="saveAsPdfBtn" href="https://www.sejda.com/html-to-pdf" style="text-decoration: none; padding: 5px 10px; box-shadow: 0px 0px 2px #444; border-radius: 3px; z-index: 1; text-align: center; color: #666; "><b> Save as PDF </b></a>
  </div>
  <script>
    document.getElementById('saveAsPdfBtn').addEventListener('click', function(e) {
      var pageUrl = encodeURIComponent(window.location.href);
      var opts = ['save-link=' + pageUrl, 'pageOrientation=auto'];
      window.open('https://www.sejda.com/html-to-pdf?' + opts.join('&'));
      e.preventDefault();
    });
  </script>
  <script>
    var articulation = "<?php echo $articulation; ?>";
    console.log(articulation);
    if (articulation == "Average") {
      document.getElementById("ArticulationAverage").style.display = "block";
    }
    if (articulation == "Stellar") {
      document.getElementById("ArticulationStellar").style.display = "block";
    }
    if (articulation == "Merit") {
      document.getElementById("ArticulationMerit").style.display = "block";
    }


    var Confidence = "<?php echo $Confidence; ?>";
    console.log(Confidence);

    if (Confidence == "Average") {
      document.getElementById("ConfidenceAverage").style.display = "block";
    }
    if (Confidence == "Stellar") {
      document.getElementById("ConfidenceStellar").style.display = "block";
    }
    if (Confidence == "Merit") {
      document.getElementById("ConfidenceMerit").style.display = "block";
    }


    var Extemporise = "<?php echo $Extemporise; ?>";
    console.log(Extemporise);

    if (Extemporise == "Average") {
      document.getElementById("ExtemporiseAverage").style.display = "block";
    }
    if (Extemporise == "Stellar") {
      document.getElementById("ExtemporiseStellar").style.display = "block";
    }
    if (Extemporise == "Merit") {
      document.getElementById("ExtemporiseMerit").style.display = "block";
    }


    var Influencing = "<?php echo $Influencing; ?>";
    console.log(Influencing);

    if (Influencing == "Average") {
      document.getElementById("InfluencingAverage").style.display = "block";
    }
    if (Influencing == "Stellar") {
      document.getElementById("InfluencingStellar").style.display = "block";
    }
    if (Influencing == "Merit") {
      document.getElementById("InfluencingMerit").style.display = "block";
    }


    var StructuredThinking = "<?php echo $StructuredThinking; ?>";
    console.log(StructuredThinking);

    if (StructuredThinking == "Average") {
      document.getElementById("StructuredThinkingAverage").style.display = "block";
    }
    if (StructuredThinking == "Stellar") {
      document.getElementById("StructuredThinkingStellar").style.display = "block";
    }
    if (StructuredThinking == "Merit") {
      document.getElementById("StructuredThinkingMerit").style.display = "block";
    }
  </script>
</body>

</html>