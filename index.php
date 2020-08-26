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
      <a href="#" id="active_home" class="active">Home</a>
    </button>
    <button class="tablink" onclick="openPage('The Quiz', this);">
      <a href="#" id="active_quiz" class="active">The Quiz</a>
    </button>
    <button class="tablink" onclick="openPage('About', this);">
      <a href="#" class="active">About</a>
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
        <p>If you look up English defintion of the word <a href="https://www.dictionary.com/browse/blooper"><span style="color:yellow">'blooper'</a></span> what you'll get is that it's an embarassing error you make publicly. Although we don't think the mistakes you'll find here are too bad, we do believe correcting them will be a small step forward in your language learning. Think of this quiz as a nice amo to your arsenal on your English learning journey. Don't forget to enjoy the process! </p>
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
    <!-- My Footer -->
    <div class="footer">
      <p> Author - Kamil Tkacz</p>
      <!-- Copyright -->
      <div class="copyright">
        <p> &copy; 2020 BrazilianBloopers.com </p>
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
    <!-- My Footer -->
    <div id="foot_about" class="footer">
      <p> Author - Kamil Tkacz</p>
      <!-- Copyright -->
      <div class="copyright">
        <p> &copy; 2020 BrazilianBloopers.com </p>
      </div>
    </div>

  </div>

  <div id="The Quiz" class="tabcontent">

    <div class="container" id="aboutqz">

      <fieldset id="field_about">
        <legend>About the quiz</legend>
        <h4>The quiz resulted from English teachers who noticed the various Brazilian mistakes that students make when speaking English. Among the bloopers you'll find false cognates, idiomatic expressions, incomplete phrases, etc. You'll be presented witha series of dialogues. You have to use your judgement when picking the only one correct answer.<br><br> We won't grade your performance on the quiz using a conventional point-score system. We think that's kind of boring. Instead we'll match your result with a Brazilian public persona and their English skills. These celebrieties' English chops vary somewhat drastically, so beware. Questions range in difficulty and get harder progressively. Some mistakes are more common and some less frequent but all of them share the peculiarity of the Portuguese language that sometimes does not translate well into common English. Even though many of the bloopers are intelligible to English speakers, you would be better off finding a more common alternative.<br><br> But don't be too hard on yourself - It's okay if you have a piece of Brazil that never leaves your brain, plus why not let the gringo do some thinking? <br><br> Ready? </h4>
      </fieldset>
    </div>

    <div class="container" id="steps">
      <fieldset id="field_steps">
        <legend id="leg_steps">Follow these 3 simple steps:</legend>

        <ol>
          <li id="survPar">
            <p>Fill out our spectacularly short<br>
              <button id="start_survey" class="hvr-grow" data-popup-open="popup-1" href="#">Survey</button>
              <br><br>and click submit. After you finish it a "Start" button will show.
            </p>
          </li>
          <li>
            <p>Click "Start" to begin the quiz.</p>
            <button id="start_quiz" class="hvr-grow" data-popup-open="popup-2">Start</button>
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
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
        <div id="please_fill">
          <h3>Please fill out these 7 questions</h3>
        </div>
        <form id="survey" method="post" action="actions.php">


          <div id="surv_div">
            <div id="question1" class="cont_surv">
              <p><label id="bor_gender">1) What gender are you?<span id="span_gender" style="color:#ff0000"></span></label></p>

              <input type="radio" id="male" class="radios" name="gender" value="male"><label for="male">Male</label><br>
              <input type="radio" id="female" class="radios" name="gender" value="female"><label for="female">Female</label><br>
              <input type="radio" id="other" class="radios" name="gender" value="other"><label for="other">Other</label><br>
            </div>

            <div id="question2" class="cont_surv">
              <p><label id="bor_age">2) How old are you?<span id="span_age" style="color:#ff0000"></span></label></p>
              <select id="age" name="ageselect">
                <option id="opt" value="0">Select your age</option>
              </select>
            </div>


            <div id="question3" class="cont_surv">
              <p><label id="bor_years">3) English student for<span id="span_years" style="color:#ff0000"></span></label></p>

              <input type="radio" id="y1" class="radios" name="years" value="0-2"><label for="y1">0-2years</label><br>
              <input type="radio" id="y2" class="radios" name="years" value="2-5"><label for="y2">2-5years</label><br>
              <input type="radio" id="y3" class="radios" name="years" value="5-10"><label for="y3">5-10years</label><br>
              <input type="radio" id="y4" class="radios" name="years" value="allmylife"><label for="y4">all my life</label><br>
              <input type="radio" id="y5" class="radios" name="years" value="never studied"><label for="y5">never studied</label>
            </div>

            <div id="question4" class="cont_surv">
              <p><label id="bor_abroad">4) Experience abroad<span id="span_abroad" style="color:#ff0000"></span></label></p>

              <input type="radio" id="abr1" class="radios" name="abroad" value="less than a year"><label for="abr1">less than a year</label><br>
              <input type="radio" id="abr2" class="radios" name="abroad" value="1-3 years"><label for="abr2">1-2 years</label><br>
              <input type="radio" id="abr3" class="radios" name="abroad" value="3-6 years"><label for="abr3">3-5 years</label><br>
              <input type="radio" id="abr4" class="radios" name="abroad" value="6-10 years"><label for="abr4">6-10 years</label><br>
              <input type="radio" id="abr5" class="radios" name="abroad" value="all my life"><label for="abr5">all my life</label><br>
              <input type="radio" id="abr6" class="radios" name="abroad" value="never lived abroad"><label for="abr6">never lived abroad</label>
            </div>

            <div id="question5" class="cont_surv">
              <p><label id="bor_way">5) How do you learn?<span id="span_way" style="color:#ff0000"><br></span></label></p>

              <input type="checkbox" id="way1" class="check" name="way[]" value="inperson"><label for="way1">in-person course</label><br>
              <input type="checkbox" id="way2" class="check" name="way[]" value="privateteacher"><label for="way2">private teacher</label><br>
              <input type="checkbox" id="way3" class="check" name="way[]" value="selftaught"><label for="way3">self-taught</label><br>
              <input type="checkbox" id="way4" class="check" name="way[]" value="onlinecourse"><label for="way4">on-line course</label><br>
              <input type="checkbox" id="way5" class="check" name="way[]" value="onlineteacher"><label for="way5">on-line teacher</label><br>
              <input type="checkbox" id="way6" class="check" name="way[]" value="videogames"><label for="way6">video games</label><br>
              <input type="checkbox" id="way7" class="check" name="way[]" value="other"><label for="way6">other</label>

            </div>

            <div id="question6" class="cont_surv">
              <p><label id="bor_others">6) Foreign languages<span id="span_others" style="color:#ff0000"></span></label></p>
              <input type="radio" id="oth1" class="radios" name="others" value="one"><label for="oth1">One</label><br>
              <input type="radio" id="oth2" class="radios" name="others" value="two"><label for="oth2">Two</label><br>
              <input type="radio" id="oth3" class="radios" name="others" value="polyglot"><label for="oth3">I'm a polyglot</label>

            </div>

            <div id="question7" class="cont_surv">
              <p><label id="bor_country">7) Where do you live?<span id="span_country" style="color:#ff0000"></span></label></p>

              <input type="radio" id="ctr1" class="radios" name="country" value="brazil"><label for="ctr1">Brazil</label><br>
              <input type="radio" id="ctr2" class="radios" name="country" value="abroad"><label for="ctr2">Abroad</label>

            </div>
            <div>
              <button id="submit_survey" class="hvr-grow" type="submit" name="submitsurvey">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
    <!-- My Footer -->
    <div class="footer">
      <p> Author - Kamil Tkacz</p>
      <!-- Copyright -->
      <div class="copyright">
        <p> &copy; 2020 BrazilianBloopers.com </p>
      </div>
    </div>
  </div>

  <!--QUIZ-->

  <div class="popup" data-popup="popup-2">
    <div class="popup-inner" id="inner_2">

      <form id="quiz_form" method="post" action="actions.php">
        <a class="popup-close" data-popup-close="popup-2" href="#">x</a>
        <!-- <h3 id="inst_h3">Read the dialogue and check the correct answer</h3> -->

        <div id="1" class="questions">
          <div class="cont_dial">
            <p class="situation">Situation 1 out of 30</p>
            <div class="dialos">
              <p>Milene: How is the weather today?</p>
              <p>Camile:<span class="error_style"><em>Is hot!</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="i1" class="rads" name="sub_it" value="err_ok"><label for="i1">This answer is correct!</label><br>
              <input type="radio" id="i2" class="rads" name="sub_it" value="corr"><label for="i2">It is hot!</label><br>
              <input type="radio" id="i3" class="rads" name="sub_it" value="err_is"><label for="i3">Is it hot!</label><br>
            </div>
          </div>
          <button id="next_1" class="next">Next</button>
        </div>


        <div id="2" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 2 out of 30</p>
            <div class="dialos">
              <p>Tiago: How was the party?</p>
              <p>Marta: Oh,<span class="error_style"><em>it was too good</em></span>.I danced all night.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="t1" class="rads" name="too" value="corr"><label for="t1">it was very good!</label><br>
              <input type="radio" id="t2" class="rads" name="too" value="err_ok"><label for="t2">This answer is correct</label><br>
              <input type="radio" id="t3" class="rads" name="too" value="err_two"><label for="t3">it was two good!</label>
            </div>
          </div>
          <button id="next_2" class="next">Next</button>
          <button id="back_2" class="back">Back</button>
        </div>

        <div id="3" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 3 out of 30</p>
            <div class="dialos">
              <p>John: Do you like your teacher?</p>
              <p>Pedro: Yes, I love her.<span class="error_style"><em>She has much patience</em></span> with me.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="m1" class="rads" name="much" value="err_much"><label for="m1"> She has a lot patience</label><br>
              <input type="radio" id="m2" class="rads" name="much" value="err_ok"><label for="m2"> This answer is correct</label><br>
              <input type="radio" id="m3" class="rads" name="much" value="corr"><label for="m3"> She has a lot of patience</label><br>
            </div>
          </div>
          <button id="next_3" class="next">next</button>
          <button id="back_3" class="back">back</button>
        </div>

        <div id="4" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 4 out of 30</p>
            <div class="dialos">
              <p>Livia: Do you want to see a movie?</p>
              <p>Alex: Sure,<span class="error_style"><em>have a good comedy on Netflix</em></span>&nbsp;called "David Brent"</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="ex1" class="rads" name="exist" value="err_ok"><label for="ex1">this answer is correct</label><br>
              <input type="radio" id="ex2" class="rads" name="exist" value="corr"><label for="ex2">there is</label><br>
              <input type="radio" id="ex3" class="rads" name="exist" value="err_plural"><label for="ex3">there are</label><br>
            </div>
          </div>
          <button id="next_4" class="next">next</button>
          <button id="back_4" class="back">back</button>
        </div>

        <div id="5" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 5 out of 30</p>
            <div class="dialos">
              <p>Sylvio: What's your mother's profession?</p>
              <p>Renata: My mother,<span class="error_style"><em>she is a dentist</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="tw1" class="rads" name="two_sub" value="err_noverb"><label for="tw1">my mother dentist</label><br>
              <input type="radio" id="tw2" class="rads" name="two_sub" value="corr"><label for="tw2">my mother is a dentist</label><br>
              <input type="radio" id="tw3" class="rads" name="two_sub" value="err_ok"><label for="tw3">This answer is correct</label><br>
            </div>
          </div>
          <button id="next_5" class="next">next</button>
          <button id="back_5" class="back">back</button>
        </div>

        <div id="6" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 6 out of 30</p>
            <div class="dialos">
              <p>Mauricio: Did you like the movie?</p>
              <p>Beata: Yes,<span class="error_style"><em>I liked.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="ob1" class="rads" name="no_obj" value="corr"><label for="ob1">i liked it</label><br>
              <input type="radio" id="ob2" class="rads" name="no_obj" value="err_ok"><label for="ob2">this answer is correct</label><br>
              <input type="radio" id="ob3" class="rads" name="no_obj" value="err_its"><label for="ob3">i liked its</label><br>
            </div>
          </div>
          <button id="next_6" class="next">next</button>
          <button id="back_6" class="back">back</button>
        </div>

        <div id="7" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 7 out of 30</p>
            <div class="dialos">
              <p>Claudia: Where were you?</p>
              <p>Nilton: I went to the store<span class="error_style"><em>&nbsp;for buy some milk </em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="for1" class="rads" name="for" value="err_ok"><label for="for1">this answer is correct</label><br>
              <input type="radio" id="for2" class="rads" name="for" value="corr"><label for="for2">to buy some milk</label><br>
              <input type="radio" id="for3" class="rads" name="for" value="err_its"><label for="for3">for to buy some milk</label><br>
            </div>
          </div>
          <button id="next_7" class="next">next</button>
          <button id="back_7" class="back">back</button>
        </div>

        <div id="8" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 8 out of 30</p>
            <div class="dialos">
              <p>Joe: How old are you?</p>
              <p>Elizeu:&nbsp;<span class="error_style"><em>I have 38 years.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="age1" class="rads" name="h_age" value="err_syn"><label for="age1">I have 38 years old</label><br>
              <input type="radio" id="age2" class="rads" name="h_age" value="corr"><label for="age2">I am 38 years old</label><br>
              <input type="radio" id="age3" class="rads" name="h_age" value="err_ok"><label for="age3">this answer is correct</label><br>
            </div>
          </div>
          <button id="next_8" class="next">next</button>
          <button id="back_8" class="back">back</button>
        </div>
        <div id="9" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 9 out of 30</p>
            <div class="dialos">
              <p>Marcel: <span class="error_style"><em>Hey Guy,</em></span> how are you?</p>
              <p>Steven: I'm okay,thanks</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="guy1" class="rads" name="guy" value="err_ok"><label for="guy1">this question is correct</label><br>
              <input type="radio" id="guy2" class="rads" name="guy" value="corr"><label for="guy2">hey man, how are you?</label><br>
              <input type="radio" id="guy3" class="rads" name="guy" value="err_male"><label for="guy3">hey male, how are you</label><br>
            </div>
          </div>
          <button id="next_9" class="next">next</button>
          <button id="back_9" class="back">back</button>
        </div>

        <div id="10" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 10 out of 30</p>
            <div class="dialos">
              <p>Marcia: Who is that? He's smiling at you. Do you know him?</p>
              <p>Livia: Yes, it's Paulo from my gym.<span class="error_style"><em><br>I knew him last week.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="met1" class="rads" name="know" value="err_ok"><label for="met1">this answer is correct</label><br>
              <input type="radio" id="met2" class="rads" name="know" value="corr"><label for="met2">I met him last week</label><br>
              <input type="radio" id="met3" class="rads" name="know" value="err_pres"><label for="met3">I meet him last week</label><br>
            </div>
          </div>
          <button id="next_10" class="next">next</button>
          <button id="back_10" class="back">back</button>
        </div>

        <div id="11" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 11 out of 30</p>
            <div class="dialos">
              <p>Alex: What time do I have to go to the airport?</p>
              <p>Claudio: It's 15.30.Hurry up or<span class="error_style"><em> you will lose your flight.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="los1" class="rads" name="lose" value="err_lost"><label for="los1">you will lost your flight</label><br>
              <input type="radio" id="los2" class="rads" name="lose" value="corr"><label for="los2">you will miss your flight</label><br>
              <input type="radio" id="los3" class="rads" name="lose" value="err_ok"><label for="los3">this answer is correct</label><br>
            </div>
          </div>
          <button id="next_11" class="next">next</button>
          <button id="back_11" class="back">back</button>
        </div>

        <div id="12" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 12 out of 30</p>
            <div class="dialos">
              <p>Sabrina: Why are you sad?</p>
              <p>Nando:<span class="error_style"><em>&nbsp;I discussed with Marta about politics.</em></span> we got very nervous.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="diss1" class="rads" name="diss" value="err_ok"><label for="diss1">this answer is correct</label><br>
              <input type="radio" id="diss2" class="rads" name="diss" value="err_ing"><label for="diss2">I was discussing with Marta</label><br>
              <input type="radio" id="diss3" class="rads" name="diss" value="corr"><label for="diss3">I argued with marta</label><br>
            </div>
          </div>
          <button id="next_12" class="next">next</button>
          <button id="back_12" class="back">back</button>
        </div>

        <div id="13" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 13 out of 30</p>
            <div class="dialos">
              <p>Student:<span class="error_style"><em>I have a doubt</em></span> about homework. Can you help me?</p>
              <p>Teacher: Sure.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="doub1" class="rads" name="doubt" value="err_get"><label for="doub1">I get a question</label><br>
              <input type="radio" id="doub2" class="rads" name="doubt" value="err_ok"><label for="doub2">this question is correct</label><br>
              <input type="radio" id="doub3" class="rads" name="doubt" value="corr"><label for="doub3">I have a question</label><br>
            </div>
          </div>
          <button id="next_13" class="next">next</button>
          <button id="back_13" class="back">back</button>
        </div>

        <div id="14" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 14 out of 30</p>
            <div class="dialos">
              <p>Mike: I don't follow the news in Mexico.</p>
              <p>Gabriel: Me neither. I don't know<span class="error_style"><em>&nbsp;the actual president's name.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="act1" class="rads" name="actual" value="err_ok"><label for="act1">this answer is correct</label><br>
              <input type="radio" id="act2" class="rads" name="actual" value="corr"><label for="act2"></label>the current president's name<br>
              <input type="radio" id="act3" class="rads" name="actual" value="err_ok"><label for="act3">the actually president's name</label><br>
            </div>
          </div>
          <button id="next_14" class="next">next</button>
          <button id="back_14" class="back">back</button>
        </div>

        <div id="15" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 15 out of 30</p>
            <div class="dialos">
              <p>Gui: Martin had an accident this morning.</p>
              <p>Vitor: Really?</p>
              <p>Gui: Yeah,<span class="error_style"><em>&nbsp;thanks god</em></span>&nbsp;nothing happened to him.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="god1" class="rads" name="god" value="corr"><label for="god1">thank god nothing happened</label><br>
              <input type="radio" id="god2" class="rads" name="god" value="err_nogod"><label for="god2">thanks, nothing happened</label><br>
              <input type="radio" id="god3" class="rads" name="god" value="err_ok"><label for="god3">this answer is correct</label><br>
            </div>
          </div>
          <button id="next_15" class="next">next</button>
          <button id="back_15" class="back">back</button>
        </div>

        <div id="16" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 16 out of 30</p>
            <div class="dialos">
              <p>Carla: Do you like pizza?</p>
              <p>Joana: Oh, Yeah!<span class="error_style"><em>&nbsp;it's my preferred food.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="pref1" class="rads" name="pref" value="err_verb"><label for="pref1">it's my prefer food</label><br>
              <input type="radio" id="pref2" class="rads" name="pref" value="err_ok"><label for="pref2">this answer is corect</label><br>
              <input type="radio" id="pref3" class="rads" name="pref" value="corr"><label for="pref3">it's my favorite food</label><br>
            </div>
          </div>
          <button id="next_16" class="next">next</button>
          <button id="back_16" class="back">back</button>
        </div>

        <div id="17" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 17 out of 30</p>
            <div class="dialos">
              <p>Ana: Did your friend like Rio?</p>
              <p>Miguel: She loved it but&nbsp;<span class="error_style"><em>she was impressed with </em></span>violence in favelas.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="imp1" class="rads" name="impress" value="err_noverb"><label for="imp1">she was impressing </label><br>
              <input type="radio" id="imp2" class="rads" name="impress" value="err_ok"><label for="imp2">this answer is correct</label><br>
              <input type="radio" id="imp3" class="rads" name="impress" value="corr"><label for="imp3">she was shocked</label><br>
            </div>
          </div>
          <button id="next_17" class="next">next</button>
          <button id="back_17" class="back">back</button>
        </div>

        <div id="18" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 18 out of 30</p>
            <div class="dialos">
              <p>Gustavo: I'd like to visit Italy.</p>
              <p>Erik: Me too,<span class="error_style"><em>&nbsp;I have a lot of parents there.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="par1" class="rads" name="parent" value="err_many"><label for="par1">I have many family there</label><br>
              <input type="radio" id="par2" class="rads" name="parent" value="err_ok"><label for="par2">this answer is correct</label><br>
              <input type="radio" id="par3" class="rads" name="parent" value="corr"><label for="par3">I have a lot of relatives there</label><br>
            </div>
          </div>
          <button id="next_18" class="next">next</button>
          <button id="back_18" class="back">back</button>
        </div>


        <div id="19" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 19 out of 30</p>
            <div class="dialos">
              <p>Dani: Are you free at 18?</p>
              <p>Carlos: No,&nbsp;<span class="error_style"><em>I go out from work</em></span> at 19.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="go1" class="rads" name="gout" value="corr"><label for="go1">I leave work </label><br>
              <input type="radio" id="go2" class="rads" name="gout" value="er_off"><label for="go2">I go off work</label><br>
              <input type="radio" id="go3" class="rads" name="gout" value="err_ok"><label for="go3">this answer is correct</label><br>
            </div>
          </div>
          <button id="next_19" class="next">next</button>
          <button id="back_19" class="back">back</button>
        </div>

        <div id="20" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 20 out of 30</p>
            <div class="dialos">
              <p>Alex: I really enjoy working from home.</p>
              <p>Magda: Why?
              <p>Alex:<span class="error_style"><em>&nbsp;I don't have to use a suit.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="use1" class="rads" name="use" value="corr"><label for="use1">I don't have to wear a suit</label><br>
              <input type="radio" id="use2" class="rads" name="use" value="err_ing"><label for="use2">I dont have to wearing a suit</label><br>
              <input type="radio" id="use3" class="rads" name="use" value="err_ok"><label for="use3">this answer is correct</label><br>
            </div>
          </div>
          <button id="next_20" class="next">next</button>
          <button id="back_20" class="back">back</button>
        </div>



        <div id="21" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 21 out of 30</p>
            <div class="dialos">
              <p>Suzy: Hi Mariana, how are you?</p>
              <p>Mariana: I'm tired,<span class="error_style"><em>I studied during 3 hours.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="stu1" class="rads" name="durat" value="err_ok"><label for="stu1">this answer is correct</label><br>
              <input type="radio" id="stu2" class="rads" name="durat" value="corr"><label for="stu2">i studied for 3 hours</label><br>
              <input type="radio" id="stu3" class="rads" name="durat" value="err_at"><label for="stu3">i studied at 3 hours</label><br>
            </div>
          </div>
          <button id="next_21" class="next">next</button>
          <button id="back_21" class="back">back</button>
        </div>

        <div id="22" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 22 out of 30</p>
            <div class="dialos">
              <p>Jackie: How was training today?</p>
              <p>Juliano: Good, but&nbsp;<span class="error_style"><em>I stayed tired</em></span>&nbsp;quickly.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="sta1" class="rads" name="stay" value="err_ok"><label for="sta1">this answer is correct</label><br>
              <input type="radio" id="sta2" class="rads" name="stay" value="err_voc"><label for="sta2">I became tired</label><br>
              <input type="radio" id="sta3" class="rads" name="stay" value="corr"><label for="sta3">I got tired</label><br>
            </div>
          </div>
          <button id="next_22" class="next">next</button>
          <button id="back_22" class="back">back</button>
        </div>

        <div id="23" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 23 out of 30</p>
            <div class="dialos">
              <p>Tony: How do you feel?</p>
              <p>Rafael: Not well.&nbsp;<span class="error_style"><em>I'm with a headache.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="wit1" class="rads" name="with" value="err_noverb"><label for="wit1">I'm a headache</label><br>
              <input type="radio" id="wit2" class="rads" name="with" value="err_ok"><label for="wit2">this answer is correct</label><br>
              <input type="radio" id="wit3" class="rads" name="with" value="corr"><label for="wit3">I have a headache</label><br>
            </div>
          </div>
          <button id="next_23" class="next">next</button>
          <button id="back_23" class="back">back</button>
        </div>

        <div id="24" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 24 out of 30</p>
            <div class="dialos">
              <p>Luciana: Have you finished "Friends"?</p>
              <p>Breno: Almost, I just watched &nbsp;<span class="error_style"><em>chapter 4 of the last season.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="cha1" class="rads" name="chap" value="err_voc"><label for="cha1">capital 4 of the last season</label><br>
              <input type="radio" id="cha2" class="rads" name="chap" value="corr"><label for="cha2">episode 4 of the last season</label><br>
              <input type="radio" id="cha3" class="rads" name="chap" value="err_ok"><label for="cha3">this answer is correct</label><br>
            </div>
          </div>
          <button id="next_24" class="next">next</button>
          <button id="back_24" class="back">back</button>
        </div>

        <div id="25" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 25 out of 30</p>
            <div class="dialos">
              <p>Susan: What's wrong?</p>
              <p>Saulo: I'm worried about my son. he's been getting<span class="error_style"><em> bad notes in school.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="not1" class="rads" name="notes" value="err_ok"><label for="not1">this answer is correct</label><br>
              <input type="radio" id="not2" class="rads" name="notes" value="corr"><label for="not2">bad grades in school.</label><br>
              <input type="radio" id="not3" class="rads" name="notes" value="err_voc"><label for="not3">bad points in school.</label><br>
            </div>
          </div>
          <button id="next_25" class="next">next</button>
          <button id="back_25" class="back">back</button>
        </div>

        <div id="26" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 26 out of 30</p>
            <div class="dialos">
              <p>Robyn: Who is your nr.1 singer?</p>
              <p>Julio: Rihanna,&nbsp;<span class="error_style"><em>I love all of her musics.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="mus1" class="rads" name="music" value="err_noverb"><label for="mus1">I love all of her sounds</label><br>
              <input type="radio" id="mus2" class="rads" name="music" value="err_ok"><label for="mus2">this answer is correct</label><br>
              <input type="radio" id="mus3" class="rads" name="music" value="corr"><label for="mus3">I love all of her songs</label><br>
            </div>
          </div>
          <button id="next_26" class="next">next</button>
          <button id="back_26" class="back">back</button>
        </div>

        <div id="27" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 27 out of 30</p>
            <div class="dialos">
              <p>Rudolfo: What time do you usually get up?</p>
              <p>Fernanda:I get up&nbsp;<span class="error_style"><em>at 6 all days.</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="ev1" class="rads" name="every" value="corr"><label for="ev1">every day</label><br>
              <input type="radio" id="ev2" class="rads" name="every" value="err_ok"><label for="ev2">this answer is correct</label><br>
              <input type="radio" id="ev3" class="rads" name="every" value="err_all"><label for="ev3">all day</label><br>
            </div>
          </div>
          <button id="next_27" class="next">next</button>
          <button id="back_27" class="back">back</button>
        </div>

        <div id="28" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 28 out of 30</p>
            <div class="dialos">
              <p>Sol: What do you think of your English teacher?</p>
              <p>Maria:I think&nbsp;<span class="error_style"><em>he is very symphatetic</em></span></p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="sym1" class="rads" name="sym" value="err_voc"><label for="sym1">he is very symphatic</label><br>
              <input type="radio" id="sym2" class="rads" name="sym" value="corr"><label for="sym2">he is very friendly</label><br>
              <input type="radio" id="sym3" class="rads" name="sym" value="err_ok"><label for="sym3">this answer is correct</label><br>
            </div>
          </div>
          <button id="next_28" class="next">next</button>
          <button id="back_28" class="back">back</button>
        </div>
        <div id="29" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 29 out of 30</p>
            <div class="dialos">
              <p>Ana: What makes you upset?</p>
              <p>Julia:I'm very organized so&nbsp;<span class="error_style"><em>I can't support </em></span>messy people.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="sup1" class="rads" name="support" value="corr"><label for="sup1">I can't stand</label><br>
              <input type="radio" id="sup2" class="rads" name="support" value="err_ok"><label for="sup2">this answer is correct</label><br>
              <input type="radio" id="sup3" class="rads" name="support" value="err_up"><label for="sup3">I can't stand up</label><br>
            </div>
          </div>
          <button id="next_29" class="next">next</button>
          <button id="back_29" class="back">back</button>
        </div>

        <div id="30" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">Situation 30 out of 30</p>
            <div class="dialos">
              <p>Carol: What is special about Brazil?</p>
              <p>Jaciara:<span class="error_style"><em>&nbsp;it's the unique country </em></span>in south america that speaks portuguese.</p>
            </div>
          </div>
          <div class="cont_answer">
            <p><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p>
            <div class="answers">
              <input type="radio" id="unq1" class="rads" name="uniq" value="corr"><label for="unq1">it's the only country</label><br>
              <input type="radio" id="unq2" class="rads" name="uniq" value="err_ok"><label for="unq2">this answer is correct</label><br>
              <input type="radio" id="unq3" class="rads" name="uniq" value="err_adverb"><label for="unq3">it's the uniquely country</label><br>
            </div>
          </div>
          <button id="next_30" class="next">next</button>
          <button id="back_30" class="back">back</button>
        </div>








        <div id="div_instr">
          <p id="instr" name="instructions">Instructions</p>
          <button id="sub_quiz" type="submit">Submit</button>
        </div>
      </form>
    </div>
    <!--popup-inner-->
  </div> <!-- popup2-->

  <!--mouseover instructions in CSS: Display None -->
  <div id="inst_hov">
    <ul>
      <li>Read the dialogues and check<br>the correct answer</li>
      <li>Only one answer is correct</li>
      <li>After you finish check your score and the explanations</li>
    </ul>
  </div>

  <!--CONTACT FORM-->
  <div id="Contact Us" class="tabcontent">
    <div class="container">
      <div style="text-align:center">
        <h2>Shoot us an e-mail directly at</h2>
        <h3><a href="mailto:hello@brazilianbloopers.com">hello@brazilianbloopers.com</a></h3>
        <h4>or</h4>
      </div>
      <div class="row">
        <div class="column">
          <form id="contact" method="post" action="actions.php">
            <label for="name" class="contact_lbl">Name*<span id="span_name"></span></label>
            <input type="text" id="bor_name" name="name" placeholder="Your name.." font-family="cursive">
            <label for="email" class="contact_lbl">E-mail*<span id="span_email"></span></label>
            <input type="text" id="bor_email" name="email" placeholder="Your e-mail..">
            <label for="subject" class="contact_lbl">Subject</label>
            <input type="text" id="bor_subject" name="subject" placeholder="e.g.,suggestion for a blooper, comment, etc...">
            <label for="message" class="contact_lbl">Message*<span id="span_message"></span></label>
            <textarea id="bor_message" name="message" placeholder="Write your message here!" style="height:170px"></textarea>
            <button id="submit_contact" class="hvr-grow" type="submit" name="submitcontact">Submit</button>
          </form>
        </div>
      </div>
    </div>
    <!-- My Footer -->
    <div class="footer">
      <p> Author - Kamil Tkacz</p>
      <!-- Copyright -->
      <div class="copyright">
        <p> &copy; 2020 BrazilianBloopers.com </p>
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