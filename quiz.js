
$("#a_quiz").on("click", function() {


let score = 0;
// Reset border color & text in span element for question1 validation
$("input[class='rads']").click(function() {
  $("input[class='rads']").focus();
   $(".bor_news").css({
    "border": ""
  });
  $(".span_news").text("");

});

$('.next').click(function() {
  classNumRow = $(this).attr('id');
  classNumSplit = classNumRow.split('_');
  classNum = classNumSplit[1];

  showTabs(classNum);
});

$('#next_1').on("click", function(){

  if (!$("input[name='news']:checked").val()) {

  $('.bor_news').css({"border-bottom": "5px solid red",
    "padding": "6px"
  });
  $(".span_news").text(" * ");


  } else if ($("input[name='news']:checked").val() == "corr_it") {

    score ++;
    console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
    $('.popup-inner').scrollTop(0);

  } else {
   console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
    $('.popup-inner').scrollTop(0);
      }
   });

   $('#next_2').on("click", function(){
    if (!$("input[name='weather']:checked").val()) {

    $('.bor_news').css({
      "border-bottom": "5px solid red",
      "padding": "6px"
    });
    $(".span_news").text(" * ");

  } else if ($("input[name='weather']:checked").val() == "corr_it") {
    score ++;
    console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
  } else {

   console.log(score);
   $('#' + classNum).hide();
   $('#' + numNext).show();
    }
   });

  $('#next_3').on("click", function(){
    if (!$("input[name='dist']:checked").val()) {

    } else if ($("input[name='dist']:checked").val() == "corr_it") {
      score ++;
      console.log(score);

  function hideLast() {

      $('#sub_quiz').show();
      $('#inst_h3').html("Thanks for doing the test!");
      $("#instr, #3").hide();
    }
    hideLast();

    } else {

      console.log(score);

      $('#sub_quiz').show();
      $('#inst_h3').html("Thanks for doing the test!");
      $("#instr, #3").hide();

        }

       $("#quiz_form").submit(function() {
          event.preventDefault();
           });

        $('#sub_quiz').on("click", function() {
          var formData = $("#quiz_form :input").serializeArray();
          formData[formData.length] = {
            name: "action",
            value: "sub_quiz"
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
                $('#a_quiz').off('click');
              }

              if (result.result == 2) {
                alert('oh, no');
              }

            } //ajax, success function 2//
          }); //ajax 2//
        }); //submit on.click function 2//

   }); // #next_3 button

   $('.back').click(function() {
    classNumRow = $(this).attr('id');
    classNumSplit = classNumRow.split('_');
    classNum = classNumSplit[1];

    backTabs(classNum);

  });


   $('#back_2').on("click", function(){

      $(".bor_news").css({"border": ""});
      $(".span_news").text("");

    if ($("input[name='news']:checked").val() == "corr_it") {
      score --;
    }
    console.log(score);

   });

   $('#back_3').on("click", function(){
    if ($("input[name='weather']:checked").val() == "corr_it") {
      score --;
    }
  console.log(score);

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