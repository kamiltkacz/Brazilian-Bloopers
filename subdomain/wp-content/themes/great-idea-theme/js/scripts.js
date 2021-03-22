$(document).ready(function(){





    let homeheadDiv = $(".homehead");
    homeheadDiv.animate({top: '320px'}, "slow");
    homeheadDiv.animate({fontSize: '3em'}, "slow");
    homeheadDiv.animate({top: ''}, "slow");
    homeheadDiv.animate({top: '100px'}, "slow");

    let footerheadDiv = $(".footerhead");

    footerheadDiv.animate({bottom: '310px'}, "slow");
    footerheadDiv.animate({fontSize: '3em'}, "slow");
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

    $("#col-1").hide();


 });
// $(document).ready(function() {
//  $("#col-3").hover(function(){
// $(this).css({"opacity": "0.8"});

//     }, function(){
//     $(this).css({"opacity": "" });
//   });
// });

