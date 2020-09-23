
$("#start_quiz").on("click", function() {


let score = 0;
//const scoreBoard = document.querySelector('.score');
// Reset border color & text in span element
$("input[name='sub_it]]").click(function() {
  $("input[name='sub_it]]").focus();
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
                 let currentQuiz = $(".questions").contents();
                // let i = 0;
                 console.log(currentQuiz);

                 if ($("input[id='i1']:checked").val()) {
                   console.log("err_ok checked")
                   $("#i2, #i3").hide();
                 }
                 if ($("input[id='i2']:checked").val()) {
                  console.log("corr checked")
                  $("#i1, #i3").hide();
                }
                if ($("input[id='i3']:checked").val()) {
                  console.log("err_2 checked")
                  $("#i1, #i2").hide();
                }



                if ($("input[id='unq1']:checked").val()) {
                  console.log("corr 2 checked")
                  $("#unq2, #unq3").hide();

                }
                if ($("input[id='unq2']:checked").val()) {
                 console.log(" err ok 2 checked")
                 $("#unq1, #unq3").hide();
               }
               if ($("input[id='unq3']:checked").val()) {
                 console.log("err_2 2 checked")
                 $("#unq1, #unq2").hide();
               }




                // if ($("input[name='sub_it']:checked").val() === "corr") {
                //   //$(this).attr("disabled", true);
                //   $( "input[value='err_ok']" ).next().css({"text-decoration":"line-through"});
                //   $( "input[value='err_2']" ).next().css( {"text-decoration":"line-through"});
                //   $('.d_corr').show().css({"display":"inline", "color": "green"});
                //   $(".rads").hide();
                //  // $("input[value='err_ok']").attr("disabled", true);
                //   // $("input[value='err_2']").attr("disabled", true);
                //   // $("input[value='corr']").attr("disabled", false);

                //   $(".rads").css({"cursor":"auto"}).next().css({"cursor":"auto"});
                //  // $(".rads").attr("disabled", true);
                // // $('.rads').off('click');
                // //$(".situation").append("<p>Don't forget it</p>");

                // }
                //  if ($("input[name='sub_it']:checked").val() === "err_ok") {
                //   $( "input[value='err_ok']" ).next().css({"text-decoration":"line-through"});
                //   $( "input[value='err_2']" ).next().css( {"text-decoration":"line-through"});
                //   $('.d_corr').show().css({"display":"inline", "color": "green"});
                //   $('.d_err_ok').show().css({"display":"inline", "color": "red"}).text("Your ok answer 1");
                //   // $("input[value='corr']").attr("disabled", true);
                //   // $("input[value='err_2']").attr("disabled", true);
                //   // $("input[value='err_ok']").attr("disabled", false);
                //   $(".rads").css({"cursor":"auto"}).next().css({"cursor":"auto"});
                //   $(".rads").hide();

                //  }

                //  if  ($("input[name='sub_it']:checked").val() === "err_2") {
                //   $( "input[value='err_ok']" ).next().css({"text-decoration":"line-through"});
                //   $( "input[value='err_2']" ).next().css( {"text-decoration":"line-through"});
                //   $('.d_corr').show().css({"display":"inline", "color": "green"});
                //   $('.d_err_2').show().css({"display":"inline", "color": "red"}).text("your bad answer 1");
                //   // $("input[value='corr']").attr("disabled", true);
                //   // $("input[value='err_ok']").attr("disabled", true);
                //   // $("input[value='err_2']").attr("disabled", false);
                //   $(".rads").css({"cursor":"auto"}).next().css({"cursor":"auto"});
                //   $(".rads").hide();

                // }



                // if ($("input[name='uniq']:checked").val() === "corr") {
                //  // $(".situation").append("<p>Don't forget only</p>");
                //   //$(this).attr("disabled", true);
                //   $("input[value='err_ok']").next().css({"text-decoration":"line-through"});
                //   $("input[value='err_2']").next().css( {"text-decoration":"line-through"});
                //   $('.d_corr').show().css({"display":"inline", "color": "green"});
                //   $(".rads").hide();
                //  //$("#unq2, #unq3").hide();
                //   // $("input[value='err_ok']").attr("disabled", true);
                //   // $("input[value='err_2']").attr("disabled", true);
                //   // $("input[value='corr']").attr("disabled", false);
                //   $(".rads").css({"cursor":"auto"}).next().css({"cursor":"auto"});
                //  // $(".rads").attr("disabled", true);
                // // $('.rads').off('click');

                //  }
                //   if ($("input[name='uniq']:checked").val() === "err_ok") {
                //   $("input[value='err_ok']").next().css({"text-decoration":"line-through"});
                //   $("input[value='err_2']").next().css({"text-decoration":"line-through"});
                //   $('.d_corr').show().css({"display":"inline", "color": "green"});
                //   $('.d_err_ok').show().css({"display":"inline", "color": "red"}).text("your ok answer 2");
                //   // $("input[value='corr']").attr("disabled", true);
                //   // $("input[value='err_2']").attr("disabled", true);
                //   // $("input[value='err_ok']").attr("disabled", false);
                //   $(".rads").css({"cursor":"auto"}).next().css({"cursor":"auto"});
                //   //$("#unq1, #unq3").hide();
                //   $(".rads").hide();

                //  }
                // if  ($("input[name='uniq']:checked").val() === "err_2") {


                //   $("input[value='err_ok']").next().css({"text-decoration":"line-through"});
                //   $("input[value='err_2']").next().css({"text-decoration":"line-through"});
                //   $('.d_corr').show().css({"display":"inline", "color": "green"});
                //   $('.d_err_2').show().css({"display":"inline", "color": "red"}).text("your 2 bad answer");
                //   // $("input[value='corr']").attr("disabled", true);
                //   // $("input[value='err_ok']").attr("disabled", true);
                //   // $("input[value='err_2']").attr("disabled", false);
                //   $(".rads").css({"cursor":"auto"}).next().css({"cursor":"auto"});
                //  // $("#unq1, #unq2").hide();
                //  $(".rads").hide();

                //  }



                $("#results").append(currentQuiz);
               // $(".cont_dial").css({"background":"darkgreen"});

                $(".cont_dial").prepend("<div class='divider'></div>");
               // Move The "divider" div
                $(document).ready(function() {

                    $('.divider').animate({
                    'marginTop' : "+=50px"
                    });



                });




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
    if ($("input[name='sub_it]]:checked").val() == "corr") {
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