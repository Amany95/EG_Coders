$(document).ready(function () {
  wow = new WOW({
    boxClass: 'wow', // default
    animateClass: 'animated', // default
    offset: 0, // default
    mobile: false, // default
    live: true // default
  })
  wow.init();
  
  var toTop = $("#to_top");
  $(".carousel img").css("height", $(window).height() - $(".navbar-default").height());
  $(window).scroll(function () {
    $(this).scrollTop() >= 300 ? toTop.show() : toTop.hide();
  });
  toTop.click(function () {
    $("html,body").animate({
      scrollTop: 0
    }, 600);
  });
  var active_link = $(".navbar .navbar-right .active");
  $(".navbar .navbar-right li").on("mouseenter", function () {
    active_link.attr("class", "");
  });
  $(".navbar .navbar-right li").on("mouseleave", function () {
    active_link.attr("class", "active");
  });
 

});

