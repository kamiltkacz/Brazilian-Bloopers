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


    $("#b-sucesso").show("slow");
    $("#col-1").hide();
    $(document).ready(function() {
      function myCvc() {

        $("#col-3").show();

      }
      setTimeout(myCvc, 2000);

    });



 });

 $("#arrow-icon-2").click(function(){

    let columnTwo = $("#col-2");
    columnTwo.animate({
    height: '100%',
    width: '100%'
    }, "slow");

    let columnThree = $("#col-3");
    // columnThree.animate({
    // height: '90%',
    // width: '55%'
    // }, "slow");
    columnThree.css({marginTop: '0%'});

    $("#col-1").hide();


 });

function onOverlay() {
    document.getElementById("overlay").style.display = "block";
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

  // const moveImage = window.matchMedia( "(min-width: 1020px)" );
  // const columnFour = $("#col-4");
  // const columnFive = $("#col-5");
  // let center, right;

  // if (moveImage.matches) {

  // function moveCenter() {

  //     columnFour.css({"backgroundPosition": '50% 0%'},"slow");

  //   }

  // function moveRight() {

  //   columnFour.css({"backgroundPosition": '100% 0%'},"slow");

  // }

  //   $("#col-4").hover(function(){
  //     center =  setInterval(moveCenter, 3000);
  //     right = setInterval(moveRight, 2000)

  //   }, function(){

  //     clearInterval(center);
  //     clearInterval(right);
  //     columnFour.css({"backgroundPosition": '0% 0%'},"slow");

  //   });

  //   function moveCenterLeft() {

  //           columnFive.css({"backgroundPosition": '50% 0%'},"slow");

  //          }

  //   function moveLeftLeft() {

  //   columnFive.css({"backgroundPosition": '0% 0%'},"slow");

  //   }

  //   $("#col-5").hover(function(){
  //     centerLeft =  setInterval(moveCenterLeft, 3000);
  //     LeftLeft = setInterval(moveLeftLeft, 2000)

  //   }, function(){

  //     clearInterval(centerLeft);
  //     clearInterval(LeftLeft);
  //     columnFive.css({"backgroundPosition": '100% 0%'},"slow");

  //   });




  // }













