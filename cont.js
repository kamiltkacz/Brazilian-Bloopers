
$(document).ready(function () {
    function sucesso() {
      $("#home").show("slow").css({display: "flex"});
      $("#arrow-1").show("slow");

    }
    setTimeout(sucesso, 2000);
  });

  $(document).ready(function () {
    function sucesso() {
      $("#footer").show("slow");

    }
    setTimeout(sucesso, 3000);
  });

//   $(document).bind('mousemove', function(e){
//     var width = $('#logo_main').width();
//     $('#logo_main').css({
//        left:  e.pageX-width,
//        top:   e.pageY
//     });

// });

// $(document).click(function(){

//   $(this).unbind('mousemove');
//   $('#logo_main').css({
//     left:  "",
//     top:   ""
//  });


//  });





