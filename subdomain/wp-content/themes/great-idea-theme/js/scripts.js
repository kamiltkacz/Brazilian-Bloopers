$(document).ready(function(){





    let homeheadDiv = $(".homehead");
    homeheadDiv.animate({top: '300px'}, "slow");
    homeheadDiv.animate({fontSize: '3em'}, "slow");
    homeheadDiv.animate({top: ''}, "slow");
    homeheadDiv.animate({top: '400px'}, "slow");

 let spanTimeout = $("span");
     setTimeout(function(){

    $(spanTimeout).css({"line-height": "1"});

    $(window).resize(function() {
        if ($(window).width() < 480) {

            $(spanTimeout).css({"line-height": "10"});
        }

    });
  }, 4000);

  setTimeout(function(){

    $(spanTimeout).animate({left: '200px'}, "slow").slideUp();


  }, 15000);






});