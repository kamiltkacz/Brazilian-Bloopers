





$("#a_quiz").on("click", function() {

let score = 0;
// Reset border color & text in span element for question1 validation
$("input[name='news']").click(function() {
  $("input[name='news']").focus();
   $("#bor_news").css({
    "border": ""
  });
  $("#span_news").text("");

});



$('.next').click(function() {
  classNumRow = $(this).attr('id');
  classNumSplit = classNumRow.split('_');
  classNum = classNumSplit[1];

  showTabs(classNum);
});

$('#next_1').on("click", function(){

  if (!$("input[name='news']:checked").val()) {
   // alert('Nothing is checked!');
   $('#bor_news').css({
    "border-bottom": "5px solid red",
    "padding": "6px"
  });
  $("#span_news").text(" * ");


  } else if ($("input[name='news']:checked").val() == "corr_it") {


  alert('Correcto mundo');
    score ++;
    console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();

  } else {


   alert('One of the radio buttons is checked!');
   console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
      }
   });

   $('#next_2').on("click", function(){
    if (!$("input[name='weather']:checked").val()) {
    // alert('Nothing is checked 2!');

  } else if ($("input[name='weather']:checked").val() == "corr_it") {
    alert('Correcto mundo 2');
    score ++;
    console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
  } else {
   alert('One of the radio buttons is checked 2!');
   console.log(score);
   $('#' + classNum).hide();
   $('#' + numNext).show();
    }
   });

  $('#next_3').on("click", function(){
    if (!$("input[name='dist']:checked").val()) {

   // alert('Nothing is checked 3!');

    } else if ($("input[name='dist']:checked").val() == "corr_it") {
      score ++;
      console.log(score);

  function hideLast() {

      $('#backHome-1').replaceWith("<input type='submit' id='sub'>");
      $('#inst_h3').html("Thanks for doing the test!");
      $("#instr, #3").hide();
    }
    hideLast();



    } else {

      alert('One of the radio buttons is checked 3!');
      console.log(score);

      $('#backHome-1').replaceWith("<input type='submit' id='sub'>");
      $('#inst_h3').html("Thanks for doing the test!");
      $("#instr, #3").hide();

        }

       $("#quiz_form").submit(function() {
          event.preventDefault();
           });

        $('#sub').on("click", function() {
          var formData = $("#quiz_form :input").serializeArray();
          formData[formData.length] = {
            name: "action",
            value: "sub"
          };
          formData.push({});
          console.log('dataQuiz');

          $.ajax({
            type: "POST",
            url: $("#quiz_form").attr("action"),
            data: formData,
            dataType: 'json',
            async: true,

            success: function(result) {


              if (result.result == 1) {

                alert('your quiz was submitted');

                $('.popup').hide();
              }

              if (result.result == 2) {
                alert('oh, no');
              }

            } //ajax, success function 2//
          }); //ajax 2//
        }); //submit on.click function 2//

   }); // #next_3




   $('#back_2').on("click", function(){

    if ($("input[name='news']:checked").val() == "corr_it") {
      score --;
    }
    console.log('Here 1 score');
    console.log(score);

   });

   $('#back_3').on("click", function(){
    if ($("input[name='weather']:checked").val() == "corr_it") {
      score --;
    }

   console.log('Here 2 score');
   console.log(score);

   });

$('.back').click(function() {
  classNumRow = $(this).attr('id');
  classNumSplit = classNumRow.split('_');
  classNum = classNumSplit[1];


  backTabs(classNum);

});


function showTabs(classNum) {
  numNext = parseInt(classNum) + 1;
  event.preventDefault();

}

function backTabs(classNum) {
  numBack = parseInt(classNum) - 1;
  event.preventDefault();
  $('#' + classNum).hide();
  $('#' + numBack).show();

}

});// (a_quiz) button


/* Mousemove function for the instructions*/

$(function() {
let moveLeft = 20;
let moveDown = 10;

$('#instr').hover(function(e) {
  $('#inst_hov').show('slow');

}, function() {
  $('#inst_hov').hide('slow');
});

$('#instr').mousemove(function(e) {
  $('#inst_hov').css('top', e.pageY + moveDown).css('left', e.pageX + moveLeft);
});

});