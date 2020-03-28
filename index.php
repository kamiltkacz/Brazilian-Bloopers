<?php
require_once('./dbconn.php');
?>

<!DOCTYPE html>
<html lang="en-US">

<head>
  <title>brazilianbloopers</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">


  <link href="https://fonts.googleapis.com/css?family=Bangers" rel="stylesheet">
  <link rel="stylesheet" href="styles.css">
  <!--Bangers Font-->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
    integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

  <!--SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="sweetalert2.all.min.js"></script>
     <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
  <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
  <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/babel-polyfill@6.2.0/dist/polyfill.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.standalone.js"></script>
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
  <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
  <script src="https://code.jquery.com/jquery-2.2.4.min.js"
    integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>

  <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
    integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
  </script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!--Datatable link -->
  <script type="text/javascript" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.flash.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.html5.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
  <script type="text/javascript" src="https://cdn.datatables.net/select/1.2.7/js/dataTables.select.min.js"></script>
  <!-- Draggeble effect -->
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>

</head>

<body>

  <button class="tablink" onclick="openPage('Home', this)"; id="defaultOpen">
    <a href="#" class="active">Home</a>
  </button>
  <button class="tablink" onclick="openPage('About', this);">
    <a href="#" class="active">About Us</a>
  </button>
  <button class="tablink" onclick="openPage('The Test', this);">
    <a href="#" class="active">Test</a>
  </button>
  <button class="tablink" onclick="openPage('Contact Us', this);">
    <a href="#" class="active">Contact Us</a>
  </button>

  <div id="Home" class="tabcontent">
    <h1>Hello, Welcome to Brazilian Bloopers.</h1><br>
    <p>Here we tell you what gives you away as Brazilian!</p>
  </div>

  <div id="About" class="tabcontent">
    <p>Coming Soon</p>
  </div>

  <div id="The Test" class="tabcontent">
    <h1>Before You get to test your level, here's a short&nbsp;<a class="btn" data-popup-open="popup-1" href="#"><span
          id="surveyname">survey</span></a></h1>

    <form id="survey" method="post" action="actions.php">
      <div id="survey-close-button" class="popup" data-popup="popup-1">

        <div class="popup-inner">

       <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
          <div id="question1">
            <p id="bor_gender"><label for="gender">1) What gender are you?<span id="span_gender"></span></label></p>
              <input type="radio" class="radios" name="gender" value="male">Male<br>
              <input type="radio" class="radios" name="gender" value="female">Female<br>
              <input type="radio" class="radios" name="gender" value="other">Other
          </div>

        <div id="question2">
            <p id="bor_age"><label>2) How old are you?<span id="span_age"></span></label></p>
              <select id="age" name="ageselect">
                <option value="0">Please select</option>
              </select>
          </div>


          <div id="question3">
            <p id="bor_years"><label>3) English student for:<span id="span_years"></span></label></p>
              <input type="radio" class="radios" name="years" value="0-2">0-2years<br>
              <input type="radio" class="radios" name="years" value="2-5">2-5years<br>
              <input type="radio" class="radios" name="years" value="5-10">5-10years<br>
              <input type="radio" class="radios" name="years" value="allmylife">all my life<br>
              <input type="radio" class="radios" name="years" value="never studied">never studied
          </div>

          <div id="question4">
            <p id="bor_abroad"><label>4) Experience with English abroad<span id="span_abroad"></span></label></p>
              <input type="radio" class="radios" name="abroad" value="less than a year">less than a year<br>
              <input type="radio" class="radios" name="abroad" value="1-3 years">1-3 years<br>
              <input type="radio" class="radios" name="abroad" value="3-6 years">3-6 years<br>
              <input type="radio" class="radios" name="abroad" value="6-10 years">6-10 years<br>
              <input type="radio" class="radios" name="abroad" value="all my life">all my life<br>
              <input type="radio" class="radios" name="abroad" value="never lived abroad">never lived abroad
          </div>

         <div id="question5">
           <p id="bor_way"><label>5) How do you learn English?<i>Choose all that apply</i><span id="span_way"><br></span></label></p>
            <input type="checkbox" class="check" name="way[]" value="inperson">in-person course<br>
            <input type="checkbox" class="check" name="way[]" value="privateteacher">private teacher<br>
            <input type="checkbox" class="check" name="way[]" value="selflearner">self-learner<br>
            <input type="checkbox" class="check" name="way[]" value="onlinecourse">online course<br>
            <input type="checkbox" class="check" name="way[]" value="onlineteacher">onlineteacher<br>
            <input type="checkbox" class="check" name="way[]" value="videogames">video games<br>
            <input type="checkbox" class="check" name="way[]" value="other">other

         </div>

          <div id="question6">
            <p id="bor_others"><label>6) How many foreign languages do you speak?<span id="span_others"></span></label></p>
              <input type="radio" class="radios" name="others" value="one">One<br>
              <input type="radio" class="radios" name="others" value="two">Two<br>
              <input type="radio" class="radios" name="others" value="three">I'm a polyglot

          </div>

          <div id="question7">
            <p id="bor_country"><label>7) Where do you live?<span id="span_country"></span></label></p>
              <input type="radio" class="radios" name="country" value="Brazil">Brazil<br>
              <input type="radio" class="radios" name="country" value="Abroad">Abroad
          </div>
      <button id="submit_survey" type="submit" name="submitsurvey">Submit</button>
     <!-- <p></p>-->
        </div>

      </div>
    </form>
  </div>

  <script>
   // Age Select Menu
   var selectElement = document.getElementById("age");
    if (selectElement !== undefined) {
      for (var agenum = 1; agenum <= 100; agenum++) {
        selectElement.add(new Option(agenum));
      }
    }

   /*  // Reset border color & text in span element for name validation
    $("#ygender").focus(function(){
    $("#ygender").css({"border":""});
    $("#genderSpan").text("");
    });
   */
   // Survey Data - on(click)
   $("#survey").submit(function(){
        return false;
    });

   $("#submit_survey").on("click", function(){

       var formData = $("#survey :input").serializeArray();

          formData[formData.length] = { name: "action", value: "submit_survey"};
          formData.push({});
          $.ajax({
          type: "POST",
          url: $("#survey").attr("action"),
          data: formData,
          dataType: 'json',
          async: true,
          success: function(result){


            if(result.genderErr == "empty"){
            $("#bor_gender").css({"border":"5px solid red"});
            $("#span_gender").text("Must check something");

           }

            if(result.ageErr == "empty"){
            $("#bor_age").css({"border":"5px solid red"});
            $("#span_age").text("Must check something");

           }

            if(result.yearsErr == "empty"){
            $("#bor_years").css({"border":"5px solid red"});
            $("#span_years").text("Must check something");

           }
            if(result.abroadErr == "empty"){
            $("#bor_abroad").css({"border":"5px solid red"});
            $("#span_abroad").text("Must check something");

           }
            if(result.wayErr == "empty"){
            $("#bor_way").css({"border":"5px solid red"});
            $("#span_way").text("Must check something");

           }

           if(result.othersErr == "empty"){
            $("#bor_others").css({"border":"5px solid red"});
            $("#span_others").text("Must check something");

           }
            if(result.countryErr == "empty"){
            $("#bor_country").css({"border":"5px solid red"});
            $("#span_country").text("Must check something");

           }


      // After data submitted do stuff here

          if (result.result == 1) {
            //alert("Your survey has been submitted, thank you");
            Swal.fire({
              title: "Yay!",
              width: 400,
              heightAuto: false,
              padding: "0.15em",
              background: "#000000",
              icon: "success",
              text: "Your survey has been submitted, thanks!",
              footer: "<a href>Home</a>",
              allowOutsideClick: false,
              customClass: {
              footer: 'sweet-footer',
              }
              });
              $("#survey").slideUp();
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
            <input type="text" id="bor_subject" name="subject"
              placeholder="e.g.,suggestion for a blooper, comment, etc...">
            <label for="message">Message*<span id="span_message"></span></label>
            <textarea id="bor_message" name="message" placeholder="Write your message here!"
              style="height:170px"></textarea>
            <button id="submit_contact" type="submit" name="submitcontact">Submit</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <script>
    // Reset border color & text in span element for name validation
    $("#bor_name").focus(function(){
    $("#bor_name").css({"border":""});
    $("#span_name").text("");
    });
    // Reset border color & text in span element for email validation
    $("#bor_email").focus(function(){
    $("#bor_email").css({"border":""});
    $("#span_email").text("");
    });
    // Reset border color & text in span element for message validation
    $("#bor_message").focus(function(){
    $("#bor_message").css({"border":""});
    $("#span_message").text("");
    });

     // Submit form contact
    $("#contact").submit(function(){
      return false;
    });

    $("#submit_contact").on("click", function(){
      var formData = $("#contact :input").serializeArray();
      formData[formData.length] = { name: "action", value: "submit_contact"};
      formData.push({});
      $.ajax({
        type: "POST",
        url: $("#contact").attr("action"),
        data: formData,
        dataType: 'json',
        async: true,
        success: function(result) {
          // After receiving confirmation on submit Do STUFF HERE:
           if(result.validFormName == "empty"){
            $("#bor_name").css({"border":"5px solid red"});
            $("#span_name").text(" must only contain letters and whitespace ex.\"Paulo Sousa\"");
           }
           if (result.validFormEmail == "empty"){
            $("#bor_email").css({"border": "5px solid red"});
            $("#span_email").text("enter a valid email address ex.\"paulo@brazil.com\"");
           }
           if (result.validFormMessage == "empty") {
            $("#bor_message").css({"border": "5px solid red"});
            $("#span_message").text("type something, anything!");
           }
           if (result.validName == "no") {
            $("#bor_name").css({"border": "5px solid red"});
            $("#span_name").text("must only contain letters and whitespace ex.\"Paulo Sousa\"");
           }
           if (result.validEmail == "email0") {
            $("#bor_email").css({"border": "5px solid red"});
            $("#span_email").text("enter a valid email address ex.\"paulo@brazil.com\"");
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
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
        e.preventDefault();
      });
      //----- CLOSE
      $('[data-popup-close]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
        e.preventDefault();
      });
    });
  </script>
<div id="footer">
  <footer id="footer">
    <ul class="copyright">
    <li>@ 2020 - BrazilianBloopers</li>
  </ul>

  </footer>


</div>


</body>

</html>
