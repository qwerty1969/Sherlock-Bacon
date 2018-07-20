$('.menu-btn').on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('menu-btn_active');
    $('.menu-nav').toggleClass('menu-nav_active');
  });


$(window).scroll(function(){
    var i = $(this).scrollTop();
    $("#main-text").css({
        "transform":"translate(0%," + i/7 + "%"
    })
})
$('.slider').slick();