
$("#start_quiz").on("click", function() {


let score = 0;
//const scoreBoard = document.querySelector('.score');
// Reset border color & text in span element
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


  } else if ($("input[name='sub_it']:checked").val() == "corr") {
    //scoreBoard.textContent = 0;
    score ++;
    console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
    //scoreBoard.textContent = score;
    $(".score").text(score);








  } else {
   console.log(score);
    $('#' + classNum).hide();
    $('#' + numNext).show();
   // scoreBoard.textContent = score;
   $(".score").text(score);

      }



   });

  //  $('#next_2').on("click", function(){
  //   if (!$("input[name='too']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='too']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();

  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });





  //  $('#next_3').on("click", function(){
  //   if (!$("input[name='much']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='much']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });

  //  $('#next_4').on("click", function(){
  //   if (!$("input[name='exist']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='exist']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });

  //  $('#next_5').on("click", function(){
  //   if (!$("input[name='two_sub']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='two_sub']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });

  //  $('#next_6').on("click", function(){
  //   if (!$("input[name='no_obj']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='no_obj']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });

  //  $('#next_7').on("click", function(){
  //   if (!$("input[name='for']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='for']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_8').on("click", function(){
  //   if (!$("input[name='h_age']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='h_age']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_9').on("click", function(){
  //   if (!$("input[name='guy']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='guy']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_10').on("click", function(){
  //   if (!$("input[name='car']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='car']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_11').on("click", function(){
  //   if (!$("input[name='lose']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='lose']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_12').on("click", function(){
  //   if (!$("input[name='diss']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='diss']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_13').on("click", function(){
  //   if (!$("input[name='doubt']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='doubt']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_14').on("click", function(){
  //   if (!$("input[name='know']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='know']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_15').on("click", function(){
  //   if (!$("input[name='god']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='god']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_16').on("click", function(){
  //   if (!$("input[name='pref']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='pref']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_17').on("click", function(){
  //   if (!$("input[name='impress']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='impress']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_18').on("click", function(){
  //   if (!$("input[name='parent']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='parent']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_19').on("click", function(){
  //   if (!$("input[name='gout']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='gout']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_20').on("click", function(){
  //   if (!$("input[name='use']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='use']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_21').on("click", function(){
  //   if (!$("input[name='durat']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='durat']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_22').on("click", function(){
  //   if (!$("input[name='stay']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='stay']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_23').on("click", function(){
  //   if (!$("input[name='with']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='with']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_24').on("click", function(){
  //   if (!$("input[name='chap']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='chap']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_25').on("click", function(){
  //   if (!$("input[name='notes']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='notes']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_26').on("click", function(){
  //   if (!$("input[name='music']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='music']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_27').on("click", function(){
  //   if (!$("input[name='every']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='every']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_28').on("click", function(){
  //   if (!$("input[name='sym']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='sym']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });
  //  $('#next_29').on("click", function(){
  //   if (!$("input[name='support']:checked").val()) {

  //   $('.bor_choose').css({
  //     "border-bottom": "5px solid red",
  //     "padding": "12px"
  //   });
  //   $(".span_choose").text(" * ");

  // } else if ($("input[name='support']:checked").val() == "corr") {
  //   score ++;
  //   console.log(score);
  //   $('#' + classNum).hide();
  //   $('#' + numNext).show();
  //
  // } else {

  //  console.log(score);
  //  $('#' + classNum).hide();
  //  $('#' + numNext).show();
  //  $('#inner_2').scrollTop(0);
  //   }
  //  });

// LAST QUESTION //
  // $('#next_2').on("click", function(){

    // $("#sub_quiz").show();
    // $("#next_2").html("submit");



       $("#quiz_form").submit(function() {
        return false;
           });
        $("#next_2").text("Submit");
        $("#back_2").css({"right": "140px"});

        $('#next_2').on("click", function() {

          if (!$("input[name='uniq']:checked").val()) {
            $('.bor_choose').css({
              "border-bottom": "5px solid red",
              "padding": "12px"
            });
            $(".span_choose").text(" * ");
            return false;

          } else if ($("input[name='uniq']:checked").val() == "corr") {
            score ++;
            console.log(score);
           // scoreBoard.textContent = score;
           $(".score").text(score);



        //  $("#instr, #back_2").hide();




          } else {

            console.log(score);
            $(".score").text(score);

         //   $("#instr, #back_2").hide();


          }


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

                $("#instr, #2").hide();

               $(".scoreMsg").show();
               $(".score").show();

               $("#results").show();
               console.log(formData);

               $(document).ready(function(){
                // let quizList = $(".questions");
                 let currentQuiz = $("#1").children();
                // let i = 0;
                 console.log(currentQuiz);
                 //$("input[class='rads']").css({"display": "none"});

                if ($("input[class='rads']:checked").val() === "corr") {
                  $("#i1, #i3").attr("disabled", true);
                  $("#i1, #i3").change(function() {
                    $("#i1, #i3").css({"background-color" : "black"});
                  });

                 }
                // if ($("input[class='rads']:checked").val() === "err_2") {
                //   $(".rads").attr("disabled", true);

                // }
                // if ($("input[class='rads']:checked").val() === "err_ok") {
                //   $(".rads").attr("disabled", true);

                // }



                //  for (i=o; i < quizList.length; i++) {
                //    if (!$("input[class='rads']:checked").val() == "corr") {


                //    }
                //  }


                  $("#results").append(currentQuiz)


              });











                // $('.popup').hide();
                // $('#start_quiz').off('click');
              }

              if (result.result == 2) {
                alert('oh, no! Something went wrong, Try again');
              }

            } //ajax, success function 2//
          }); //ajax 2//
        }); //submit on.click function 2//

  // }); // #next_30 button

   $('.back').click(function() {
    classNumRow = $(this).attr('id');
    classNumSplit = classNumRow.split('_');
    classNum = classNumSplit[1];

    backTabs(classNum);

    $(".bor_choose").css({"border": ""});
    $(".span_choose").text("");
    if ($("input[class='rads']:checked").val() == "corr") {
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
  $(this).css("background", "#55c50b");
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
    $(this).css({"background": "#55c50b"});
    }, function(){
    $(this).css({"background": ""});
  });
  $(".back").hover(function(){
    $(this).css({"background": "#55c50b"});
    }, function(){
    $(this).css({"background": ""});
  });
  $(".hvr-grow").hover(function(){
    $(this).css({"background": "#55c50b"});
    }, function(){
    $(this).css({"background": ""});
  });

});