// Reset border color & text in span element for name validation
$("#bor_name").focus(function () {
  $("#bor_name").css({
    border: "",
  });
  $("#span_name").text("");
});
// Reset border color & text in span element for email validation
$("#bor_email").focus(function () {
  $("#bor_email").css({
    border: "",
  });
  $("#span_email").text("");
});
// Reset border color & text in span element for message validation
$("#bor_message").focus(function () {
  $("#bor_message").css({
    border: "",
  });
  $("#span_message").text("");
});

// Submit form contact
$("#contact").submit(function () {
  return false;
});

$("#submit_contact").on("click", function () {
  let formData = $("#contact :input").serializeArray();
  formData[formData.length] = {
    name: "action",
    value: "submit_contact",
  };
  formData.push({});
  $.ajax({
    type: "POST",
    url: $("#contact").attr("action"),
    data: formData,
    dataType: "json",
    async: true,
    success: function (result) {
      // After receiving confirmation on submit Do STUFF HERE:
      if (result.validFormName == "empty") {
        $("#bor_name").css({
          border: "5px solid red",
        });
        $("#span_name").text(
          '(must only contain letters and whitespace ex."Paulo Sousa") '
        );
      }
      if (result.validFormEmail == "empty") {
        $("#bor_email").css({
          border: "5px solid red",
        });
        $("#span_email").text(
          '( enter a valid email address ex."paulo@brazil.com")'
        );
      }
      if (result.validFormMessage == "empty") {
        $("#bor_message").css({
          border: "5px solid red",
        });
        $("#span_message").text(" (type something, anything!)");
      }
      if (result.validName == "no") {
        $("#bor_name").css({
          border: "5px solid red",
        });
        $("#span_name").text(
          ' (must only contain letters and whitespace ex."Paulo Sousa")'
        );
      }
      if (result.validEmail == "email0") {
        $("#bor_email").css({
          border: "5px solid red",
        });
        $("#span_email").text(
          '( enter a valid email address ex."paulo@brazil.com")'
        );
      }

      // Validacao Portuguese

      if ($("#contact_text").is(":contains('Nome')")) {
        $("#bor_name").focus(function () {
          $("#bor_name").css({
            border: "",
          });
          $("#span_name").text("");
        });
        // Reset border color & text in span element for email validation
        $("#bor_email").focus(function () {
          $("#bor_email").css({
            border: "",
          });
          $("#span_email").text("");
        });
        // Reset border color & text in span element for message validation
        $("#bor_message").focus(function () {
          $("#bor_message").css({
            border: "",
          });
          $("#span_message").text("");
        });

        if (result.validFormName == "empty") {
          $("#bor_name").css({
            border: "5px solid red",
          });
          $("#span_name").text(
            ' (Deve conter apenas letras e espaços em branco ex."Paulo Sousa")'
          );
        }
        if (result.validFormEmail == "empty") {
          $("#bor_email").css({
            border: "5px solid red",
          });
          $("#span_email").text(
            '( Digite um endereço de e-mail válido ex."paulo@brazil.com")'
          );
        }
        if (result.validFormMessage == "empty") {
          $("#bor_message").css({
            border: "5px solid red",
          });
          $("#span_message").text("( Digite algo, qualquer coisa!)");
        }
        if (result.validName == "no") {
          $("#bor_name").css({
            border: "5px solid red",
          });
          $("#span_name").text(
            '( Deve conter apenas letras e espaços em branco ex."Paulo Sousa")'
          );
        }
        if (result.validEmail == "email0") {
          $("#bor_email").css({
            border: "5px solid red",
          });
          $("#span_email").text(
            ' (Digite um endereço de e-mail válido ex."paulo@brazil.com")'
          );
        }
      }

      // If data is sent do stuff here
      if (result.result == 1) {
        Swal.fire({
          title: "Yay!",
          width: 400,
          heightAuto: false,
          padding: "0.15em",
          background: "#ffc107",
          icon: "success",
          text: "Your form has been submitted, thanks!",
          allowOutsideClick: false,
          customClass: {
            footer: "sweet-footer",
          },
        });
        $("#contact")[0].reset();
      }
      if (result.result == 2) {
        Swal.fire({
          icon: "error",
          title: "Hmmm...",
          text: "Something went wrong, Try again!",
          footer: "<a href><strong>Home</strong></a>",
        });
      }
    }, //ajax, success function//
  }); //ajax//
}); //submit on.click fuction//
