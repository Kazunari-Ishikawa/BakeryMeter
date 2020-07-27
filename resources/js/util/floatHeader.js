$(function () {
  var targetHieght = $(".js-float-target").height();
  $(window).on("scroll", function () {
    $(".js-float-menu").toggleClass(
      "isFloatActive",
      $(this).scrollTop() > targetHieght
    );
  });
})