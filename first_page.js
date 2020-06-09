    // $("#quiz_form").submit(function() {
    // return false;
    // console.log('return false');
    // });

    $("#check_first").on("click", function() {
      var formData = $("#quiz_form :input").serializeArray();
      formData[formData.length] = {
        name: "action",
        value: "check_first"
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


            alert('yes');
          }

          if (result.result == 2) {
            alert('no way');
          }

        } //ajax, success function 2//
      }); //ajax 2//
    }); //submit on.click function 2//

