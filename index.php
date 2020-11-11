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
  <!--JQuery lang plugin-->
  <!-- <script src="src/languages/langs.min.js"></script>
  <script src="src/languages/jquery.multilang.min.js"></script> -->


  <!--BOOTSTRAP-->
   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  <!-- My CSS -->
  <link rel="stylesheet" href="styles.css">


  <!--Londrina Font-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Londrina+Solid:wght@300&display=swap" rel="stylesheet">
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
   <!-- FontAwesome-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  <!-- Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon"> www.flaticon.com</a> -->





</head>

<body onload="onloadHandler()">

  <div class="tabs">
   <button id="defaultOpen" class="tablink" onclick="openPage('Home', this);">
      <a href="#" id="active_home" class="active">Home</a>
    </button>
   <button class="tablink" onclick="openPage('About', this);">
      <a href="#" class="active">About</a>
    </button>
   <button class="tablink" onclick="openPage('TheQuiz', this);">
      <a href="#" id="active_quiz" class="active">The Quiz</a>
    </button>
   <button class="tablink" onclick="openPage('ContactUs', this);">
      <a href="#" class="active">Contact</a>
    </button>
   <img src="//bandidosnatv.com/plgns/gtranslate/flags/24/en-us.png" id="eng_btn"  height="24" width="24" alt="English">
  <img src="//bandidosnatv.com/plgns/gtranslate/flags/24/pt-br.png" id="port_btn" height="24" width="24" alt="Portuguese">


  </div>





  <div id="Home" class="tabcontent">
    <div class="container" id="home">
    <div class="logo_div">
  <img src="pics\logo.png" id="logo_main" class="logo" style="width:60px;height:60px;">
  </div>
    <header>
      <h3 style="margin-top: 15px;">Hello, Welcome to Brazilian Bloopers.<br><br>Here we tell you what gives you away as a Brazilian!</h3>
    </header>
    </div>
  </div>



  <div id="About" class="tabcontent">
    <div class="container" id="about_us">
    <fieldset class="field_about">
       <legend class="leg_highlight" id="leg_high_1">About Us</legend>
        <p class="al_left">We are a group of English teachers based in Brasilia, Brazil, who are determined to sharpen your skills. We've compiled this quiz based on years of experience.<br>One day, fascinated by various "Brazilianisms" students kept throwing at our ears, we decided this phenomenon deserves its own website. Thus, the project Brazilian Bloopers came to life.</p>
    </fieldset>
    </div>
      <div class="container">
      <fieldset class="field_about">
        <legend class="leg_highlight" id="leg_high_2">About the Bloopers</legend>
        <p class="al_left">Let's face it. Learning another language and communicating your ideas in it, is no easy feat. English, however omnipresent in this world, is no exception. We're here to help a little with that.<br>If you look up English defintion of the word <a href="https://www.dictionary.com/browse/blooper" style="background: radial-gradient(#2c00f7, #00000059); border-radius: 20px; padding: 5px" target="_blank"><span>'blooper'</span></a>&nbsp;you'll get "an embarassing error you make publicly". Although we don't think the mistakes you'll find here are that bad, we do believe correcting them is a great step forward in your language learning journey.<br><a href="#examples" id="a_examples">&nbsp;<span>Check out the examples below.</span></a></p>
      </fieldset>
      </div>

    <div class="container" id="about_qz">
    <fieldset class="field_about">
       <legend class="leg_highlight" id="leg_high_3">About the quiz</legend>
       <p class="al_left">The quiz consists of false cognates, idiomatic expressions, incomplete phrases, etc. You'll be presented with a series of dialogues. You have to use your judgement when picking the only one correct answer.<br><br>&nbsp;There are 30 questions which range in difficulty. Some mistakes are more common and some less frequent but all of them share the peculiarity of the Portuguese language that does not translate well into English. Even though many of the bloopers are intelligible to native English speakers, you would be better off finding a more common alternative.<br><br>&nbsp;But don't be too hard on yourself - It's okay if you have a piece of Brazil that never leaves your brain, plus why not let the gringo do some thinking?<br><br>Don't forget to enjoy the process! <br><br><a href="#" style="background: radial-gradient(#2c00f7, #00000059); border-radius: 20px; padding: 5px", onclick="openPage('TheQuiz', this);">Ready?</a></p>
     </fieldset>
     </div>
     <div class="container">
        <picture>
          <legend class="leg_highlight"><a id="examples" style="font-size: 25px;">Example of a Brazilian blooper in casual dialogue:</a></legend>
         <br><br><p>A) Did you like your trip?</p><br><p style="margin-top: -20px;">B)&nbsp;<span class="error_style"><em>More or less.</em></span></p><br><p style="margin-top: -20px;">A) Hmmm...&#129300;</p>
         <hr>
          <p class="al_left">&nbsp;<span class="span_exp">Explanation:</span>&nbsp;In English we generally say "More or Less" to use it as an approximation of numbers, quantities, a "plus-minus". Ex. "It will cost you 40 reais, more or less."<br><br>We don't answer with "more or less" only to express value or our impression of something. If you thought the above mentioned trip could have been better, you answer "Not much". If you thought it could have been worse, you answer "It was okay." You should remember that answers like this are hugely context dependent, meaning, you will have to develop what you mean in more detail.</p>
        </picture>
      </div>
      <div class="container">
        <legend class="leg_highlight">Example nr.1 of Bloopers in the mainstream.</legend><br>
        <p class="al_left">Michel Telo's hit, a hugely popular Brazilian song has a bit of a rough reading in English. Among other smaller bloopers the title "If I catch you" gives it away as something clumsily translated from Portuguese. Even the mainstream showbusiness is not free from an occasional blunder.</p>
        <div class="yt-resp">
          <iframe class="iframe-resp" src="https://www.youtube.com/embed/CwC5BFX7rqQ">
          </iframe>
        </div>
        <p class="al_left">Below is a much better version where the American singer Pitbull gives the lyrics his own spin. "If I catch you" becomes "If I get you" and "this way you're gonna kill me" translates into "you're playing hard to get". Good job Pitbull!</p>
        <div class="yt-resp">
          <iframe class="iframe-resp" src="https://www.youtube.com/embed/bMMnn2kA_HY">
          </iframe>
          </div>
      </div>
      <div class="container">
      <legend class="leg_highlight">Example nr.2 of Bloopers in the mainstream.</legend><br>
        <p class="al_left">Marilia Gabriela's interview with the one and only Madonna is plainly awkward partially due to the inability of the Brazilian Journalist to get her English on track. Madonna clearly was not charitable and in the mood to help.
          <div class="yt-resp">
            <iframe class="iframe-resp" src="https://www.youtube.com/embed/zHMhLd4MUC4">
            </iframe>
          </div>
      </div>

  </div> <!-- About -->


  <div id="TheQuiz" class="tabcontent">


    <div class="container" id="steps">
    <div class="logo_div">
    <img src="pics\logo.png" id="logo_main" class="logo" style="width:60px;height:60px; margin-bottom: 30px;">
    </div>
      <fieldset id="field_steps">
        <legend id="leg_steps">Follow these 3 simple steps:</legend>
            <div id="remove_steps">
            <p id="click_survey">1.First, fill out our spectacularly short survey.</p>
             <button id="start_survey" class="hvr-grow" data-popup-open="popup-1">Survey</button>
            </div>
            <p id="click_start">2.Next, Click the "Start" button to begin the quiz.</p><br>
            <button id="start_quiz" class="hvr-grow" data-popup-open="popup-2">Start</button>
            <p id="have_fun">3.Have fun!</p>
      </fieldset>
    </div>


    <!--SURVEY-->
    <div class="popup" id="survey_popup" data-popup="popup-1">
      <div class="popup-inner">
        <a class="popup-close" data-popup-close="popup-1" href="#">x</a>

        <form id="survey" method="post" action="actions.php">

       <div id="surv_port">

            <div id="question_1" class="cont_surv">
              <p id="surv_q1"  class="surv_ques"><label id="bor_gender">1) What gender are you?<span id="span_gender" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="male" class="radios" name="gender" value="male"><label for="male">&nbsp;Male</label><br>
                <input type="radio" id="female" class="radios" name="gender" value="female"><label for="female">&nbsp;Female</label><br>
                <input type="radio" id="other" class="radios" name="gender" value="other"><label for="other">&nbsp;Other</label><br>
            </div>

            <div id="question_2" class="cont_surv">
              <p id="surv_q2" class="surv_ques"><label id="bor_age">2) How old are you?<span id="span_age" style="color:#ff0000"></span></label></p><br>
              <select id="age" name="ageselect">
                <option id="opt" value="0">Select your age</option>
              </select>
            </div>


            <div id="question_3" class="cont_surv">
              <p id="surv_q3" class="surv_ques"><label id="bor_years">3) English student for<span id="span_years" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="y1" class="radios" name="years" value=">_2"><label for="y1">&nbsp;0-2years</label><br>
                <input type="radio" id="y2" class="radios" name="years" value="2-5"><label for="y2">&nbsp;2-5years</label><br>
                <input type="radio" id="y3" class="radios" name="years" value="5-10"><label for="y3">&nbsp;5-10years</label><br>
                <input type="radio" id="y4" class="radios" name="years" value="10_<"><label for="y4">&nbsp;10+ years</label><br>
                <input type="radio" id="y5" class="radios" name="years" value="never_studied"><label for="y5">&nbsp;never studied</label>
            </div>

            <div id="question_4" class="cont_surv">
              <p id="surv_q4" class="surv_ques"><label id="bor_abroad">4) Experience abroad<span id="span_abroad" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="abr1" class="radios" name="abroad" value=">_year"><label for="abr1">&nbsp;less than a year</label><br>
                <input type="radio" id="abr2" class="radios" name="abroad" value="1-3_years"><label for="abr2">&nbsp;1-2 years</label><br>
                <input type="radio" id="abr3" class="radios" name="abroad" value="3-6_years"><label for="abr3">&nbsp;3-5 years</label><br>
                <input type="radio" id="abr4" class="radios" name="abroad" value="6-10_years"><label for="abr4">&nbsp;6-10 years</label><br>
                <input type="radio" id="abr5" class="radios" name="abroad" value="10_<"><label for="abr5">&nbsp;10+ years</label><br>
                <input type="radio" id="abr6" class="radios" name="abroad" value="never_abroad"><label for="abr6">&nbsp;never lived abroad</label>
            </div>

            <div id="question_5" class="cont_surv">
              <p id="surv_q5" class="surv_ques"><label id="bor_way">5) How do you learn?<span id="span_way" style="color:#ff0000"><br></span></label></p><br>

                <input type="checkbox" id="way1" class="check" name="way[]" value="g_course"><label for="way1">&nbsp;group course</label><br>
                <input type="checkbox" id="way2" class="check" name="way[]" value="private_teacher"><label for="way2">&nbsp;private teacher</label><br>
                <input type="checkbox" id="way3" class="check" name="way[]" value="self_taught"><label for="way3">&nbsp;self-taught</label><br>
                <input type="checkbox" id="way4" class="check" name="way[]" value="apps"><label for="way4">&nbsp;apps</label><br>
                <input type="checkbox" id="way5" class="check" name="way[]" value="video_games"><label for="way5">&nbsp;video games</label><br>
                <input type="checkbox" id="way6" class="check" name="way[]" value="other"><label for="way6">&nbsp;other</label>

            </div>

            <div id="question_6" class="cont_surv">
              <p id="surv_q6" class="surv_ques"><label id="bor_others">6) Foreign languages<span id="span_others" style="color:#ff0000"></span></label></p><br>
                <input type="radio" id="oth1" class="radios" name="others" value="one"><label for="oth1">&nbsp;One</label><br>
                <input type="radio" id="oth2" class="radios" name="others" value="two"><label for="oth2">&nbsp;Two</label><br>
                <input type="radio" id="oth3" class="radios" name="others" value="polyglot"><label for="oth3">&nbsp;I'm a polyglot</label>

            </div>

            <div id="question_7" class="cont_surv">
              <p id="surv_q7" class="surv_ques"><label id="bor_country">7) Where do you live?<span id="span_country" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="ctr1" class="radios" name="country" value="brazil"><label for="ctr1">&nbsp;Brazil</label><br>
                <input type="radio" id="ctr2" class="radios" name="country" value="abroad"><label for="ctr2">&nbsp;Abroad</label>

            </div>
            </div>
            <div>
              <button id="submit_survey" class="hvr-grow" type="submit" name="submitsurvey">Submit</button>
            </div>

        </form>
      </div>
    </div>




  <!--QUIZ-->

  <div class="popup" data-popup="popup-2">
    <div class="popup-inner" id="inner_2">

      <form id="quiz_form" method="post" action="actions.php">


        <a class="popup-close" id="popup_close_2" data-popup-close="popup-2" href="#">x</a>
        <div id="1" class="questions">
          <div class="cont_dial">
            <p class="situation">1 out of 30</p>
              <p>Milene: How is the weather today?</p>
              <p>Camile:<span class="error_style"><em>&nbsp;Is hot!</em></span></p>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="i_1" class="rads" name="sub_it" value="err_ok"><label for="i_1" class="err_label">&nbsp;It hot!</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

                <input type="radio" id="i_2" class="rads" name="sub_it" value="corr"><label for="i_2">&nbsp;It is hot!</label>
                <div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

                <input type="radio" id="i_3" class="rads" name="sub_it" value="err_2"><label for="i_3" class="err_label">&nbsp;Is it hot!</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fas fa-times" aria-hidden="true"></i></div><br>

           <div class="exp" id="exp_1" style="display:none">
           <p class="par_exp"><span class="span_exp">Explanations</span>: In English we always use the subject(It, He, She, etc).<br>Ex."It is important to read the news."<br>Ex."It doesn't rain much in Brasilia."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_1">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_1" class="next">Next</button>
        </div>


         <div id="2" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">2 out of 30</p>
            <div class="dialos">
              <p>Tiago: How was the party?</p>
              <p>Magda: Oh,<span class="error_style"><em>it was too good</em></span>.&nbsp;I danced all night.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="t_1" class="rads" name="too" value="corr"><label for="t_1">&nbsp;it was very good!</label>
                <div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="t_2" class="rads" name="too" value="err_ok"><label for="t_2" class="err_label">&nbsp;it were very good</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="t_3" class="rads" name="too" value="err_2"><label for="t_3" class="err_label">&nbsp;it was two good!</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_2" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "Very" when we want to intensify something". Ex."The weather was very good on our holiday".<br>We say "Too" to express negative excess of something, ex."It's 10 degrees. It is too cold to go to the beach."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_2">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_2" class="next">Next</button>
          <button id="back_2" class="back">Back</button>
        </div>

       <div id="3" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">3 out of 30</p>
              <p>Rudolfo: Do you like your teacher?</p>
              <p>Pedro: Yes, I love her.<span class="error_style"><em>She has much patience</em></span>&nbsp;with me.</p>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="m_1" class="rads" name="much" value="err_2"><label for="m_1" class="err_label">&nbsp;a lot patience</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="m_2" class="rads" name="much" value="err_ok"><label for="m_2" class="err_label">&nbsp;a lot of patience</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="m_3" class="rads" name="much" value="corr"><label for="m_3">&nbsp;a lot off patience</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_3" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "A lot of" in the affirmative when we want to express big quantity for non-countable nouns like patience, poluttion, water etc. Ex."There is a lot of pollution in China."<br> We say "Much" only in the negative or to intensify something ex."I don't drink much water.", "I like socccer very much."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_3">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_3" class="next">next</button>
          <button id="back_3" class="back">back</button>
        </div>

      <div id="4" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">4 out of 30</p>
            <div class="dialos">
              <p>Livia: Do you want to see a movie?</p>
              <p>Alex: Sure,<span class="error_style"><em>have many</em></span>&nbsp;good films on Netflix.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="ex_1" class="rads" name="exist" value="err_ok"><label for="ex_1" class="err_label">&nbsp;they are many</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="ex_2" class="rads" name="exist" value="corr"><label for="ex_2">&nbsp;there are many</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="ex_3" class="rads" name="exist" value="err_2"><label for="ex_3" class="err_label">&nbsp;has many</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_4" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "There is/are" to express that something is or exists.<br> Ex. "There is a good restaurant in my block."<br>Ex."There are beautiful beaches in Brazil."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_4">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_4" class="next">next</button>
          <button id="back_4" class="back">back</button>
        </div>


       <div id="5" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">5 out of 30</p>
            <div class="dialos">
              <p>Sylvio: What's your mother's profession?</p>
              <p>Cristiano:<span class="error_style"><em>My mother, she is a dentist.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="tw_1" class="rads" name="two_sub" value="err_2"><label for="tw_1" class="err_label">&nbsp;my mother dentist</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="tw_2" class="rads" name="two_sub" value="corr"><label for="tw_2">&nbsp;my mother is a dentist</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="tw_3" class="rads" name="two_sub" value="err_ok"><label for="tw_3" class="err_label">&nbsp;my mothers is a dentist</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_5" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: Only one subject in necessary.<br>Ex."My brother is a student." or "He is a student."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_5">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_5" class="next">next</button>
          <button id="back_5" class="back">back</button>
        </div>

        <div id="6" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">6 out of 30</p>
            <div class="dialos">
              <p>Mauricio: Did you like the movie?</p>
              <p>Beata: Yes,<span class="error_style"><em>I liked.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="ob_1" class="rads" name="no_obj" value="corr"><label for="ob_1">&nbsp;I liked it</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="ob_2" class="rads" name="no_obj" value="err_ok"><label for="ob_2" class="err_label">&nbsp;I liked this</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="ob_3" class="rads" name="no_obj" value="err_2"><label for="ob_3" class="err_label"&nbsp;>&nbsp;I liked its</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_6" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: There are transitive and intransitive verbs in English. Intransitive verbs don't need an object. Examples of intransitive verbs: agree, arrive, come, cry, fly, exist, happen, live, rain, sleep, stay, walk. Ex." Birds fly", ex."Shit happens."<br>Transitive verbs are followed by an object. Commmon transitive verbs are: build, cut, find, like, make, need, send, use, want. Ex."The student needs a pen", "Mary is cutting the meat."<br>In the answers we also have to include the object. Ex."A: Did you see John?" B:Yes, I saw him."<br><br>Obs. Some verbs can be both: transitive and intransitive. Ex. "Tom studies philosophy." or "Tom studies."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_6">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_6" class="next">next</button>
          <button id="back_6" class="back">back</button>
        </div>

      <div id="7" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">7 out of 30</p>
            <div class="dialos">
              <p>Claudio: Where were you?</p>
              <p>Natalia: I went to the store<span class="error_style"><em>&nbsp;for buy some milk.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="for_1" class="rads" name="for" value="err_ok"><label for="for_1" class="err_label">&nbsp;to buying some milk</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="for_2" class="rads" name="for" value="corr"><label for="for_2">&nbsp;to buy some milk</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="for_3" class="rads" name="for" value="err_2"><label for="for_3" class="err_label">&nbsp;for to buy some milk</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_7" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "in order to" to express purpose.  Use "In order to" with a verb to express purpose. "In order" is often omitted. Ex."She saves money in order to travel." or "She saves money to travel."<br> "For" can be used to express purpose, but it is a preposition and is followed by a noun. Ex. "I went online for some information." or "I went online (in order) to get some information."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_7">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_7" class="next">next</button>
          <button id="back_7" class="back">back</button>
        </div>

          <div id="8" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">8 out of 30</p>
            <div class="dialos">
              <p>Joe: How old are you?</p>
              <p>Camilo:<span class="error_style"><em>I have 38 years.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="age_1" class="rads" name="h_age" value="corr"><label for="age_1">&nbsp;I am 38 years old</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="age_2" class="rads" name="h_age" value="err_2"><label for="age_2" class="err_label">&nbsp;I have 38 years old</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="age_3" class="rads" name="h_age" value="err_ok"><label for="age_3" class="err_label">&nbsp;I am 38 old</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_8" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We use the verb "To be" to inform our age. Ex."She is 25."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_8">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_8" class="next">next</button>
          <button id="back_8" class="back">back</button>
        </div>

        <div id="9" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">9 out of 30</p>
            <div class="dialos">
              <p>Marcel: <span class="error_style"><em>Hey Guy,&nbsp;</em></span>how are you?</p>
              <p>Steven: I'm okay, thanks.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="guy_1" class="rads" name="guy" value="err_ok"><label for="guy_1" class="err_label">&nbsp;hey face</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="guy_2" class="rads" name="guy" value="err_2"><label for="guy_2" class="err_label">&nbsp;hey male</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="guy_3" class="rads" name="guy" value="corr"><label for="guy_3">&nbsp;hey man</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_9" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: One of the ways to greet someone informally is "Hey man".&nbsp;We don't use "Hey guy" in English.</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_9">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_9" class="next">next</button>
          <button id="back_9" class="back">back</button>
        </div>

        <div id="10" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">10 out of 30</p>
            <div class="dialos">
              <p>Marilia: What things do you like?</p>
              <p>Gabriel: I'm a typical guy.<span class="error_style"><em>&nbsp;I like car.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="act_1" class="rads" name="car" value="err_ok"><label for="act_1" class="err_label">&nbsp;I likes car</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="act_2" class="rads" name="car" value="corr"><label for="act_2">&nbsp;I like cars</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="act_3" class="rads" name="car" value="err_2"><label for="act_3" class="err_label">&nbsp;I like a car</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_10" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We use the plural with countable nouns to say we like something. Ex."I like dogs."<br> We use the singular with non-countable nouns. Ex."I like tennis."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_10">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_10" class="next">next</button>
          <button id="back_10" class="back">back</button>
        </div>


      <div id="11" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">11 out of 30</p>
            <div class="dialos">
              <p>Rogerio: What time do I have to be at the airport?</p>
              <p>Sansa: 3.30. Hurry up or you will <span class="error_style"><em>lose your flight.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="los_1" class="rads" name="lose" value="err_2"><label for="los_1" class="err_label">&nbsp;lost your flight</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="los_2" class="rads" name="lose" value="corr"><label for="los_2">&nbsp;miss your flight</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="los_3" class="rads" name="lose" value="err_ok"><label for="los_3" class="err_label">&nbsp;loose your flight</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_11" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "To miss" when something is gone and it will not come back. Ex. "I missed my bus, I will take another one tomorrow."<br>We say "To lose" when we don't know where something is but there is a chance we will get it back. Ex. "I lost my keys last week."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_11">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_11" class="next">next</button>
          <button id="back_11" class="back">back</button>
        </div>

         <div id="12" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">12 out of 30</p>
            <div class="dialos">
              <p>Sabrina: Why are you nervous?</p>
              <p>Nando:<span class="error_style"><em>&nbsp;I discussed with Marta about&nbsp;</em></span>politics.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="diss_1" class="rads" name="diss" value="err_ok"><label for="diss_1" class="err_label">&nbsp;I discussed Marta</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="diss_2" class="rads" name="diss" value="err_2"><label for="diss_2" class="err_label">&nbsp;I was discussing with Marta</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="diss_3" class="rads" name="diss" value="corr"><label for="diss_3">&nbsp;I argued with Marta</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_12" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "To discuss" if we talk about something with somebody in detail. Ex. "My friend works for the United Nations. She discusses important topics with her bosses".<br> We say "To argue" when we talk angrily about something with someone. Ex."He argued with his parents about house chores."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_12">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_12" class="next">next</button>
          <button id="back_12" class="back">back</button>
        </div>

         <div id="13" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">13 out of 30</p>
            <div class="dialos">
              <p>Student:<span class="error_style"><em>I have a doubt</em></span> about homework.<br>Can you help me?</p>
              <p>Teacher: Sure.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="doub_1" class="rads" name="doubt" value="err_2"><label for="doub_1" class="err_label">&nbsp;I have question</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="doub_2" class="rads" name="doubt" value="err_ok"><label for="doub_2" class="err_label">&nbsp;I have a questioning</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="doub_3" class="rads" name="doubt" value="corr"><label for="doub_3">&nbsp;I have a question</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_13" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "I am in doubt" when you cannot decide about something. Ex. "I am in doubt as to what to do about my future".<br>We can say "I have a question" or "Something is not clear to me" when we want to ask a teacher for help. We don't say "I have a doubt" in English.</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_13">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_13" class="next">next</button>
          <button id="back_13" class="back">back</button>
        </div>

      <div id="14" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">14 out of 30</p>
            <div class="dialos">
              <p>Marcia: Who were you talking to?<br>I don't know him.</p>
              <p>Livia: His name's Paulo.<br>&nbsp;<span class="error_style"><em>I knew him</em></span>&nbsp;last week at the gym.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="met_1" class="rads" name="know" value="err_ok"><label for="met_1" class="err_label">&nbsp;I meat him</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="met_2" class="rads" name="know" value="corr"><label for="met_2">&nbsp;I met him</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="met_3" class="rads" name="know" value="err_2"><label for="met_3" class="err_label">&nbsp;I meet him</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_14" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "I know someone" when you mean you are familar with a person, place, or a thing. Ex. "I know the mayor." We say "I knew someone" when you had a past relationship with someone or something but you don't have it anymore. Ex."I knew her in high school. She was my friend."<br>We say "I met someone" when we talk to the person for the first time. Ex."I met George in France on my vacation." Ex. "I'm a journalist so I meet many interesting people."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_14">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_14" class="next">next</button>
          <button id="back_14" class="back">back</button>
        </div>


         <div id="15" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">15 out of 30</p>
            <div class="dialos">
              <p>Gui: Martin had an accident.</p>
              <p>Vitor: Really?</p>
              <p>Gui:<span class="error_style"><em>&nbsp;Thanks god</em></span>&nbsp;he's alright.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="god_1" class="rads" name="god" value="corr"><label for="god_1">&nbsp;thank god he's alright</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="god_2" class="rads" name="god" value="err_2"><label for="god_2" class="err_label">&nbsp;thanks, he alright</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="god_3" class="rads" name="god" value="err_ok"><label for="god_3" class="err_label">&nbsp;thanks gods, he's alright</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_15" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "Thank God" when we express relief. We don't add "s" to "God". Ex. "Thank God it doesn't snow in Brazil. I hate cold weather."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_15">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_15" class="next">next</button>
          <button id="back_15" class="back">back</button>
        </div>

        <div id="16" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">16 out of 30</p>
            <div class="dialos">
              <p>Carla: Do you like pizza?</p>
              <p>Joana: Oh, Yeah!<span class="error_style"><em>&nbsp;it's my preferred</em></span>&nbsp;food.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="pref_1" class="rads" name="pref" value="err_2"><label for="pref_1" class="err_label">&nbsp;it's my prefer</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="pref_2" class="rads" name="pref" value="err_ok"><label for="pref_2" class="err_label">&nbsp;it's my preference</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="pref_3" class="rads" name="pref" value="corr"><label for="pref_3">&nbsp;it's my favorite</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_16" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "Favorite" when we mean we like, have affection for someone or something more than others. Ex."Roger Federer is my favorite tennis player."<br> We use "Preferred" as past of verb "To prefer" only.</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_16">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_16" class="next">next</button>
          <button id="back_16" class="back">back</button>
        </div>

         <div id="17" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">17 out of 30</p>
            <div class="dialos">
              <p>Ana: Did your friend enjoy Rio?</p>
              <p>Miguel: Yes, but&nbsp;<span class="error_style"><em>she was impressed with </em></span>violence in the favelas.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="imp_1" class="rads" name="impress" value="err_2"><label for="imp_1" class="err_label">&nbsp;she was impressing </label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="imp_2" class="rads" name="impress" value="err_ok"><label for="imp_2" class="err_label">&nbsp;she impressed</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="imp_3" class="rads" name="impress" value="corr"><label for="imp_3">&nbsp;she was astonished by</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_17" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We are "Impressed" when somebody or something arouses our intrest or admiration. Ex."Messi's skills are impressive."<br> We can say "Astonished" when someone or something makes us surprised in a negative or threatning way. Ex."He was astonished by the stock market crash."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_17">Your score:&nbsp;</h4>
            </div>
            </div>
          </div>
          <button id="next_17" class="next">next</button>
          <button id="back_17" class="back">back</button>
        </div>

        <div id="18" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">18 out of 30</p>
            <div class="dialos">
              <p>Gustavo: I'd like to visit Italy.</p>
              <p>Erik: Me too, I have a lot of&nbsp;<span class="error_style"><em>parents there.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="par_1" class="rads" name="parent" value="err_2"><label for="par_1" class="err_label">&nbsp;parent there</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="par_2" class="rads" name="parent" value="err_ok"><label for="par_2" class="err_label">&nbsp;families there</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="par_3" class="rads" name="parent" value="corr"><label for="par_3">&nbsp;relatives there</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_18" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "Parents" when we mean our mother and father only. Ex. "My parents' names are Teresa and Mike."<br> We say "Relatives" when we mean extended family. Ex."I have relatives all over the world, mostly cousins."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_18">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_18" class="next">next</button>
          <button id="back_18" class="back">back</button>
        </div>


        <div id="19" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">19 out of 30</p>
            <div class="dialos">
              <p>Dani: Are you free at 6?</p>
              <p>Carlos: No,&nbsp;<span class="error_style"><em>I go out from</em></span>&nbsp;work at 7.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="go_1" class="rads" name="gout" value="corr"><label for="go_1">&nbsp;I leave work</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="go_2" class="rads" name="gout" value="er_2"><label for="go_2" class="err_label">&nbsp;I go off work</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="go_3" class="rads" name="gout" value="err_ok"><label for="go_3" class="err_label">&nbsp;I live work</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_19" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "To go out" when we mean going to a nightclub or a bar and staying until late hours. Ex."Young people love to go out on weekends."<br>We say "To leave" when we mean to exit a place, relationship, group, etc. Ex. "I leave class earlier on Fridays beacuse I have to catch a bus." Ex. "She left the marrige due to his gambling habit."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_19">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_19" class="next">next</button>
          <button id="back_19" class="back">back</button>
        </div>

        <div id="20" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">20 out of 30</p>
            <div class="dialos">
              <p>Alex: I really enjoy working from home.</p>
              <p>Magda: Why?
              <p>Alex: I don't have to<span class="error_style"><em>&nbsp;use a suit.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="use_1" class="rads" name="use" value="corr"><label for="use_1">&nbsp;wear a suit</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="use_2" class="rads" name="use" value="err_2"><label for="use_2" class="err_label">&nbsp;put a suit</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="use_3" class="rads" name="use" value="err_ok"><label for="use_3" class="err_label">&nbsp;take a suit</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_20" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "To use" when we do something with an object in order to do a job or solve a problem. Ex."I use a blowdryer to dry my hair."<br> We say "To wear" when we have something on our body. Ex."She wears a lot of makeup." Ex."My friend wears braces."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_20">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_20" class="next">next</button>
          <button id="back_20" class="back">back</button>
        </div>



        <div id="21" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">21 out of 30</p>
            <div class="dialos">
              <p>Suzy: Hi Mariana, how are you?</p>
              <p>Mariana: I'm tired, I studied<span class="error_style"><em>&nbsp;during 3 hours.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="stu_1" class="rads" name="durat" value="err_ok"><label for="stu_1" class="err_label">&nbsp;during for 3 hours</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="stu_2" class="rads" name="durat" value="corr"><label for="stu_2">&nbsp;for 3 hours</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="stu_3" class="rads" name="durat" value="err_2"><label for="stu_3" class="err_label">&nbsp;at 3 hours</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_21" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "For" when we mean duration of an activity. Ex. "I lived in the States for 7 years." We say "During" when we mean at some point or time of reference. Ex. "I read a lot during the pandemic."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_21">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_21" class="next">next</button>
          <button id="back_21" class="back">back</button>
        </div>

        <div id="22" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">22 out of 30</p>
            <div class="dialos">
              <p>Jackie: How was training today?</p>
              <p>Juliano: Good, but&nbsp;<span class="error_style"><em>I stayed tired</em></span>&nbsp;quickly.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="sta_1" class="rads" name="stay" value="err_ok"><label for="sta_1" class="err_label">&nbsp;I tires</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="sta_2" class="rads" name="stay" value="err_2"><label for="sta_2" class="err_label">&nbsp;I became tired</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="sta_3" class="rads" name="stay" value="corr"><label for="sta_3">&nbsp;I got tired</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_22" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "get tired" when we mean our disposition changes from good condition to tired, in need of rest. Ex. "When I don't eat, I get tired quickly." We can say "stay tired" if you remain in the need of rest, chronically feel tired. Ex "I eat and sleep well but I stay (feel) tired most of the day." Still, "Feel tired" is more common.<br> Use "Get + Adjective" to express change in a state.<br>Use "Feel + Adjective" to express permanence of a state.</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_22">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_22" class="next">next</button>
          <button id="back_22" class="back">back</button>
        </div>

        <div id="23" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">23 out of 30</p>
            <div class="dialos">
              <p>Tony: How do you feel?</p>
              <p>Rafael: Not well.&nbsp;<span class="error_style"><em>I'm with a headache.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="wit_1" class="rads" name="with" value="err_2"><label for="wit_1" class="err_label">&nbsp;I'm a headache</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="wit_2" class="rads" name="with" value="err_ok"><label for="wit_2" class="err_label">&nbsp;I'm headache</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="wit_3" class="rads" name="with" value="corr"><label for="wit_3">&nbsp;I have a headache</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_23" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "To have a headache" or any kind of pain or disease. Ex. "Jonh had a stomachache after he ate those grapes." Ex."Luis has a heart condition."<br> We say "To be with someone" when we mean their company, generally we use it just for people. Ex. "I was with Claire at the picnic."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_23">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_23" class="next">next</button>
          <button id="back_23" class="back">back</button>
        </div>

        <div id="24" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">24 out of 30</p>
            <div class="dialos">
              <p>Luiza: What did you do last night?</p>
              <p>Breno: I saw 3<span class="error_style"><em>&nbsp;chapters</em></span> of "Friends".</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="cha_1" class="rads" name="chap" value="err_2"><label for="cha_1" class="err_label">&nbsp;capitals</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

                <input type="radio" id="cha_2" class="rads" name="chap" value="corr"><label for="cha_2">&nbsp;episodes</label>
                <div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

                <input type="radio" id="cha_3" class="rads" name="chap" value="err_ok"><label for="cha_3" class="err_label">&nbsp;programs</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

           <div class="exp" id="exp_24" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "Chapter" when we mean a division of a book. Ex. "The first chapter of her autobiography is about her childhood."<br> We say "Episode" when we mean a broadcast show like television series, radio or a podcast. Ex. "There are 10 episodes in each season of "Game of Thrones."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_24">Your score:&nbsp;</h4>
            </div>
          </div>
        </div>
          <button id="next_24" class="next">next</button>
          <button id="back_24" class="back">back</button>
      </div>

        <div id="25" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">25 out of 30</p>
            <div class="dialos">
              <p>Susan: What's wrong?</p>
              <p>Saulo: I'm worried about my son. He's getting<span class="error_style"><em>&nbsp;bad notes</em></span>&nbsp;in school.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="not_1" class="rads" name="notes" value="err_ok"><label for="not_1" class="err_label">&nbsp;bad grade</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="not_2" class="rads" name="notes" value="corr"><label for="not_2">&nbsp;bad grades</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="not_3" class="rads" name="notes" value="err_2"><label for="not_3" class="err_label">&nbsp;bad points</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_25" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "Note" when we mean mostly a short comment, informal letter or written message. Ex. "He made a note on a piece of paper."<br> We say "Grade" when we mean a mark indicating the quality of a student's work. Ex."She got good grades in high school."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_25">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_25" class="next">next</button>
          <button id="back_25" class="back">back</button>
        </div>

        <div id="26" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">26 out of 30</p>
            <div class="dialos">
              <p>Robyn: Who is your number one singer?</p>
              <p>Julio: Rihanna, I love all of&nbsp;<span class="error_style"><em>her musics.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="mus_1" class="rads" name="music" value="err_2"><label for="mus_1" class="err_label">&nbsp;her sounds</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="mus_2" class="rads" name="music" value="err_ok"><label for="mus_2" class="err_label">&nbsp;her song</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="mus_3" class="rads" name="music" value="corr"><label for="mus_3">&nbsp;her songs</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

            <div class="exp" id="exp_26" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "Song(s)" when we mean a piece of a musical composition. Ex. "Garota de Ipanema" is a famous Brazilian song."<br> We don't use "music" in the plural.</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_26">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_26" class="next">next</button>
          <button id="back_26" class="back">back</button>
        </div>

        <div id="27" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">27 out of 30</p>
            <div class="dialos">
              <p>Marcus: What time do you usually get up?</p>
              <p>Fernanda:&nbsp;I get up&nbsp;<span class="error_style"><em>at 6 all day.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="ev_1" class="rads" name="every" value="corr"><label for="ev_1">&nbsp;every day</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="ev_2" class="rads" name="every" value="err_ok"><label for="ev_2" class="err_label">&nbsp;every days</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="ev_3" class="rads" name="every" value="err_2"><label for="ev_3" class="err_label">&nbsp;all days</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_27" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "All day" when we mean from morning till evening.<br> Ex. "I cleaned my room all day yesterday."<br> We say "Every day" when we mean something happening daily (Monday, Tuesday, etc). Ex. "I don't watch the news every day."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_27">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_27" class="next">next</button>
          <button id="back_27" class="back">back</button>
        </div>

        <div id="28" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">28 out of 30</p>
            <div class="dialos">
              <p>Sol: What do you think of your English teacher?</p>
              <p>Maria: He is very&nbsp;<span class="error_style"><em>symphatetic.</em></span></p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="sym_1" class="rads" name="sym" value="err_2"><label for="sym_1" class="err_label">&nbsp;symphatic</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="sym_2" class="rads" name="sym" value="corr"><label for="sym_2">&nbsp;friendly</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="sym_3" class="rads" name="sym" value="err_ok"><label for="sym_3" class="err_label">&nbsp;friend</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_28" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "Symphatetic" when we are approving of somethig or somebody. Ex. "She was symphatetic to my views."<br>We say "Friendly", "Nice" when we mean someone whose company we find enjoyable, pleasant. Ex. "Brazilian people are friendly."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_28">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_28" class="next">next</button>
          <button id="back_28" class="back">back</button>
        </div>

        <div id="29" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">29 out of 30</p>
            <div class="dialos">
              <p>Ana: What kind of people don't you like?</p>
              <p>Julia: <span class="error_style"><em>I can't support</em></span>&nbsp;messy people.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="sup_1" class="rads" name="support" value="corr"><label for="sup_1">&nbsp;I can't stand</label><div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>
                <input type="radio" id="sup_2" class="rads" name="support" value="err_ok"><label for="sup_2" class="err_label">&nbsp;I cans stand</label> <div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>
                <input type="radio" id="sup_3" class="rads" name="support" value="err_2"><label for="sup_3" class="err_label">&nbsp;I can't stand up</label><div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_29" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We say "Support" when we mean to help someone financially. Ex."I lost my job and now my parents support me."<br> We say "Can't stand" when we mean we strongly dislike something or somebody. Ex. "I can't stand country music."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_29">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_29" class="next">next</button>
          <button id="back_29" class="back">back</button>
        </div>

        <div id="30" class="questions" style="display: none;">
          <div class="cont_dial">
            <p class="situation">30 out of 30</p>
            <div class="dialos">
              <p>Carol: What makes Brazil different in South America?</p>
              <p>Jaciara:<span class="error_style"><em>&nbsp;It's the unique country</em></span>&nbsp;that speaks Portuguese.</p>
            </div>
          </div>
          <hr>
          <div class="cont_answer">
            <p class="p_corr"><label class="bor_choose">What is correct?<span class="span_choose" style="color:#ff0000"></span></label></p><br>

                <input type="radio" id="unq_1" class="rads" name="uniq" value="corr"><label for="unq_1">&nbsp;it's the only country</label>
                <div class="d_corr" style="display:none">&nbsp;<i class="fas fa-check"></i></div><br>

                <input type="radio" id="unq_2" class="rads" name="uniq" value="err_ok"><label for="unq_2" class="err_label">&nbsp;it's one country</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fa fa-times" aria-hidden="true"></i></div><br>

                <input type="radio" id="unq_3" class="rads" name="uniq" value="err_2"><label for="unq_3" class="err_label">&nbsp;it's the uniquely country</label>
                <div class="d_err" style="display:none">&nbsp;<i class="fas fa-times" aria-hidden="true"></i></div><br>

            <div class="exp" id="exp_30" style="display:none"><p class="par_exp"><span class="span_exp">Explanations</span>: We use "Only" when we mean the single example of something.<br>Ex. "There is only one movie theater in my town."<br>We say "Unique" when we mean one of a kind, atypical, unusual. Ex."She has a very unique smile."</p>
            <div class="resultMsg">
             <h4 class="scoreInfo" id="scoreInfo_30">Your score:&nbsp;</h4>
            </div>
           </div>
          </div>
          <button id="next_30" class="next">next</button>
          <button id="back_30" class="back">back</button>
        </div>



        <!--Hidden Msg -->
        <div id="score_msg" class="container">
        <h2>Thanks for doing the quiz!<br>Your score is:</h2>
        <h3><span class="score">0 points</span></h3>
        <p>check your answers&nbsp;<button id="check_res" class="hvr-grow" onclick="checkResult()">HERE</button></p>
        </div>


        <div id="div_instr">
          <p id="instr" name="instructions">Instructions</p>
          <button id="sub_quiz" type="submit">Submit</button>
        </div>
      </form>

    </div><!--popup-inner2-->
  </div> <!-- popup2-->

  <div id="results">
  <p id="urTest">Your test:</p><br>
  </div>

  <!--mouseover instructions in CSS: Display None -->
  <div id="inst_hov">
   <br>
      <p>* Read the dialogues and check the correct answer.<br></p>
    <p>* After you finish check your score and explanations.</p>
  </div>

  </div> <!--Quiz tab-->

  <!--CONTACT FORM-->
  <div id="ContactUs" class="tabcontent">
    <div class="container" id="contact_cont">
    <div class="logo_div">
  <img src="pics\logo.png" id="logo_main" class="logo" style="width:60px;height:60px;">
  </div>
       <div id="feedback_div" style="text-align:center">
        <h3 id="shoot_email">If you like the quiz say hi to me on<br><i class="fab fa-twitter"></i><a href="https://twitter.com/kamiltkacz" style="font-size: unset;">&nbsp;@kamiltkacz</a><br>shoot me an e-mail directly at</h3>
        <h3><a href="mailto:hello@brazilianbloopers.com">hello@brazilianbloopers.com</a></h3>
        <h3>or</h3>
      </div>
      <div class="row">
        <div class="column">
          <div id="labels_left">
          <form id="contact" method="post" action="actions.php">
          <div id ="contact_text">
              <label for="name">Name*<span id="span_name"></span></label>
            <input type="text" id="bor_name" name="name" placeholder="Your name.." font-family="cursive">
              <label for="email">E-mail*<span id="span_email"></span></label>
            <input type="text" id="bor_email" name="email" placeholder="Your e-mail..">
              <label for="subject">Subject</label>
            <input type="text" id="bor_subject" name="subject" placeholder="suggestion, comment, etc.">
              <label for="message">Message*<span id="span_message"></span></label>
            <textarea id="bor_message" name="message" placeholder="Write your message here!" style="height:170px"></textarea>
            </div>
            </div>
            <button id="submit_contact" class="hvr-grow" type="submit" name="submitcontact">Submit</button>
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

    // inline button Check results function

    function checkResult() {

     let scorePopup = document.getElementsByClassName("popup")[1];
     let hideSteps = document.getElementById("steps");

     setTimeout(function(){
       scorePopup.style.display = "none",
       hideSteps.style.display = "none";
      }, 1000);
      $('#footer').show();
      $("#results").show();
    }





  </script>




   <!-- My Footer -->
   <div id="footer" class="container">
      <p id="p_footer">Author - Kamil Tkacz&nbsp;<a href="https://twitter.com/kamiltkacz" style="font-size: unset;">@kamiltkacz</a>&nbsp;<i class="fab fa-twitter"></i><br>
        &copy;2020 BrazilianBloopers.com<br>
        Photo by &nbsp;<a href="https://www.instagram.com/andrenoboa/?utm_medium=referral&utm_source=unsplash"style="font-size: unset;">@andrenoboa</a>&nbsp;<i class="fab fa-instagram"></i></p>
   </div>

     <!-- JS Survey -->
     <script src="survey.js"></script>
     <!-- JS Quiz -->
     <script src="quiz.js"></script>
     <!--JS Contactform -->
     <script src="contact_form.js"></script>
       <!--JS Portuguese -->
       <script src="port.js"></script>











</body>

</html>



