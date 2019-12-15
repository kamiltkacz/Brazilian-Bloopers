
     <!DOCTYPE html>

<?php
require_once('./dbconn.php');
?>

<html lang="en-US">
 <head>
 <title>brazilianbloopers</title>
 <meta charset="utf-8"/>
 <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
      <link href="https://fonts.googleapis.com/css?family=Bangers"
       rel="stylesheet"/>
      <link rel="stylesheet" href="styles.css" />
      <!--Bangers Font-->
      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
       integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
       <!--MyJavascript-->
       <!--<script src="surveyscript.js"></script>-->
      <!--SweetAlert2 -->
      <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
      <script src="sweetalert2.all.min.js"></script>
      <!-- Optional: include a polyfill for ES6 Promises for IE11 -->
      <script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <script src="https://unpkg.com/babel-polyfill@6.2.0/dist/polyfill.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.standalone.js"></script>
      <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
      <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
      <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
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

      <button class="tablink" onclick="openPage('Home', this);"id="defaultOpen">
       <a href="#" class="active">Home</a>
      </button>
      <button class="tablink" onclick="openPage('About', this);">
       <a href="#" class="active">About</a>
      </button>
      <button class="tablink" onclick="openPage('The Test', this);">
       <a href="#" class="active">The Test</a>
      </button>
      <button class="tablink" onclick="openPage('Contact Us', this);">
       <a href="#" class="active">Contact Us</a>
      </button>

      <div id="Home" class="tabcontent">
       <h1>Welcome to Brazilian Bloopers.</h1><br/>
        <p>Here you learn how to sound less Brazilian when you speak English</p>
      </div>

      <div id="About" class="tabcontent">
       <p>Who we are and what we do</p>
      </div>

     <div id="The Test" class="tabcontent">
       <h1>Before You get to test your level, here's a short&nbsp;<a class="btn" data-popup-open="popup-1" href="#"><span id="surveyname">survey</span></a></h1>




      <div class="popup" data-popup="popup-1">
        <div class="popup-inner">




<form id="survey" method="post" action="actions.php">

         <div class="tab" ><p>1)What gender are you?</p>
          <br>

           <input type="radio" class="radios" name="" value="none" style="display:none;" checked/>
           <input type="radio" class="radios" name="gender" value="male" onclick="this.className = ''" required/>Male<br>
           <input type="radio" class="radios" name="gender" value="female" onclick="this.className = ''"/>Female<br>
           <input type="radio" class="radios" name="gender" value="other" onclick="this.className = ''"/>Other<br>

           <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
         <!--  <button id="submit_survey" name="submit">Next</button>-->
        <!--     </form>-->
         </div>



         <div class="tab"><p>2)How old are you?</p>
          <br><br>
        <!--  <form id="survey" method="post" action="actions.php">-->
         <select id="ageselect"><option value="">Please select</option></select>
        <!-- <button id="submit_survey" name="submit">Next</button>-->



         <!--  <a class="popup-close" data-popup-close="popup-1" href="#">x</a>-->
         <!--     </form>-->
         </div>


           <div class="tab"><p>3)English student for:</p><br><br>
         <!--   <form id="survey" method="post" action="actions.php">-->
            <input type="radio" class="radios" name="years" value="0-2" required/>0-2years<br>
            <input type="radio" class="radios" name="years" value="2-5"/>2-5years<br>
            <input type="radio" class="radios" name="years" value="5-10"/>5-10years<br>
            <input type="radio" class="radios" name="years" value="allmylife"/>all my life<br>
            <input type="radio" class="radios" name="years" value="never studied"/>never studied<br>

          <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
         <!-- <button id="submit_survey" name="submit">Next</button>-->
         <!--   </form>-->
         </div>





            <div class="tab"><p>4)Experience with English abroad</p>
            <!--   <form id="survey" method="post" action="actions.php">-->
              <input type="radio" class="radios" name="abroad" value="less than a year"/>less than a year<br>
              <input type="radio" class="radios" name="abroad" value="1-3 years"/>1-3 years<br>
              <input type="radio" class="radios" name="abroad" value="3-6 years"/>3-6 years<br>
              <input type="radio" class="radios" name="abroad" value="6-10 years"/>6-10 years<br>
              <input type="radio" class="radios" name="abroad" value="all my life"/>all my life<br>
              <input type="radio" class="radios" name="abroad" value="never lived abroad"/>never lived abroad<br>
          <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
        <!--  <button id="submit_survey" name="submit">Next</button>-->
          <!--    </form>-->
            </div>

           <div class="tab"><p>5)How do you learn English? Choose all that apply</p>
           <!-- <form id="survey" method="post" action="actions.php">-->
             <input type="radio" class="radios" name="way" value="in-person"/>in-person course<br>
             <input type="radio" class="radios" name="way" value="private teacher"/>private teacher<br>
             <input type="radio" class="radios" name="way" value="self-learner"/>self-learner<br>
             <input type="radio" class="radios" name="way" value="online course"/>online course<br>
             <input type="radio" class="radios" name="way" value="online teacher"/>online teacher<br>
             <input type="radio" class="radios" name="way" value="video games"/>video games<br>
             <input type="radio" class="radios" name="way" value="other"/>other<br>

          <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
         <!-- <button id="submit_survey" name="submit">Next</button>-->
         <!-- </form>-->
        </div>

           <div class="tab"><p>6)How many foreign languages do you speak?</p>
           <!-- <form id="survey" method="post" action="actions.php">-->
             <input type="radio" class="radios" name="other" value="one"/>One<br>
             <input type="radio" class="radios" name="other" value="two"/>Two<br>
             <input type="radio" class="radios" name="other" value="I'm a polyglot">I'm a polyglot<br>

          <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
         <!-- <button id="submit_survey" name="submit">Next</button>-->
         <!--   </form>-->
          </div>

          <div class="tab"><p>7)Where do you live?</p>
          <!--<form id="survey" method="post" action="actions.php">-->
            <input type="radio" class="radios" name="country" value="Brazil"/>Brazil<br>
            <input type="radio" class="radios" name="country" value="Abroad"/>Abroad<br>

          <a class="popup-close" data-popup-close="popup-1" href="#">x</a>
          <!--<button id="submit_survey" name="submit">Next</button>-->
<!--</form>-->

           </div>
           <div style="block;">
  <div style="none;">
    <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
</div>

<!-- Circles which indicates the steps of the form: -->
<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
  <span class="step"></span>
</div>
 </form>
           </div>
      </div>
    </div>
    <script>


// Select Age, How old are you//
let selectElement = document.getElementById("ageselect");
if (selectElement !== undefined) {
for (let age = 0; age <= 100; age++) {
  selectElement.add(new Option(age));
}
}
let currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  let x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  let x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("survey").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

 function validateForm() {
        var gens = document.getElementsByName('gender');

        var validForm = false;


     for  (var i = 0; i < gens.length; i++){
        if (gens[i].checked == true) {
          validForm = true;
           alert('you chose'+ gens[i].value);
          }

    }

          if (!validForm) {
            alert('Must check something');
            return false;
      }


  var valid = true;
   //If the valid status is true, mark the step as finished and valid:
  if (valid) {

    valid = document.getElementsByClassName("step")[currentTab].className += " finish";


  }
return valid; // return the valid status
 }




function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  let i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}





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
          <label for="name">Name*<span id="nameSpan"></span></label>
           <input type="text" id="yname" name="name" placeholder="Your name.." font-family="cursive">
          <label for="email">E-mail*<span id="emailSpan"></span></label>
           <input type="text" id="yemail" name="email" placeholder="Your e-mail..">
          <label for="subject">Subject</label>
           <input type="text" id="ysubject" name="subject" placeholder="e.g.,suggestion for a blooper, comment, etc...">
          <label for="message">Message*<span id="messageSpan"></span></label>
           <textarea id="ymessage" name="message" placeholder="Write your message here!" style="height:170px"></textarea>
            <button id="submit_contact" name="submit">Submit</button>
         </form>
       </div>
       </div>
       </div>
       </div>

       <script>

       // Reset bordercolor & text in span element for name validation
       $("#yname").focus(function(){
       $("#yname").css({"border":""});
       $("#nameSpan").text("");
       });

       // Reset bordercolor & text in span element for email validation
       $("#yemail").focus(function(){
       $("#yemail").css({"border":""});
       $("#emailSpan").text("");
       });

       // Reset bordercolor & text in span element for message validation
       $("#ymessage").focus(function(){
       $("#ymessage").css({"border":""});
       $("#messageSpan").text("");
       });

       $("#contact").submit(function(){
       return false;
       });

       // Submit form contact
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
       success: function(result){

       // After recieving confirmation on submit Do STUFF HERE:
       if(result.validFormName == "empty"){
       $("#yname").css({"border":"5px solid red"});
       $("#nameSpan").text(" must only contain letters and whitespace ex.\"Paulo Sousa\"");
       }

       if(result.validFormEmail == "empty"){
       $("#yemail").css({"border": "5px solid red"});
       $("#emailSpan").text("enter a valid email address ex.\"paulo@brazil.com\"");
       }

       if(result.validFormMessage == "empty"){
       $("#ymessage").css({"border": "5px solid red"});
       $("#messageSpan").text("type something, anything!");
       }

       if(result.validName == "no"){
       $("#yname").css({"border": "5px solid red"});
       $("#nameSpan").text("must only contain letters and whitespace ex.\"Paulo Sousa\"");
       }

       if(result.validEmail == "email0"){
       $("#yemail").css({"border": "5px solid red"});
       $("#emailSpan").text("enter a valid email address ex.\"paulo@brazil.com\"");
       }

       // If all is good do stuff
       if(result.result == 1) {
       Swal.fire({
       title: "Yay!",
       width: 400,
       heightAuto: false,
       padding: "0.15em",
       background: "#000000",
       icon: "success",
       text: "Your form has been submitted, Thanks!",
       footer: "<a href>Home</a>",
       allowOutsideClick: false,
       customClass: {
       footer: 'sweet-footer',

       }
       });
       $("#contact")[0].reset();
       }

       if(result.result == 2) {
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

       $("#survey").submit(function(){
       return true;

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


alert("boo");


       // If all is good do stuff
      if(result.result == 1) {


        Swal.fire({
         title: "Yay!",
         width: 400,
         heightAuto: false,
         padding: "0.15em",
         background: "#000000",
         icon: "success",
         text: "Continue to next question",
         footer: "<a href>Home</a>",
         allowOutsideClick: false,
         customClass: {
          footer: 'sweet-footer',

           }
         });
          $("#survey")[0].reset();
        }

        if(result.result == 2) {
          Swal.fire({
            icon: 'error',
            title: 'Hmmm...',
            text: 'Something went wrong, Try again!',
            footer: '<a href><strong>Home</strong></a>'
         });
        }

       } // success ajax function
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

       $(function() {
       //----- OPEN
       $('[data-popup-open]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
         $('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

       event.preventDefault();
       });

       //----- CLOSE
       $('[data-popup-close]').on('click', function(e) {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        $('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

        event.preventDefault();
        });
        });

       </script>
       <footer>
       <p>&copy; 2019 - BrazilianBloopers</p>

       </footer>
       </body>
       </html>
    
     
       
       

         
      
       
   
        
                     
            
               
 

 
 

             
               
 

       
     
       
       
             
       
 
 
 
 
           
 
            

 
 
 
    
	
 
 
             
	
	


  

         
         

              
      
       
  
       
        
      
        
      
 
   
           
               
        
   
  
             
       
           
       
       
          
       
        
                    
           
       
                
      
   
     
     

      
         
      
        
          
      
    
            
       
        
           
      
        
          
        

          
        
     
       
   
            
        
       
       
          

       
     
       
          
       
        
       
        
      
        
      
 

  

   
    
    	
   


           
           
           
           
  
