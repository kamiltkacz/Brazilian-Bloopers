$(document).ready(function(){





    let homeheadDiv = $(".homehead");
    homeheadDiv.animate({top: '320px'}, "slow");
    homeheadDiv.animate({opacity: '0.5'});
    homeheadDiv.animate({top: ''}, "slow");
    homeheadDiv.animate({top: '100px'}, "slow");
    homeheadDiv.animate({opacity: '1'}, "slow");


    let footerheadDiv = $(".footerhead");

    footerheadDiv.animate({bottom: '310px'}, "slow");
    footerheadDiv.animate({bottom: ''}, "slow");
    footerheadDiv.animate({bottom: '110px'}, "slow");




});

$("#arrow-icon-1").click(function(){

    let columnTwo = $("#col-2");
    columnTwo.animate({
    height: '100%',
    width: '100%'
    }, "slow");



    $("#col-1").hide();


 });

 $("#arrow-icon-2").click(function(){

    let columnTwo = $("#col-2");
    columnTwo.animate({
    height: '100%',
    width: '100%'
    }, "slow");

    let columnThree = $("#col-3");
    columnThree.animate({
    height: '90%',
    width: '55%'
    }, "slow");
    columnThree.animate({height: '101%', width: '65%'}, "slow");

    $("#col-1").hide();


 });

function onOverlay() {
    document.getElementById("overlay").style.display = "flex";
    $("#col-3").css({"opacity": "0.2" });
    $("#col-4").css({"opacity": "0.2" });
    $("#col-5").css({"opacity": "0.2" });
  }

  function offOverlay() {
    document.getElementById("overlay").style.display = "none";
    $("#col-3").css({"opacity": "" });
    $("#col-4").css({"opacity": "" });
    $("#col-5").css({"opacity": "" });

  }

