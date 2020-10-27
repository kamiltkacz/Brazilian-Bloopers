
$("#start_quiz").on("click", function () {
  let score = 0;

  // Reset border color & text in span element
  $("input[class='rads']").click(function () {
    $("input[class='rads']").focus();
    $(".bor_choose").css({
      border: "",
    });
    $(".span_choose").text("");
  });

  $(".next").click(function () {
    classNumRow = $(this).attr("id");
    classNumSplit = classNumRow.split("_");
    classNum = classNumSplit[1];

    showTabs(classNum);
  });

  $("#next_1").on("click", function () {
    if (!$("input[name='sub_it']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding: "10px",
      });

    } else if ($("input[name='sub_it']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
      $(".score").text(score);
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
      $(".score").text(score);
    }
  });

  $("#next_2").on("click", function () {
    if (!$("input[name='too']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='too']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_3").on("click", function () {
    if (!$("input[name='much']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='much']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_4").on("click", function () {
    if (!$("input[name='exist']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='exist']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_5").on("click", function () {
    if (!$("input[name='two_sub']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='two_sub']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_6").on("click", function () {
    if (!$("input[name='no_obj']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='no_obj']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_7").on("click", function () {
    if (!$("input[name='for']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='for']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_8").on("click", function () {
    if (!$("input[name='h_age']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='h_age']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_9").on("click", function () {
    if (!$("input[name='guy']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='guy']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_10").on("click", function () {
    if (!$("input[name='car']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='car']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_11").on("click", function () {
    if (!$("input[name='lose']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='lose']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_12").on("click", function () {
    if (!$("input[name='diss']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='diss']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_13").on("click", function () {
    if (!$("input[name='doubt']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='doubt']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_14").on("click", function () {
    if (!$("input[name='know']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='know']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_15").on("click", function () {
    if (!$("input[name='god']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='god']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_16").on("click", function () {
    if (!$("input[name='pref']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='pref']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_17").on("click", function () {
    if (!$("input[name='impress']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='impress']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_18").on("click", function () {
    if (!$("input[name='parent']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='parent']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_19").on("click", function () {
    if (!$("input[name='gout']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='gout']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_20").on("click", function () {
    if (!$("input[name='use']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='use']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_21").on("click", function () {
    if (!$("input[name='durat']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='durat']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_22").on("click", function () {
    if (!$("input[name='stay']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='stay']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_23").on("click", function () {
    if (!$("input[name='with']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='with']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_24").on("click", function () {
    if (!$("input[name='chap']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='chap']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_25").on("click", function () {
    if (!$("input[name='notes']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='notes']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_26").on("click", function () {
    if (!$("input[name='music']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='music']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_27").on("click", function () {
    if (!$("input[name='every']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='every']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_28").on("click", function () {
    if (!$("input[name='sym']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='sym']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  $("#next_29").on("click", function () {
    if (!$("input[name='support']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

    } else if ($("input[name='support']:checked").val() == "corr") {
      score++;
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    } else {
      console.log(score);
      $("#" + classNum).hide();
      $("#" + numNext).show();
    }
  });

  // LAST QUESTION //

  $("#quiz_form").submit(function () {
    return false;
  });

  // Next button changes to Submit and moves
  $("#next_30").text("Submit");
  $("#back_30").css({ right: "85px" });

  $("#next_30").on("click", function () {
    if (!$("input[name='uniq']:checked").val()) {
      $(".bor_choose").css({
        "border-bottom": "5px solid red",
        padding:"",
      });

      return false;
    } else if ($("input[name='uniq']:checked").val() == "corr") {
      score++;
      console.log(score);
      $(".score").text(score);
    } else {
      console.log(score);
      $(".score").text(score);
    }

    // let surveyId = localStorage.getItem("surveyId");
    let formData = $("#quiz_form :input").serializeArray();
    formData[formData.length] = {
      name: "action",
      value: "sub_quiz",
    };
    // formData[formData.length] = {
    //   name: "surveyId",
    //   value: surveyId
    // };
    formData.push({});
    console.log("dataQuiz");

    $.ajax({
      type: "POST",
      url: $("#quiz_form").attr("action"),
      data: formData,
      dataType: "json",
      async: true,

      success: function (result) {
        if (result.result == 1) {
          $("#instr, #30").hide();
          $(".scoreMsg").show();
          $(".score").show();
          $("#results").show();

          $(document).ready(function () {
            let currentQuiz = $(".questions").contents();
            let resultScore = 0;

            if ($("input[id='i_1']:checked").val()) {
              $("#i_2, #i_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              $("#scoreInfo_1").append(resultScore);
            }

            if ($("input[id='i_2']:checked").val()) {
              $("#i_1, #i_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_1").append(resultScore);
            }

            if ($("input[id='i_3']:checked").val()) {
              $("#i_1, #i_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              $("#scoreInfo_1").append(resultScore);
            }

            if ($("input[id='t_1']:checked").val()) {
              $("#t_2, #t_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_2").append(resultScore);
            }

            if ($("input[id='t_2']:checked").val()) {
              $("#t_1, #t_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_2").append(resultScore);
            }

            if ($("input[id='t_3']:checked").val()) {
              $("#t_1, #t_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              $("#scoreInfo_2").append(resultScore);
            }

            if ($("input[id='m_1']:checked").val()) {
              $("#m_2, #m_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_3").append(resultScore);
            }

            if ($("input[id='m_2']:checked").val()) {
              $("#m_1, #m_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_3").append(resultScore);
            }

            if ($("input[id='m_3']:checked").val()) {
              $("#m_1, #m_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_3").append(resultScore);
            }

            if ($("input[id='ex_1']:checked").val()) {
              $("#ex_2, #ex_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_4").append(resultScore);
            }

            if ($("input[id='ex_2']:checked").val()) {
              $("#ex_1, #ex_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_4").append(resultScore);
            }

            if ($("input[id='ex_3']:checked").val()) {
              $("#ex_1, #ex_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_4").append(resultScore);
            }

            if ($("input[id='tw_1']:checked").val()) {
              $("#tw_2, #tw_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_5").append(resultScore);
            }

            if ($("input[id='tw_2']:checked").val()) {
              $("#tw_1, #tw_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_5").append(resultScore);
            }

            if ($("input[id='tw_3']:checked").val()) {
              $("#tw_1, #tw_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_5").append(resultScore);
            }

            if ($("input[id='ob_1']:checked").val()) {
              $("#ob_2, #ob_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_6").append(resultScore);
            }

            if ($("input[id='ob_2']:checked").val()) {
              $("#ob_1, #ob_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_6").append(resultScore);
            }

            if ($("input[id='ob_3']:checked").val()) {
              $("#ob_1, #ob_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_6").append(resultScore);
            }

            if ($("input[id='for_1']:checked").val()) {
              $("#for_2, #for_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_7").append(resultScore);
            }

            if ($("input[id='for_2']:checked").val()) {
              $("#for_1, #for_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_7").append(resultScore);
            }

            if ($("input[id='for_3']:checked").val()) {
              $("#for_1, #for_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_7").append(resultScore);
            }

            if ($("input[id='age_1']:checked").val()) {
              $("#age_2, #age_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_8").append(resultScore);
            }

            if ($("input[id='age_2']:checked").val()) {
              $("#age_1, #age_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_8").append(resultScore);
            }

            if ($("input[id='age_3']:checked").val()) {
              $("#age_1, #age_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_8").append(resultScore);
            }

            if ($("input[id='guy_1']:checked").val()) {
              $("#guy_2, #guy_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_9").append(resultScore);
            }

            if ($("input[id='guy_2']:checked").val()) {
              $("#guy_1, #guy_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_9").append(resultScore);
            }

            if ($("input[id='guy_3']:checked").val()) {
              $("#guy_1, #guy_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_9").append(resultScore);
            }

            if ($("input[id='act_1']:checked").val()) {
              $("#act_2, #act_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_10").append(resultScore);
            }

            if ($("input[id='act_2']:checked").val()) {
              $("#act_1, #act_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_10").append(resultScore);
            }

            if ($("input[id='act_3']:checked").val()) {
              $("#act_1, #act_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_10").append(resultScore);
            }

            if ($("input[id='los_1']:checked").val()) {
              $("#los_2, #los_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_11").append(resultScore);
            }

            if ($("input[id='los_2']:checked").val()) {
              $("#los_1, #los_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_11").append(resultScore);
            }

            if ($("input[id='los_3']:checked").val()) {
              $("#lo_1, #lo_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_11").append(resultScore);
            }

            if ($("input[id='diss_1']:checked").val()) {
              $("#diss_2, #diss_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_12").append(resultScore);
            }

            if ($("input[id='diss_2']:checked").val()) {
              $("#diss_1, #diss_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_12").append(resultScore);
            }

            if ($("input[id='diss_3']:checked").val()) {
              $("#diss_1, #diss_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_12").append(resultScore);
            }

            if ($("input[id='doub_1']:checked").val()) {
              $("#doub_2, #doub_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_13").append(resultScore);
            }

            if ($("input[id='doub_2']:checked").val()) {
              $("#doub_1, #doub_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_13").append(resultScore);
            }

            if ($("input[id='doub_3']:checked").val()) {
              $("#doub_1, #doub_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_13").append(resultScore);
            }

            if ($("input[id='met_1']:checked").val()) {
              $("#met_2, #met_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_14").append(resultScore);
            }

            if ($("input[id='met_2']:checked").val()) {
              $("#met_1, #met_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_14").append(resultScore);
            }

            if ($("input[id='met_3']:checked").val()) {
              $("#met_1, #met_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_14").append(resultScore);
            }

            if ($("input[id='god_1']:checked").val()) {
              $("#god_2, #god_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_15").append(resultScore);
            }

            if ($("input[id='god_2']:checked").val()) {
              $("#god_1, #god_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_15").append(resultScore);
            }

            if ($("input[id='god_3']:checked").val()) {
              $("#god_1, #god_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_15").append(resultScore);
            }

            if ($("input[id='pref_1']:checked").val()) {
              $("#pref_2, #pref_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_16").append(resultScore);
            }

            if ($("input[id='pref_2']:checked").val()) {
              $("#pref_1, #pref_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_16").append(resultScore);
            }

            if ($("input[id='pref_3']:checked").val()) {
              $("#pref_1, #pref_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_16").append(resultScore);
            }

            if ($("input[id='imp_1']:checked").val()) {
              $("#imp_2, #imp_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_17").append(resultScore);
            }

            if ($("input[id='imp_2']:checked").val()) {
              $("#imp_1, #imp_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_17").append(resultScore);
            }

            if ($("input[id='imp_3']:checked").val()) {
              $("#imp_1, #imp_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_17").append(resultScore);
            }

            if ($("input[id='par_1']:checked").val()) {
              $("#par_2, #par_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_18").append(resultScore);
            }

            if ($("input[id='par_2']:checked").val()) {
              $("#par_1, #par_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_18").append(resultScore);
            }

            if ($("input[id='par_3']:checked").val()) {
              $("#par_1, #par_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_18").append(resultScore);
            }

            if ($("input[id='go_1']:checked").val()) {
              $("#go_2, #go_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_19").append(resultScore);
            }

            if ($("input[id='go_2']:checked").val()) {
              $("#go_1, #go_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_19").append(resultScore);
            }

            if ($("input[id='go_3']:checked").val()) {
              $("#go_1, #go_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_19").append(resultScore);
            }

            if ($("input[id='use_1']:checked").val()) {
              $("#use_2, #use_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_20").append(resultScore);
            }

            if ($("input[id='use_2']:checked").val()) {
              $("#use_1, #use_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_20").append(resultScore);
            }

            if ($("input[id='use_3']:checked").val()) {
              $("#use_1, #use_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_20").append(resultScore);
            }

            if ($("input[id='stu_1']:checked").val()) {
              $("#stu_2, #stu_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_21").append(resultScore);
            }

            if ($("input[id='stu_2']:checked").val()) {
              $("#stu_1, #stu_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_21").append(resultScore);
            }

            if ($("input[id='stu_3']:checked").val()) {
              $("#stu_1, #stu_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_21").append(resultScore);
            }

            if ($("input[id='sta_1']:checked").val()) {
              $("#sta_2, #sta_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_22").append(resultScore);
            }

            if ($("input[id='sta_2']:checked").val()) {
              $("#sta_1, #sta_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_22").append(resultScore);
            }

            if ($("input[id='sta_3']:checked").val()) {
              $("#sta_1, #sta_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_22").append(resultScore);
            }

            if ($("input[id='wit_1']:checked").val()) {
              $("#wit_2, #wit_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_23").append(resultScore);
            }

            if ($("input[id='wit_2']:checked").val()) {
              $("#wit_1, #wit_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_23").append(resultScore);
            }

            if ($("input[id='wit_3']:checked").val()) {
              $("#wit_1, #wit_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_23").append(resultScore);
            }

            if ($("input[id='cha_1']:checked").val()) {
              $("#cha_2, #cha_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_24").append(resultScore);
            }

            if ($("input[id='cha_2']:checked").val()) {
              $("#cha_1, #cha_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_24").append(resultScore);
            }

            if ($("input[id='cha_3']:checked").val()) {
              $("#cha_1, #cha_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_24").append(resultScore);
            }

            if ($("input[id='not_1']:checked").val()) {
              $("#not_2, #not_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_25").append(resultScore);
            }

            if ($("input[id='not_2']:checked").val()) {
              $("#not_1, #not_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_25").append(resultScore);
            }

            if ($("input[id='not_3']:checked").val()) {
              $("#not_1, #not_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_25").append(resultScore);
            }

            if ($("input[id='mus_1']:checked").val()) {
              $("#mus_2, #mus_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_26").append(resultScore);
            }

            if ($("input[id='mus_2']:checked").val()) {
              $("#mus_1, #mus_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_26").append(resultScore);
            }

            if ($("input[id='mus_3']:checked").val()) {
              $("#mus_1, #mus_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_26").append(resultScore);
            }

            if ($("input[id='ev_1']:checked").val()) {
              $("#ev_2, #ev_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_27").append(resultScore);
            }

            if ($("input[id='ev_2']:checked").val()) {
              $("#ev_1, #ev_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_27").append(resultScore);
            }

            if ($("input[id='ev_3']:checked").val()) {
              $("#ev_1, #ev_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_27").append(resultScore);
            }

            if ($("input[id='sym_1']:checked").val()) {
              $("#sym_2, #sym_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_28").append(resultScore);
            }

            if ($("input[id='sym_2']:checked").val()) {
              $("#sym_1, #sym_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_28").append(resultScore);
            }

            if ($("input[id='sym_3']:checked").val()) {
              $("#sym_1, #sym_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_28").append(resultScore);
            }

            if ($("input[id='sup_1']:checked").val()) {
              $("#sup_2, #sup_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_29").append(resultScore);
            }

            if ($("input[id='sup_2']:checked").val()) {
              $("#sup_1, #sup_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });

              $("#scoreInfo_29").append(resultScore);
            }

            if ($("input[id='sup_3']:checked").val()) {
              $("#sup_1, #sup_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_29").append(resultScore);
            }

            // Last Question

            if ($("input[id='unq_1']:checked").val()) {
              $("#unq_2, #unq_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              resultScore++;
              $("#scoreInfo_30").append(resultScore);
            }

            if ($("input[id='unq_2']:checked").val()) {
              $("#unq_1, #unq_3").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              $("#scoreInfo_30").append(resultScore);
            }

            if ($("input[id='unq_3']:checked").val()) {
              $("#unq_1, #unq_2").hide();
              $(".err_label").css({ "text-decoration": "line-through" });
              $(".d_corr").show().css({ display: "inline", color: "green" });
              $(".d_err").show().css({ display: "inline", color: "red" });
              $(".rads").css({ cursor: "auto" }).next().css({ cursor: "auto" });
              $("#scoreInfo_30").append(resultScore);
            }

            $("#results").append(currentQuiz);

            $(".exp").show();

            $(".cont_dial").prepend("<div class='divider'></div>");

            // Move The "divider" div
            $(document).ready(function () {
              $(".divider").animate({ marginTop: "+=50px" });
              $(".exp").animate({ marginTop: "+=30px" });
            });
          }); // document ready - results

          // $('.popup').hide();
          // $('#start_quiz').off('click');
        }

        if (result.result == 2) {
          alert("oh, no! Something went wrong, Try again");
        }
      }, //ajax, success function 2//
    }); //ajax 2//
  }); //submit on.click function 2//

  $(".back").click(function () {
    classNumRow = $(this).attr("id");
    classNumSplit = classNumRow.split("_");
    classNum = classNumSplit[1];

    backTabs(classNum);

    $(".bor_choose").css({ border: "" });
    $(".span_choose").text("");

    console.log(score);
  });

  $("#back_2").on("click", function () {
    if ($("input[name='sub_it']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_3").on("click", function () {
    if ($("input[name='too']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });
  $("#back_4").on("click", function () {
    if ($("input[name='much']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_5").on("click", function () {
    if ($("input[name='exist']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_6").on("click", function () {
    if ($("input[name='two_sub']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_7").on("click", function () {
    if ($("input[name='no_obj']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });
  $("#back_8").on("click", function () {
    if ($("input[name='for']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_9").on("click", function () {
    if ($("input[name='h_age']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_10").on("click", function () {
    if ($("input[name='guy']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_11").on("click", function () {
    if ($("input[name='car']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_12").on("click", function () {
    if ($("input[name='lose']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_13").on("click", function () {
    if ($("input[name='diss']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_14").on("click", function () {
    if ($("input[name='doubt']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_15").on("click", function () {
    if ($("input[name='know']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_16").on("click", function () {
    if ($("input[name='god']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_17").on("click", function () {
    if ($("input[name='pref']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_18").on("click", function () {
    if ($("input[name='impress']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_19").on("click", function () {
    if ($("input[name='parent']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_20").on("click", function () {
    if ($("input[name='gout']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_21").on("click", function () {
    if ($("input[name='use']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_22").on("click", function () {
    if ($("input[name='durat']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_23").on("click", function () {
    if ($("input[name='stay']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_24").on("click", function () {
    if ($("input[name='with']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_25").on("click", function () {
    if ($("input[name='chap']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_26").on("click", function () {
    if ($("input[name='notes']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_27").on("click", function () {
    if ($("input[name='music']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_28").on("click", function () {
    if ($("input[name='every']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_29").on("click", function () {
    if ($("input[name='sym']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  $("#back_30").on("click", function () {
    if ($("input[name='support']:checked").val() == "corr") {
      score--;
      console.log(score);
    }
  });

  function showTabs(classNum) {
    numNext = parseInt(classNum) + 1;
    event.preventDefault();
  }

  function backTabs(classNum) {
    numBack = parseInt(classNum) - 1;
    event.preventDefault();
    $("#" + classNum).hide();
    $("#" + numBack).show();
  }
}); // (start_quiz) button

/* Mousemove function for the instructions*/

$(function () {
  let moveLeft = 10;
  let moveUp = 75;

  $("#instr").hover(
    function (e) {
      $(this).css("background", "#4B352C");
      $("#inst_hov").show("slow");
    },
    function () {
      $(this).css("background", "");
      $("#inst_hov").hide("slow");
    }
  );

  $("#instr").mousemove(function (e) {
    $("#inst_hov")
      .css("top", e.pageY - moveUp)
      .css("left", e.pageX + moveLeft);
  });
});

/*Hover function for '.next and .back' buttons*/
$(document).ready(function () {
  $(".next").hover(
    function () {
      $(this).css({ background: "#4B352C" });
    },
    function () {
      $(this).css({ background: "" });
    }
  );
  $(".back").hover(
    function () {
      $(this).css({ background: "#4B352C" });
    },
    function () {
      $(this).css({ background: "" });
    }
  );
  $(".hvr-grow").hover(
    function () {
      $(this).css({ background: "#4B352C" });
    },
    function () {
      $(this).css({ background: "" });
    }
  );
});