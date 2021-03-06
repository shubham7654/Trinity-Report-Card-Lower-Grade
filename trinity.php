<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Trinity Report Card</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="logo">
    <ul>
      <li><img src="images/BeyondSkool-Logo.svg"></li>
      <li><img src="images/Trinity.svg"></li>
    </ul>
  </div>
  <form action="report.php" method="GET">

    <section id="first">

      <div class="studentName">
        <label for="Student's Name">Student Name : </label>
        <input type="text" name="studentName" placeholder="Student's Name">
      </div>

      <div class="parentName">
        <label for="Parent's Name">Parent's Name : </label>
        <input type="text" name="ParentName" placeholder="Parent's Name">
      </div>

      <div class="teacherName">
        <label for="Teacher's Name">Teacher Name : </label>
        <input type="text" name="teacherName" placeholder="Teacher's Name">
      </div>

      <div class="name">
        <label for="Rank of the child according to the teacher ">Child's Rank : </label>
        <select name="ChildRank" id="childRank">
          <option value="10%">Top 10 percentile</option>
          <option value="20%">Top 20 percentile</option>
          <option value="30%">Top 30 percentile</option>
        </select>
      </div>

    </section>
    <section class="second">

      <div>
        <label for="articulation">Articulation : </label>
        <select name="articulation" id="articulation">
          <option value="Average">Good</option>
          <option value="Merit">Merit</option>
          <option value="Stellar">Stellar</option>
        </select>
      </div>

      <div>
        <label for="Confidence">Confidence : </label>
        <select name="Confidence" id="Confidence">
          <option value="Average">Good</option>
          <option value="Merit">Merit</option>
          <option value="Stellar">Stellar</option>
        </select>
      </div>

      <div>

        <label for="Extemporise">Extemporise : </label>

        <select name="Extemporise" id="Extemporise">

          <option value="Average">Good</option>
          <option value="Merit">Merit</option>
          <option value="Stellar">Stellar</option>

        </select>

      </div>

      <div>

        <label for="Influencing">Influencing : </label>

        <select name="Influencing" id="Influencing">

          <option value="Average">Good</option>
          <option value="Merit">Merit</option>
          <option value="Stellar">Stellar</option>

        </select>
      </div>

      <div>

        <label for="Structured thinking">Structured thinking : </label>

        <select name="StructuredThinking" id="StructuredThinking">

          <option value="Average">Good</option>
          <option value="Merit">Merit</option>
          <option value="Stellar">Stellar</option>

        </select>

      </div>

    </section>

    <!-- Student Strength and Development Section -->

    <section class="third">
      <div>
        <label for="Your childs Strength"><b> Your childs Strength </b></label>
      </div>

      <div class="one">
        <input type="checkbox" name="check_list[]" value="Able to ask questions to understand different perspectives." id="uncheckone" onchange="disablecheckone()">
        <label for="Able to ask questions to understand different perspectives.">Able to ask questions to understand different perspectives.</label>
      </div>

      <div class="two">
        <input type="checkbox" name="check_list[]" value="Able to give new ideas to solve the situation." id="unchecktwo" onchange="disablechecktwo()">
        <label for="Able to give new ideas to solve the situation.">Able to give new ideas to solve the situation.</label>
      </div>

      <div class="three">
        <input type="checkbox" name="check_list[]" value="Able to use correct grammar and appropriate vocabulary." id="uncheckthree" onchange="disablecheckthree()">
        <label for="Able to use correct grammar and appropriate vocabulary.">Able to use correct grammar and appropriate vocabulary.</label>
      </div>

      <div class="four">
        <input type="checkbox" name="check_list[]" value="Able to structure their thoughts with a well defined beginning and conclusion." id="uncheckfour" onchange="disablecheckfour()">
        <label for="Able to structure their thoughts with a well defined beginning and conclusion.">Able to structure their thoughts with a well defined beginning and conclusion.</label>
      </div>

      <div class="five">
        <input type="checkbox" name="check_list[]" value="Able to speak fluently with enthusiasm & confidence." id="uncheckfive" onchange="disablecheckfive()">
        <label for="Able to speak fluently with enthusiasm & confidence.">Able to speak fluently with enthusiasm & confidence.</label>
      </div>
    </section>

    <section class="four">
      <div>
        <label for="Your child's area of devlopment"><strong>Your child's area of devlopment</strong></label>
      </div>

      <div class="six">
        <input type="checkbox" name="check_list1[]" value="Your child should work on asking questions to understand different perspectives." checked id="checkone">
        <label for="Your child should work on asking questions to understand different perspectives.">Your child should work on asking questions to understand different perspectives.</label>
      </div>

      <div class="two">
        <input type="checkbox" name="check_list1[]" value="Your child should work on creating new ideas to solve a situation." checked id="checktwo">
        <label for="Your child should work on creating new ideas to solve a situation.">Your child should work on creating new ideas to solve a situation.</label>
      </div>

      <div class="three">
        <input type="checkbox" name="check_list1[]" value="Your child should work on using correct grammar and appropriate vocabulary." checked id="checkthree">
        <label for="Your child should work on using correct grammar and appropriate vocabulary.">Your child should work on using correct grammar and appropriate vocabulary.</label>
      </div>

      <div class="four">
        <input type="checkbox" name="check_list1[]" value="Your child should work on structuring their thoughts with a well defined beginning and conclusion." checked id="checkfour">
        <label for="Your child should work on structuring their thoughts with a well defined beginning and conclusion.">Your child should work on structuring their thoughts with a well defined beginning and conclusion.</label>
      </div>

      <div class="five">
        <input type="checkbox" name="check_list1[]" value="Your child should work on speaking fluently with enthusiasm & confidence." checked id="checkfive">
        <label for="Your child should work on speaking fluently with enthusiasm & confidence.">Your child should work on speaking fluently with enthusiasm & confidence. </label>
      </div>
    </section>


    <div class="programme">
      <label for="Programme Level Recommended:">Programme Level Recommended : </label>
      <select name="programme" id="programme">

        <option value="3">Level 3</option>
        <option value="4">Level 4</option>

      </select>
    </div>

    <button type="submit" name="submit" value="submit">Submit</button>

  </form>
  <script src="script.js"></script>
</body>

</html>