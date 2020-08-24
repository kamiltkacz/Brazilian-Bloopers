
$("#start_quiz").on("click", function() {


let score = 0;
// Reset border color & text in span element for question1 validation
$("input[class='rads']").click(function() {
  $("input[class='rads']").focus();
   $(".bor_choose").css({
    "border": ""
  });
  $(".span_choose").text("");

});

$('.next').click(function() {
  classNumRow = $(this).attr('id');
  classNumSplit = classNumRow.split('_');
  classNum = classNumSplit[1];

  showTabs(classNum);
});

$('#next_1').on("click", function(){

  if (!$("input[name='sub_it']:checked").val()) {

  $('.bor_choose').css({"border-bottom": "5px solid red",
    "padding": "12px"
  });
  $(".span_choose").text(" * ");


  } else if ($("input[name='sub_it']:checked").val() == "corr_it") {

    score ++;
    console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
    $('#inner_2').scrollTop(0);

  } else {
   console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
    $('#inner_2').scrollTop(0);
      }
   });

   $('#next_2').on("click", function(){
    if (!$("input[name='too']:checked").val()) {

    $('.bor_choose').css({
      "border-bottom": "5px solid red",
      "padding": "12px"
    });
    $(".span_choose").text(" * ");

  } else if ($("input[name='too']:checked").val() == "corr_very") {
    score ++;
    console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
    $('#inner_2').scrollTop(0);
  } else {

   console.log(score);
   $('#' + classNum).hide();
   $('#' + numNext).show();
   $('#inner_2').scrollTop(0);
    }
   });





   $('#next_3').on("click", function(){
    if (!$("input[name='much']:checked").val()) {

    $('.bor_choose').css({
      "border-bottom": "5px solid red",
      "padding": "12px"
    });
    $(".span_choose").text(" * ");

  } else if ($("input[name='much']:checked").val() == "corr_lot") {
    score ++;
    console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
    $('#inner_2').scrollTop(0);
  } else {

   console.log(score);
   $('#' + classNum).hide();
   $('#' + numNext).show();
   $('#inner_2').scrollTop(0);
    }
   });












  $('#next_4').on("click", function(){
    if (!$("input[name='exist']:checked").val()) {
      $('.bor_choose').css({
        "border-bottom": "5px solid red",
        "padding": "12px"
      });
      $(".span_choose").text(" * ");

    } else if ($("input[name='exist']:checked").val() == "corr_exist") {
      score ++;
      console.log(score);

  function hideLast() {

      $('#sub_quiz').show();
      $('#inst_h3').html("Thanks for doing the test!<br>More questions coming soon");
      $("#instr, #4").hide();
    }
    hideLast();

    } else {

      console.log(score);

      $('#sub_quiz').show();
      $('#inst_h3').html("Thanks for doing the test!<br>More questions coming soon");
      $("#instr, #4").hide();
      $("#inner_2").css({"overflow-y": "hidden"});



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
                $('#start_quiz').off('click');
              }

              if (result.result == 2) {
                alert('oh, no');
              }

            } //ajax, success function 2//
          }); //ajax 2//
        }); //submit on.click function 2//

   }); // #next_4 button

   $('.back').click(function() {
    classNumRow = $(this).attr('id');
    classNumSplit = classNumRow.split('_');
    classNum = classNumSplit[1];

    backTabs(classNum);

  });


   $('#back_2').on("click", function(){

      $(".bor_choose").css({"border": ""});
      $(".span_choose").text("");

    if ($("input[name='sub_it']:checked").val() == "corr_it") {
      score --;
    }
    console.log(score);

   });

   $('#back_3').on("click", function(){
    if ($("input[name='too']:checked").val() == "corr_very") {
      score --;
    }
  console.log(score);

   });
   $('#back_4').on("click", function(){
    if ($("input[name='too']:checked").val() == "corr_lot") {
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

});// (start_quiz) button


/* Mousemove function for the instructions*/

$(function() {
let moveLeft = 10;
let moveUp = 75;

$('#instr').hover(function(e) {
  $(this).css("background", "#1b417b");
  $('#inst_hov').show('slow');

}, function() {
  $(this).css("background", "");
  $('#inst_hov').hide('slow');
});

$('#instr').mousemove(function(e) {
  $('#inst_hov').css('top', e.pageY - moveUp).css('left', e.pageX + moveLeft);
});

});

/*Hover function for '.next and .back' buttons*/
$(document).ready(function(){
  $(".next").hover(function(){
    $(this).css({"background": "#1b417b"});
    }, function(){
    $(this).css({"background": ""});
  });
  $(".back").hover(function(){
    $(this).css({"background": "#1b417b"});
    }, function(){
    $(this).css({"background": ""});
  });
  $(".hvr-grow").hover(function(){
    $(this).css({"background": "#1b417b"});
    }, function(){
    $(this).css({"background": ""});
  });

});