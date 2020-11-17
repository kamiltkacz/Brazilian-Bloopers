// Age Select Menu
let selectElement = document.getElementById("age");
if (selectElement !== undefined) {
  for (let agenum = 1; agenum <= 100; agenum++) {
    selectElement.add(new Option(agenum));
  }
}

$("#start_survey").on("click", function () {
  $("#steps").hide();
  $("#footer").hide();
});

$(".popup-close").on("click", function () {
  $("#steps").show();
  $("#footer").show();
});

$(document).ready(function () {
  $("#start_quiz").prop("disabled", true);
});

// Reset border color & text in span element for question1 validation
$("input[type='radio'][name='gender']").click(function () {
  $("input[type='radio'][name='gender']").focus();
  $("#bor_gender").css({
    border: "",
  });
  $("#span_gender").text("");
});

// Reset border color & text in span element for question2 validation
$("#age").click(function () {
  $("#age").focus();
  $("#bor_age").css({
    border: "",
  });
  $("#span_age").text("");
});

// Reset border color & text in span element for question3 validation
$("input[type='radio'][name='years']").click(function () {
  $("input[type='radio'][name='years']").focus();
  $("#bor_years").css({
    border: "",
  });
  $("#span_years").text("");
});

// Reset border color & text in span element for question4 validation
$("input[type='radio'][name='abroad']").click(function () {
  $("input[type='radio'][name='abroad']").focus();
  $("#bor_abroad").css({
    border: "",
  });
  $("#span_abroad").text("");
});

// Reset border color & text in span element for question5 validation
$(".check").click(function () {
  $(".check").focus();
  $("#bor_way").css({
    border: "",
  });
  $("#span_way").text("");
});
// Reset border color & text in span element for question6 validation
$("input[type='radio'][name='others']").click(function () {
  $("input[type='radio'][name='others']").focus();
  $("#bor_others").css({
    border: "",
  });
  $("#span_others").text("");
});

// Reset border color & text in span element for question7 validation
$("input[type='radio'][name='country']").click(function () {
  $("input[type='radio'][name='country']").focus();
  $("#bor_country").css({
    border: "",
  });
  $("#span_country").text("");
});

// Survey Data - on(click)
$("#survey").submit(function () {
  return false;
});

$("#submit_survey").on("click", function () {
  let formData = $("#survey :input").serializeArray();
  formData[formData.length] = {
    name: "action",
    value: "submit_survey",
  };
  formData.push({});

  $.ajax({
    type: "POST",
    url: $("#survey").attr("action"),
    data: formData,
    dataType: "json",
    async: true,
    success: function (result) {
      if (result.genderErr == "empty") {
        $("#bor_gender").css({
          "border-bottom": "5px solid red",
          padding: "8px",
        });
        $("#span_gender").text(" * ");
      }

      if (result.ageErr == "empty") {
        $("#bor_age").css({
          "border-bottom": "5px solid red",
          padding: "8px",
        });
        $("#span_age").text(" * ");
      }

      if (result.yearsErr == "empty") {
        $("#bor_years").css({
          "border-bottom": "5px solid red",
          padding: "8px",
        });
        $("#span_years").text(" * ");
      }

      if (result.abroadErr == "empty") {
        $("#bor_abroad").css({
          "border-bottom": "5px solid red",
          padding: "6px",
        });
        $("#span_abroad").text(" * ");
      }

      if (result.wayErr == "empty") {
        $("#bor_way").css({
          "border-bottom": "5px solid red",
          padding: "6px",
        });
        $("#span_way").text(" * ");
      }

      if (result.othersErr == "empty") {
        $("#bor_others").css({
          "border-bottom": "5px solid red",
          padding: "6px",
        });
        $("#span_others").text(" * ");
      }

      if (result.countryErr == "empty") {
        $("#bor_country").css({
          "border-bottom": "5px solid red",
          padding: "6px",
        });
        $("#span_country").text(" * ");
      }

      // After data submitted do stuff here

      if (result.result == 1) {
        localStorage.setItem("surveyId", result.id);

        // Start Button Show

        $("#start_quiz").prop("disabled", false).css({ opacity: "1" });

        if ($(".surv_ques").is(":contains('Estudante')")) {
          Swal.fire({
            title: "Uau!",
            width: 400,
            heightAuto: false,
            padding: "0.15em",
            background: "#ffc107",
            borderRadius: ".10125em",
            icon: "success",
            text: "Sua pesquisa foi enviada, obrigado!",
            allowOutsideClick: false,
            customClass: {
              footer: "sweet-footer",
            },
          });
        } else {
          Swal.fire({
            title: "Yay!",
            width: 400,
            heightAuto: false,
            padding: "0.15em",
            background: "#ffc107",
            icon: "success",
            text: "Your survey has been submitted, thanks!",
            allowOutsideClick: true,
            customClass: {
              footer: "sweet-footer",
            },
          });
        }

        //  Here u change the language

        $(".popup").slideUp();
        $("#steps").show();
        $("#footer").show();
        $("#leg_steps").text("Follow these 2 simple steps");
        $(legStepsSwitch).text("Siga estas 2 etapas simples");
        $("#remove_steps").hide();
        $("#click_start").text('1. Click "Start" button to begin the quiz.');
        $("#have_fun").text("2. Have fun!");
        $(clickStartSwitch).text(
          '1. Clique no botão "Iniciar" para iniciar o quiz. Lembre-se de que o teste está disponível apenas em inglês.'
        );
        $(haveFunSwitch).text("2. Diverta-se!");
      }

      if (result.result == 2) {
        Swal.fire({
          icon: "error",
          title: "Hmmm...",
          text: "Something went wrong, Try again!",
          showCloseButton: true,
          footer: "<a href><strong>Home</strong></a>",
        });
      }
    }, //ajax, success function//
  }); //ajax//
}); //submit on.click function//
