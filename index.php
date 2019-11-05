<!DOCTYPE html>

<?php
require_once('./dbconn.php');	

?>


<html lang="en-US">
<head>
<title>brazilianbloopers</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no"/>
          
          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
           <link href="https://fonts.googleapis.com/css?family=Bangers"
      rel="stylesheet"/>
          <link rel="stylesheet" href="styles.css" />
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
      integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
         
           
           <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
		<!--<script defer src=".test/js/all.min.js"></script> <!--load all styles -->
		   <script src="https://unpkg.com/babel-polyfill@6.2.0/dist/polyfill.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.standalone.js"></script>

     <script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
     <!-- <script type="text/javascript" src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.min.js"></script> -->
     <script type="text/javascript" src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  
      <script src="https://cdnjs.cloudflare.com/ajax/libs/rome/2.1.22/rome.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.17.1/moment.js"></script>
     <script src="https://code.jquery.com/jquery-2.2.4.js" integrity="sha256-iT6Q9iMJYuQiMWNd9lDyBUStIq/8PuOW33aOqmvFpqI=" crossorigin="anonymous"></script>
     <!--<script src="//code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script> -->
     <script src="//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
     <script src="//stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
     <!--<script src="//code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script> -->
      
     
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <!--[if IE]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
         <![endif]-->
 
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
     <!--<script src="https://code.jquery.com/jquery-1.12.4.js"></script> -->
     <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
      

     <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">
     
 
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-scrollTo/2.1.2/jquery.scrollTo.min.js"></script>

  </head>
	<style>
     
     @media (min-width: 1030px){
       .tablink {
       font-size:30px;
       overflow: hidden;
       white-space: nowrap; 
      }
     
     
  }
 
     /* Mobile screen */
     @media (max-width: 1030px){ 
       .tablink {
        font-size:15px;
        overflow: hidden;                  
        white-space: nowrap;       
      }
   
 }    
                    
  </style>                 
	
	
  <body>
    <button class="tablink" onclick="openPage('Home', this ,'green')"id="defaultOpen">
      Home
    </button>
    <button class="tablink" onclick="openPage('About', this, 'green')">
      About
    </button>
    <button class="tablink" onclick="openPage('The Test', this, 'green')">
      The Test
    </button>
    <button class="tablink" onclick="openPage('Contact Us', this, 'green')">
      Contact Us
    </button>

    <div id="Home" class="tabcontent">
      <h1>Welcome to Brazilian Bloopers.</h1> <br />
        <p>Here you learn how to sound less Brazilian when you speak English.</p>
    </div>
    <div id="About" class="tabcontent">
        <p>Who we are and what we do</p>
    </div>
    <div id="The Test" class="tabcontent">
      <p>Here you get to test your level</p>
    </div>
    <div id="Contact Us" class="tabcontent">



      <div class="container">
        <div style="text-align:center">
          <h3>Shoot us an e-mail directly at</h3>
          <h4>hello@brazilianbloopers.com</h4>
          <h4>or</h4>
      </div>
        <div class="row">
          <div class="column">
        </div>
          <div class="column">
         
         
            <form id="contact" method="post" action="actions.php">
   
              <label for="name">Name*<span id="nameSpan"></span></label>
              <input type="text" id="yname" name="name" placeholder="Your name..">
              <label for="email">E-mail*<span id="emailSpan"></span></label>
              <input type="text" id="yemail" name="email" placeholder="Your e-mail..">
              <label for="subject">Subject</label>
              <input type="text" id="ysubject" name="subject" placeholder="e.g.,suggestion for a blooper, comment, etc...">
              <label for="message">Message*<span id="messageSpan"></span></label>
              <textarea id="ymessage" name="message" placeholder="Write your message here, we like!.." style="height:170px"></textarea>
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
       $("#ymessage").css({"border": ""});
       $("#messageSpan").text("");
          });
      
        
        
        $('#contact').submit(function(){
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
      success: function(result) {
       
  // After recieving confirmation on submit Do STUFF HERE:
   
    if(result.validFormName == "empty"){
      $("#yname").css({"border":"5px solid red"});
      $("#nameSpan").text(" must only contain letters and whitespace, ex.\"Paulo Sousa\"");
  }

    if(result.validFormEmail == "empty"){
      $("#yemail").css({"border": "5px solid red"});
      $("#emailSpan").text("enter a valid email address, ex.\"paulo@brazil.com\"");

  }
    if(result.validFormMessage == "empty"){
      $("#ymessage").css({"border": "5px solid red"});
      $("#messageSpan").text("type something, anything!");

  }
    if(result.validName == "no"){
      $("#yname").css({"border": "5px solid red"});
      $("#nameSpan").text("must only contain letters and whitespace, ex.\"Paulo Sousa\"");

 }
    if(result.validEmail == "email0"){
      $("#yemail").css({"border": "5px solid red"});
      $("#emailSpan").text("enter a valid email address, ex.\"paulo@brazil.com\"");
}


 
// If all is good do stuff
      if(result.result == 1) {
        alert("Your form has been submitted");
          
       }

      if(result.result == 2) {
        alert("Something went wrong, try again");
            
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
    </script>   
     
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
      </script>    
       
     
   
</body>
</html>            
                


  
  
   
   
  
  
 

 
 
 
 

 
 
 
    
	
 
 
             
	
	
         
         

       
   
           
               
        
   
  
             
       
           
       
       
          
       
        
                    
           
       
                
      
   
     
     

      
         
      
        
          
      
    
            
       
        
           
      
        
          
        

          
        
     
       
   
            
        
       
       
          

       
     
       
          
       
        
       
        
      
        
      
 

  

   
    
    	
   


           
           
           
           
  
