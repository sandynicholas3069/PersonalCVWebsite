$(document).ready(function () {
  var lastScrollTop = 0;

  // Dropdown
  $(".dropdown").click(function () {
    $(this).toggleClass("active");
  });

  $(window).click(function (event) {
    if (!event.target.matches(".dropbtn")) {
      $(".dropdown").removeClass("active");
    }
  });

  // Popup
  $("#profile-pic").click(function () {
    $("#popup").fadeIn();
  });

  $(".close").click(function () {
    $("#popup").fadeOut();
  });

  // Scroll animation for home content
  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var homePosition = $("#home").offset().top;
    var homeDistance = homePosition - scrollTop;

    // Fade in when scrolling down, fade out when scrolling up
    if (scrollTop > lastScrollTop) {
      if (homeDistance < 300) {
        $("#home-content").css("opacity", "1");
      }
    } else {
      $("#home-content").css("opacity", "1");
    }

    lastScrollTop = scrollTop;

    // Scroll animations for CV, portfolio, and contact sections
    var cvPosition = $("#cv").offset().top;
    var portfolioPosition = $("#portfolio").offset().top;
    var contactPosition = $("#contact").offset().top;

    var cvDistance = cvPosition - scrollTop;
    var portfolioDistance = portfolioPosition - scrollTop;
    var contactDistance = contactPosition - scrollTop;

    if (cvDistance < 300) {
      $("#cv .content").css("opacity", "1");
    } else {
      $("#cv .content").css("opacity", "0");
    }

    if (portfolioDistance < 300) {
      $("#portfolio .content").css("opacity", "1");
    } else {
      $("#portfolio .content").css("opacity", "0");
    }

    if (contactDistance < 300) {
      $("#contact .content").css("opacity", "1");
    } else {
      $("#contact .content").css("opacity", "0");
    }
  });

  // Scroll animation for transcript section
  $(window).scroll(function () {
    var scrollTop = $(this).scrollTop();
    var transcriptPosition = $("#transcript").offset().top;
    var transcriptDistance = transcriptPosition - scrollTop;

    if (transcriptDistance < 300) {
      $("#transcript .content").css("opacity", "1");
    } else {
      $("#transcript .content").css("opacity", "0");
    }
  });

  // Zoom effect for home image
  var $profileImage = $("#home-image");
  $profileImage.on("mouseenter", function () {
    $(this).css("transform", "scale(1.1)");
  });

  $profileImage.on("mouseleave", function () {
    $(this).css("transform", "scale(1)");
  });
});
