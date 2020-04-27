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

  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  <script>

  </script>




  <!-- My CSS -->
  <link rel="stylesheet" href="styles.css">

  <!--Bangers Font-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">

  <!--SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="sweetalert2.all.min.js"></script>
  <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>

  <!--Babel, Moment, Rome-->
  <script src="https://unpkg.com/babel-polyfill@6.2.0/dist/polyfill.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment-with-locales.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/3.0.2/rome.standalone.js"></script>

  <script src="https://unpkg.com/@popperjs/core@2"></script>










</head>

<body>

  <button class="tablink" onclick="openPage('Home', this)" ; id="defaultOpen">
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



  <div id="Home" class="tabcontent">
    <h1>Hello, Welcome to Brazilian Bloopers.</h1><br>
    <p>Here we tell you what gives you away as Brazilian!</p>

  </div>


  <div id="About" class="tabcontent">
    <p>We are a group of English teachers based in Brasilia, Brazil who are determined to sharpen your skills</p>
  </div>

  <div id="The Quiz" class="tabcontent">
    <h1>Before You get to test your level, start with our spectacularly short&nbsp;<a class="btn" data-popup-open="popup-1" href="#"><span id="surveyname">survey</span></a><br>It will take you to the quiz</h1>



    <form id="survey" method="post" action="actions.php">
      <div class="popup" data-popup="popup-1">



        <div class="popup-inner">
          <div id="popup-empty">

            <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
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
              <p><label id="bor_others">6) How many foreign languages do you speak?<span id="span_others" style="color:#ff0000"></span></label></p>
              <input type="radio" id="oth1" class="radios" name="others" value="one"><label for="oth1">One</label><br>
              <input type="radio" id="oth2" class="radios" name="others" value="two"><label for="oth2">Two</label><br>
              <input type="radio" id="oth3" class="radios" name="others" value="polyglot"><label for="oth3">I'm a polyglot</label>

            </div>

            <div id="question7">
              <p><label id="bor_country">7) Where do you live?<span id="span_country" style="color:#ff0000"></span></label></p>

              <input type="radio" id="ctr1" class="radios" name="country" value="brazil"><label for="ctr1">Brazil</label><br>
              <input type="radio" id="ctr2" class="radios" name="country" value="abroad"><label for="ctr2">Abroad</label>
            </div>



            <button type="button" id="submit_survey" type="submit" name="submitsurvey">Submit</button>



          </div>
        </div>
      </div>
    </form>

  </div>



  <script>
    // Age Select Menu
    let selectElement = document.getElementById("age");
    if (selectElement !== undefined) {
      for (let agenum = 1; agenum <= 100; agenum++) {
        selectElement.add(new Option(agenum));
      }
    }


    // Reset border color & text in span element for question1 validation
    $("input[type='radio'][name='gender']").click(function() {
      $("input[type='radio'][name='gender']").focus();
      $("#bor_gender").css({
        "border": ""
      });
      $("#span_gender").text("");

    });

    // Reset border color & text in span element for question2 validation
    $("#age").click(function() {
      $("#age").focus();
      $("#bor_age").css({
        "border": ""
      });
      $("#span_age").text("");

    });

    // Reset border color & text in span element for question3 validation
    $("input[type='radio'][name='years']").click(function() {
      $("input[type='radio'][name='years']").focus();
      $("#bor_years").css({
        "border": ""
      });
      $("#span_years").text("");

    });


    // Reset border color & text in span element for question4 validation
    $("input[type='radio'][name='abroad']").click(function() {
      $("input[type='radio'][name='abroad']").focus();
      $("#bor_abroad").css({
        "border": ""
      });
      $("#span_abroad").text("");

    });


    // Reset border color & text in span element for question5 validation
    $(".check").click(function() {
      $(".check").focus();
      $("#bor_way").css({
        "border": ""
      });
      $("#span_way").text("");

    });
    // Reset border color & text in span element for question6 validation
    $("input[type='radio'][name='others']").click(function() {
      $("input[type='radio'][name='others']").focus();
      $("#bor_others").css({
        "border": ""
      });
      $("#span_others").text("");

    });


    // Reset border color & text in span element for question7 validation
    $("input[type='radio'][name='country']").click(function() {
      $("input[type='radio'][name='country']").focus();
      $("#bor_country").css({
        "border": ""
      });
      $("#span_country").text("");

    });


    // Survey Data - on(click)
    $("#survey").submit(function() {
      return false;
    });

    $("#submit_survey").on("click", function() {

      var formData = $("#survey :input").serializeArray();

      formData[formData.length] = {
        name: "action",
        value: "submit_survey"
      };
      formData.push({});
      $.ajax({
        type: "POST",
        url: $("#survey").attr("action"),
        data: formData,
        dataType: 'json',
        async: true,
        success: function(result) {



          if (result.genderErr == "empty") {
            $("#bor_gender").css({
              "border-bottom": "5px solid red",
              "padding": "8px"
            });
            $("#span_gender").text(" * ");
            $("#valmsg").show();

          }

          if (result.ageErr == "empty") {
            $("#bor_age").css({
              "border-bottom": "5px solid red",
              "padding": "8px"
            });
            $("#span_age").text(" * ");
            $("#valmsg").show();

          }



          if (result.yearsErr == "empty") {
            $("#bor_years").css({
              "border-bottom": "5px solid red",
              "padding": "8px"
            });
            $("#span_years").text(" * ");
            $("#valmsg").show();


          }

          if (result.abroadErr == "empty") {
            $("#bor_abroad").css({
              "border-bottom": "5px solid red",
              "padding": "6px"
            });
            $("#span_abroad").text(" * ");
            $("#valmsg").show();


          }

          if (result.wayErr == "empty") {
            $("#bor_way").css({
              "border-bottom": "5px solid red",
              "padding": "6px"
            });
            $("#span_way").text(" * ");
            $("#valmsg").show();


          }

          if (result.othersErr == "empty") {
            $("#bor_others").css({
              "border-bottom": "5px solid red",
              "padding": "6px"
            });
            $("#span_others").text(" * ");
            $("#valmsg").show();


          }

          if (result.countryErr == "empty") {
            $("#bor_country").css({
              "border-bottom": "5px solid red",
              "padding": "6px"
            });
            $("#span_country").text(" * ");
            $("#valmsg").show();

          }





          // After data submitted do stuff here

          if (result.result == 1) {




            let startHtml = $(`

              <div id="start">\
              <p><label id="start">\
              7) Welcome to the Quiz!\
              <span id="span_start" style="color:#ff0000"></span></label></p>\
              </div>\


              <button type="button" id="instr" name="instructions"> <a href="#" data-html="true" title="Rules &#013; Are &#013; here &#013; to &#013; help &#013; you">instructions</a></button>\
              <button type="button" id="start_quiz" type="submit" name="startquiz">Start</button>\


                          `);




            $("#popup-empty").replaceWith(startHtml);

            $(document).ready(function() {
              $("#start_quiz").on("click", function() {

                alert("Coming soon");


              });

            });

          }

          if (result.result == 2) {
            Swal.fire({
              icon: 'error',
              title: 'Hmmm...',
              text: 'Something went wrong, Try again!',
              showCloseButton: true,
              footer: '<a href><strong>Home</strong></a>'
            });
          }


        } //ajax, success function//
      }); //ajax//
    }); //submit on.click function//
  </script>

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
    // Reset border color & text in span element for name validation
    $("#bor_name").focus(function() {
      $("#bor_name").css({
        "border": ""
      });
      $("#span_name").text("");
    });
    // Reset border color & text in span element for email validation
    $("#bor_email").focus(function() {
      $("#bor_email").css({
        "border": ""
      });
      $("#span_email").text("");
    });
    // Reset border color & text in span element for message validation
    $("#bor_message").focus(function() {
      $("#bor_message").css({
        "border": ""
      });
      $("#span_message").text("");
    });

    // Submit form contact
    $("#contact").submit(function() {
      return false;
    });

    $("#submit_contact").on("click", function() {
      var formData = $("#contact :input").serializeArray();
      formData[formData.length] = {
        name: "action",
        value: "submit_contact"
      };
      formData.push({});
      $.ajax({
        type: "POST",
        url: $("#contact").attr("action"),
        data: formData,
        dataType: 'json',
        async: true,
        success: function(result) {
          // After receiving confirmation on submit Do STUFF HERE:
          if (result.validFormName == "empty") {
            $("#bor_name").css({
              "border": "5px solid red"
            });
            $("#span_name").text(" must only contain letters and whitespace ex.\"Paulo Sousa\"");
          }
          if (result.validFormEmail == "empty") {
            $("#bor_email").css({
              "border": "5px solid red"
            });
            $("#span_email").text(" enter a valid email address ex.\"paulo@brazil.com\"");
          }
          if (result.validFormMessage == "empty") {
            $("#bor_message").css({
              "border": "5px solid red"
            });
            $("#span_message").text(" type something, anything!");
          }
          if (result.validName == "no") {
            $("#bor_name").css({
              "border": "5px solid red"
            });
            $("#span_name").text(" must only contain letters and whitespace ex.\"Paulo Sousa\"");
          }
          if (result.validEmail == "email0") {
            $("#bor_email").css({
              "border": "5px solid red"
            });
            $("#span_email").text(" enter a valid email address ex.\"paulo@brazil.com\"");
          }

          // If data is sent do stuff here
          if (result.result == 1) {

            Swal.fire({
              title: "Yay!",
              width: 400,
              heightAuto: false,
              padding: "0.15em",
              background: "#000000",
              icon: "success",
              text: "Your form has been submitted, thanks!",
              footer: "<a href>Home</a>",
              allowOutsideClick: false,
              customClass: {
                footer: 'sweet-footer',
              }
            });
            $("#contact")[0].reset();
          }
          if (result.result == 2) {

            Swal.fire({
              icon: 'error',
              title: 'Hmmm...',
              text: 'Something went wrong, Try again!',
              footer: '<a href><strong>Home</strong></a>'
            });
          }
        } //ajax, success function//
      }); //ajax//
    }); //submit on.click fuction//

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

    //POP UP
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
  </script>




  <div id="footerdiv">
    <footer id="footer">
      <ul class="copyright">
        <p>&copy;2020 - BrazilianBloopers</p>
      </ul>
    </footer>
  </div>



</body>

</html>