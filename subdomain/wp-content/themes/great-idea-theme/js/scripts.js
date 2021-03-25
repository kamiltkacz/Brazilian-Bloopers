
/* Animacao divs textos */

$(document).ready(function () {
  let homeheadDiv = $(".homehead");
  homeheadDiv.animate({ top: "320px" }, "slow");
  homeheadDiv.animate({ left: "120px" }, "slow");

  homeheadDiv.animate({ opacity: "0.3" });
  homeheadDiv.animate({ top: "" }, "slow");
  homeheadDiv.animate({ left: "" }, "slow");
  homeheadDiv.animate({ top: "100px" }, "slow");
  homeheadDiv.animate({ opacity: "1" }, "slow");

  let footerheadDiv = $(".footerhead");

  footerheadDiv.animate({ bottom: "310px" }, "slow");
  footerheadDiv.animate({ bottom: "" }, "slow");
  footerheadDiv.animate({ bottom: "110px" }, "slow");
});

/* ARROW ON CLICK */

$("#arrow-1").click(function () {
  let columnTwo = $("#col-2");
  columnTwo.animate(
    {
      height: "100%",
      width: "100%",
    },
    "slow"
  );

  $("#otima-logo").animate({ marginTop: "-20px" }, "slow");

  $(document).ready(function () {
    function sucesso() {
      $("#b-sucesso").show("slow");
    }
    setTimeout(sucesso, 5000);
  });

  $(document).ready(function () {
    function cvc() {
      $("#col-3").show("slow").css({ display: "flex" });
    }
    setTimeout(cvc, 6000);
  });

  $(document).ready(function () {
    function submarino() {
      $("#col-4").show("slow").css({ display: "flex" });
    }
    setTimeout(submarino, 7000);
  });

  $(document).ready(function () {
    function chilli() {
      $("#col-5").show("slow").css({ display: "flex" });
    }
    setTimeout(chilli, 8000);
  });
});

/* END OF ARROW - ONCLCIK */


/* SCROLL FUNCTION */

$(document).ready(function () {
  $(window).scroll(function () {
    $(document).ready(function () {
      function colTwo() {
        let columnTwo = $("#col-2");
        columnTwo.animate(
          {
            height: "100%",
            width: "100%",
          },
          "slow"
        );
        $("#col-1").hide();
      }
      setTimeout(colTwo, 4000);
    });

    $(document).ready(function () {
      function cvc() {
        $("#col-3").show("slow").css({ display: "flex" });
        $("#b-sucesso").show("slow");
      }
      setTimeout(cvc, 6000);
    });

    $(document).ready(function () {
      function submarino() {
        $("#col-4").show("slow").css({ display: "flex" });
      }
      setTimeout(submarino, 7000);
    });

    $(document).ready(function () {
      function chilli() {
        $("#col-5").show("slow").css({ display: "flex" });

        $("#otima-logo").animate({ marginTop: "-20px" }, "slow");
      }
      setTimeout(chilli, 8000);
    });
  });
});

/* END OF SCROLL FUNCTION */

/* MATCH MEDIA ANIMATION C/ LOGOS DOS BRANDS */

const moveImage = window.matchMedia("(min-width: 660px)");
const columnThree = $("#col-3");
const columnFour = $("#col-4");
const columnFive = $("#col-5");
let center, right;



if (moveImage.matches) {


  function moveCenterRight() {
    columnThree.css({ backgroundPosition: "50% 0%" }, "slow");
  }

  function moveRightRight() {
    columnThree.css({ backgroundPosition: "100% 0%" }, "slow");
  }

  $("#col-3").hover(
    function () {
      center = setInterval(moveCenterRight, 3000);
      right = setInterval(moveRightRight, 2000);
    },
    function () {
      clearInterval(center);
      clearInterval(right);
      columnThree.css({ backgroundPosition: "50% 0%" }, "slow");
    }
  );
  function moveCenter() {
    columnFour.css({ backgroundPosition: "50% 0%" }, "slow");
  }

  function moveRight() {
    columnFour.css({ backgroundPosition: "100% 0%" }, "slow");
  }

  $("#col-4").hover(
    function () {
      center = setInterval(moveCenter, 3000);
      right = setInterval(moveRight, 2000);
    },
    function () {
      clearInterval(center);
      clearInterval(right);
      columnFour.css({ backgroundPosition: "50% 0%" }, "slow");
    }
  );

  function moveCenterLeft() {
    columnFive.css({ backgroundPosition: "50% 0%" }, "slow");
  }

  function moveLeftLeft() {
    columnFive.css({ backgroundPosition: "0% 0%" }, "slow");
  }

  $("#col-5").hover(
    function () {
      centerLeft = setInterval(moveCenterLeft, 3000);
      LeftLeft = setInterval(moveLeftLeft, 2000);
    },
    function () {
      clearInterval(centerLeft);
      clearInterval(LeftLeft);
      columnFive.css({ backgroundPosition: "50% 0%" }, "slow");
    }
  );
}
