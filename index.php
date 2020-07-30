<?php
require_once('./dbconn.php');
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>brazilianbloopers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


  <!-- JQuery -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js"></script>
  <!-- JQuery UI -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" integrity="sha256-KM512VNnjElC30ehFwehXjx1YCHPiQkOPmqnrWtpccM=" crossorigin="anonymous"></script>

  <!-- My CSS -->
  <link rel="stylesheet" href="styles.css">



  <!--Squada One Font-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Patua+One&display=swap" rel="stylesheet">
  <!--SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="sweetalert2/dist/sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill@8/dist/polyfill.js"></script>

  <!--Babel, Moment, Rome-->
  <script src="https://unpkg.com/babel-polyfill@6.2.0/dist/polyfill.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/3.0.2/rome.standalone.js"></script>
  <!--Popper-->
  <script src="https://unpkg.com/@popperjs/core@2"></script>

</head>

<body>
  <div class="tabs">
    <button id="defaultOpen" class="tablink" onclick="openPage('Home', this);">
      <a href="#" class="active">Home</a>
    </button>
    <button class="tablink" onclick="openPage('The Quiz', this);">
      <a href="#" class="active">The Quiz</a>
    </button>
    <button class="tablink" onclick="openPage('About', this);">
      <a href="#" class="active">About Us</a>
    </button>
    <button class="tablink" onclick="openPage('Contact Us', this);">
      <a href="#" class="active">Contact</a>
    </button>
  </div>


  <div id="Home" class="tabcontent">
    <header>
      <h3>Hello, Welcome to Brazilian Bloopers.<br>Here we tell you what gives you away as Brazilian!</h3>
    </header>

    <div class="grid-five">
      <div class="container">
        <p>If you look up English defintion of the word <a href="https://www.dictionary.com/browse/blooper"><span style="color:green">'blooper'</a></span> what you'll get is that it's an embarassing error you make publicly. Although we don't think the mistakes you'll find here are embarrasing, we do believe correcting them will be a small step forward in your language learning. Think of this quiz as a nice amo to your arsenal on your English learning journey. Don't forget to enjoy the process! </p>
      </div>
      <div class="container">
        <p>Let's face it. It's not an easy task to learn another language and communicate your ideas in it. English, however omnipresent in this world, is no exception. No worries, we're here to help a little with that.</p>
      </div>
      <div class="container">
        <Picture>
          <p> Dialog between an English teacher (A) and student (B). A) Did you like the movie?<br>B) Yes, I liked!<br> A) Hmmm...&#129300;</p>
        </Picture>
      </div>
      <div class="container">
        <header>Case Studies</header>
        </p>Case 1) The example of Michel Telo's hit</p>
        <p> In this case, a hugely popular Brazilian song has a bit of a rough reading in English. Among other smaller bloopers the title "If I catch you" gives it away as something clumsily translated from Portuguese. Even the mainstream showbusiness is not free from an occasional blunder</p>
        <div class="yt-resp">
          <iframe class="iframe-resp" src="https://www.youtube.com/embed/CwC5BFX7rqQ">
          </iframe>
        </div>
        <p> Below is a much better version where the American singer Pitbull gives the lyrics his own spin. "If I catch you" becomes "If I get you" and "this way you're gonna kill me" translates into "you're playing hard to get". Good job Pitbull!</p>
        <div class="yt-resp">
          <iframe class="iframe-resp" src="https://www.youtube.com/embed/bMMnn2kA_HY">
          </iframe>
        </div>


      </div>
      <div class="container">
        <header>Case Studies</header>
        <p> Case 2)Marilia Gabriela's interview with the one and only Madonna</p>
        <p> This interview is plainly awkward and actually some part of it is the inability of the Brazilian Journalist to get her English on the right track. Madonna certainly was not in the mood to help her.
          <div class="yt-resp">
            <iframe class="iframe-resp" src="https://www.youtube.com/embed/zHMhLd4MUC4">
            </iframe>
          </div>
      </div>
    </div>

  </div>


  <div id="About" class="tabcontent">
    <div class="grid-two">
      <div class="container">
        <p>We are a group of English teachers based in Brasilia, Brazil who are determined to sharpen your skills. We've compiled this quiz based on years of experience. One day, fascinated by various "Brazilianisms" that students kept throwing at our ears we decided that this phenomenon deserves its own website. Thus project Brazilian Bloopers came to life.</p>
      </div>

      <div class="container">
       <!-- <p>Here's what we look like</p>-->
        <label for="states">Who's the best wizard?</label>
        <input type="text" id="wizards" name="wizards" list="wizards-list">
        <datalist id="wizards-list">
          <option>Harry Potter</option>
          <option>Hermione</option>
          <option>Dumbledore</option>
          <option>Merlin</option>
          <option>Gandalf</option>
        </datalist>
        <button id="fakeSub" type="button" onclick="fakeFunction()">Vote</button>
      </div>


    </div>
  </div>

  <div id="The Quiz" class="tabcontent">

    <div class="container" id="aboutqz">

      <fieldset id="field_about">
        <legend>About the quiz</legend>
        <h4>The quiz is the fruit of labor of a group of English teachers who noticed the various Brazilian mistakes that students make when speaking English. Among the bloopers you'll find false cognates, idiomatic expressions, incomplete phrases, etc. You'll be presented witha series of dialogues. You have to use your judgement when picking the only one correct answer.<br><br> We won't grade your performance on the quiz using a conventional point-score system. We think that's kind of boring. Instead we'll match your result with a Brazilian public persona and their English skills. These celebrieties' English chops vary somewhat drastically, so beware. Questions range in difficulty and get harder progressively. Some mistakes are more common and some less frequent but all of them share the peculiarity of the Portuguese language that sometimes does not translate well into common English. Even though many of the bloopers are intelligible to English speakers, you would be better off finding a more common alternative.<br><br> But don't be too hard on yourself - It's okay if you have a piece of Brazil that never leaves your brain, plus why not let the gringo do some thinking? <br><br> Ready? </h4>
      </fieldset>
    </div>

    <div class="container" id="steps">
      <fieldset id="field_steps">
        <legend id="leg_steps">Follow these 3 simple steps:</legend>

        <ol>
          <li id="survPar">
            <p>Fill out our spectacularly short&nbsp;<a class="btn" data-popup-open="popup-1" href="#">
              Survey</a><br><br>and click submit. After you do it a "Start" button will show.</p>
          </li>
          <li>
            <p>Click "Start" to begin the quiz.</p>


            <button id="a_quiz" type="button"><a class="btn" data-popup-open="popup-2" href="#">Start</a></button>

          </li>
          <li>
            <p>Have fun!</p>
          </li>
        </ol>
      </fieldset>
    </div>


<!--SURVEY-->
    <div class="popup" data-popup="popup-1">
      <div class="popup-inner">
        <form id="survey" method="post" action="actions.php">

          <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
          <div id="surv_div">
            <div id="question1">
              <p><label id="bor_gender">1) What gender are you?<span id="span_gender" style="color:#ff0000"></span></label></p>

              <input type="radio" id="male" class="radios" name="gender" value="male"><label for="male">Male</label><br>
              <input type="radio" id="female" class="radios" name="gender" value="female"><label for="female">Female</label><br>
              <input type="radio" id="other" class="radios" name="gender" value="other"><label for="other">Other</label><br>
            </div>

            <div id="question2">
              <p><label id="bor_age">2) How old are you?<span id="span_age" style="color:#ff0000"></span></label></p>
              <select id="age" name="ageselect">
                <option id="opt" value="0">Please select your age</option>
              </select>
            </div>


            <div id="question3">
              <p><label id="bor_years">3) English student for:<span id="span_years" style="color:#ff0000"></span></label></p>

              <input type="radio" id="y1" class="radios" name="years" value="0-2"><label for="y1">0-2years</label><br>
              <input type="radio" id="y2" class="radios" name="years" value="2-5"><label for="y2">2-5years</label><br>
              <input type="radio" id="y3" class="radios" name="years" value="5-10"><label for="y3">5-10years</label><br>
              <input type="radio" id="y4" class="radios" name="years" value="allmylife"><label for="y4">all my life</label><br>
              <input type="radio" id="y5" class="radios" name="years" value="never studied"><label for="y5">never studied</label>
            </div>

            <div id="question4">
              <p><label id="bor_abroad">4) Experience with English abroad<span id="span_abroad" style="color:#ff0000"></span></label></p>

              <input type="radio" id="abr1" class="radios" name="abroad" value="less than a year"><label for="abr1">less than a year</label><br>
              <input type="radio" id="abr2" class="radios" name="abroad" value="1-3 years"><label for="abr2">1-2 years</label><br>
              <input type="radio" id="abr3" class="radios" name="abroad" value="3-6 years"><label for="abr3">3-5 years</label><br>
              <input type="radio" id="abr4" class="radios" name="abroad" value="6-10 years"><label for="abr4">6-10 years</label><br>
              <input type="radio" id="abr5" class="radios" name="abroad" value="all my life"><label for="abr5">all my life</label><br>
              <input type="radio" id="abr6" class="radios" name="abroad" value="never lived abroad"><label for="abr6">never lived abroad</label>
            </div>

            <div id="question5">
              <p><label id="bor_way">5) How do you learn English?<i>Choose all that apply</i><span id="span_way" style="color:#ff0000"><br></span></label></p>

              <input type="checkbox" id="way1" class="check" name="way[]" value="inperson"><label for="way1">in-person course</label><br>
              <input type="checkbox" id="way2" class="check" name="way[]" value="privateteacher"><label for="way2">private teacher</label><br>
              <input type="checkbox" id="way3" class="check" name="way[]" value="selftaught"><label for="way3">self-taught</label><br>
              <input type="checkbox" id="way4" class="check" name="way[]" value="onlinecourse"><label for="way4">on-line course</label><br>
              <input type="checkbox" id="way5" class="check" name="way[]" value="onlineteacher"><label for="way5">on-line teacher</label><br>
              <input type="checkbox" id="way6" class="check" name="way[]" value="videogames"><label for="way6">video games</label><br>
              <input type="checkbox" id="way7" class="check" name="way[]" value="other"><label for="way6">other</label>

            </div>

            <div id="question6">
              <p><label id="bor_others">6) How many foreign languages do you speak?
              <span id="span_others" style="color:#ff0000"></span></label></p>

              <input type="radio" id="oth1" class="radios" name="others" value="one"><label for="oth1">One</label><br>
              <input type="radio" id="oth2" class="radios" name="others" value="two"><label for="oth2">Two</label><br>
              <input type="radio" id="oth3" class="radios" name="others" value="polyglot"><label for="oth3">I'm a polyglot</label>

            </div>

            <div id="question7">
              <p><label id="bor_country">7) Where do you live?<span id="span_country" style="color:#ff0000"></span></label></p>

              <input type="radio" id="ctr1" class="radios" name="country" value="brazil"><label for="ctr1">Brazil</label><br>
              <input type="radio" id="ctr2" class="radios" name="country" value="abroad"><label for="ctr2">Abroad</label>
            </div>



            <button id="submit_survey" type="submit" name="submitsurvey">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  <!--QUIZ-->

  <div class="popup" data-popup="popup-2">
    <div class="popup-inner">

      <form id="quiz_form" method="post" action="actions.php">
      <a class="popup-close" data-popup-close="popup-2" href="#">x</a>
        <h3 id="inst_h3"><u>Read the dialogues and choose the best option for the blank spaces</u></h3>

        <div id="1" class="questions">
          <div class="cont_dial">
          <h4><b>SITUATION 1</b></h4>

          <p>Liz: Do you watch the news everyday?</p>
          <p>Mike: Yeah, I think___is important to know what's going on.</p>
          <p>Liz: I agree but sometimes___is difficult. There is a lot of negativity in the news.</p>
          <p>Mike:__doesn't take much of my time.</p>
          </div>
          <div class="cont_answer">
          <p><label class="bor_news">1) What is missing?<span class="span_news" style="color:#ff0000"></span></label></p>

          <input type="radio" id="n1" class="rads" name="news" value="err_contrct"><label for="n1">a)Contraction - " 's "</label><br>
          <input type="radio" id="n2" class="rads" name="news" value="err_pizz"><label for="n2"> b) The word "pizza"</label><br>
          <input type="radio" id="n3" class="rads" name="news" value="err_noth"><label for="n3">c) Nothing is missing</label><br>
          <input type="radio" id="n4" class="rads" name="news" value="corr_it"><label for="n4">d) The neuter subject "It"</label>

          <p>1 out of 30</p>
          </div>
        </div>

        <div id="2" class="questions" style="display: none;">

        <h4><b>SITUATION 2</b></h4>


          <p>Cris: Look out the window! I can't believe it!___was sunny 5 minute ago, now___is raining!</p>
          <p>Natalie:___is like that here in January.
            <p>Cris: Wow, some weather! </p>


            <p><label class="bor_news">1) What is missing?<span class="span_news" style="color:#ff0000"></span></label></p>

            <input type="radio" class="rads" name="weather" value="err_he"> a) The masculine subject - "He"<br>
            <input type="radio" class="rads" name="weather" value="corr_it"> b) The neuter subject "It"<br>
            <input type="radio" class="rads" name="weather" value="err_noth"> c) Nothing is missing<br>
            <input type="radio" class="rads" name="weather" value="err_i"> d) The subject "I">
            <button id="next_2" class="next">next</button>
            <button id="back_2" class="back">back</button>
            <p>2 out of 30</p>
       </div>

          <div id="3" class="questions" style="display: none;">

          <h4>SITUATION 3</h4>

          <p>John: How far is___from Sao Paulo to Brasilia?</p>
          <p>Pedro: I don't know but___ must be a solid 10 hour drive.</p>
          <p>John: I didn't know___takes this long.</p>
          <p>Pedro: How long does___take to get from New York to Detroit.</p>
          <p>John:___is about the same.</p>
<!--
          <p><label class="bor_news">1) What is missing?<span class="span_news" style="color:#ff0000"></span></label></p> -->

          <input type="radio" class="rads" name="dist" value="corr_it"> a)The neuter subject "It"<br>
          <input type="radio" class="rads" name="dist" value="err_she"> b)The feminine subject - "She"<br>
          <input type="radio" class="rads" name="dist" value="err_car">c) The word "car"<br>
          <input type="radio" class="rads" name="dist" value="err_noth"> d)Nothing is missing <br>
          <button id="next_3" class="next">next</button>
          <button id="back_3" class="back">back</button>
          <p>3 out of 30</p>
        </div>
        <div id="allButtons">
          <p id="instr" name="instructions">Instructions</p>
          <div style="overflow:auto;">
            <div style="float:right;">
            </div>
          </div>

          <button id='backHome-1'><a href='https://www.brazilianbloopers.com' style='color: black'>Home</a></button>
          <button id="next_1" class="next">next</button>
        </div>
     </form>
    </div> <!--popup-inner-->
  </div> <!-- popup2-->


  <!--mouseover instructions in CSS: Display None -->

  <div id="inst_hov">
    <p id="gen_instr"><u>General Instructions</u></p>
    <ul>
      <li>Only one answer is correct</li>
      <li>The explanations pop up after each segment</li>
    </ul>
  </div>

  <!--CONTACT FORM-->
  <div id="Contact Us" class="tabcontent">
    <div class="container">
      <div style="text-align:center">
        <h2>Shoot us an e-mail directly at</h2>
        <h3><a href="mailto:hello@brazilianbloopers.com">hello@brazilianbloopers.com</a></h3>
        <h3>or</h3>
      </div>
      <div class="row">
        <div class="column">
          <form id="contact" method="post" action="actions.php">
            <label for="name">Name*<span id="span_name"></span></label>
            <input type="text" id="bor_name" name="name" placeholder="Your name.." font-family="cursive">
            <label for="email">E-mail*<span id="span_email"></span></label>
            <input type="text" id="bor_email" name="email" placeholder="Your e-mail..">
            <label for="subject">Subject</label>
            <input type="text" id="bor_subject" name="subject" placeholder="e.g.,suggestion for a blooper, comment, etc...">
            <label for="message">Message*<span id="span_message"></span></label>
            <textarea id="bor_message" name="message" placeholder="Write your message here!" style="height:170px"></textarea>
            <button id="submit_contact" type="submit" name="submitcontact">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <script>

    function openPage(pageName, elmnt, color) {
      var i, tabcontent, tablinks;

      tabcontent = document.getElementsByClassName("tabcontent");
      for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
      }
      tablinks = document.getElementsByClassName("tablink");
      for (i = 0; i < tablinks.length; i++) {
        tablinks[i].style.backgroundColor = "";
      }
      document.getElementById(pageName).style.display = "block";
      elmnt.style.backgroundColor = color;
    }
    // Get the element with id="defaultOpen" and click on it
    document.getElementById("defaultOpen").click();


    //MAIN POP UP
    $(function() {
      //----- OPEN
      $('[data-popup-open]').on('click', function(e) {
        var targeted_popup_class = $(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
        e.preventDefault();
      });
      //----- CLOSE
      $('[data-popup-close]').on('click', function(e) {
        var targeted_popup_class = $(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
        e.preventDefault();
      });
    });

   function fakeFunction() {
      alert('The voting is coming soon');
    }

  </script>

 <!-- JS Survey -->
  <script src="survey.js"></script>
 <!-- JS Quiz -->
   <script src="quiz.js"></script>
 <!--JS Contactform -->
   <script src="contact_form.js"></script>

 </body>
</html>