'use strict'

$('.menu-btn').on('click', function(e) {
    e.preventDefault();
    $(this).toggleClass('menu-btn_active');
    $('.menu-nav').toggleClass('menu-nav_active');
  });


$(window).scroll(function(){
    var i = $(this).scrollTop();
    $("#main-text").css({
        "transform":"translate(0%," + i/5 + "%"
    })
})
$('.slider').slick({
    autoplay:true
});
$(window).on("scroll", function() {
    if($(window).scrollTop() > 750) {
        $("header").addClass("active");
    } else {
       $("header").removeClass("active");
    }})
      
    $("#con").on("click",function () {
        if ($(".uk").is(":hidden")) {
          $(".uk").slideDown("fast");
        } else {
          $(".uk").hide("fast");
        }
    });
    $("#con1").on("click",function () {
      if ($(".uk1").is(":hidden")) {
        $(".uk1").slideDown("fast");
      } else {
        $(".uk1").hide("fast");
      }
    });
    $("#con2").on("click",function () {
      if ($(".uk2").is(":hidden")) {
        $(".uk2").slideDown("fast");
      } else {
        $(".uk2").hide("fast");
      }
    });
    
    
      $(document).ready(function(){
        $(".modal2").click(function(){
          $('body').css('overflow', 'hidden');
          $(".backgr").fadeIn(400,function(){
            $(".modal_1").css
            ('display','block')
            .animate({opacity:1,top:'50%'});
          })
        })
      })
      $(".close, .backgr").click(function(){
        $('body').css('overflow', 'auto');
        $(".modal_1").animate({opacity:0,top:'50%'}),
       
          $(".modal_1").css('display','none');
          $(".backgr").fadeOut(400);
       
      })
      $(document).ready(function(){
        $(".modal3").click(function(){
          $('body').css('overflow', 'hidden');
          $(".backgr").fadeIn(400,function(){
            $(".modal_2").css
            ('display','block')
            .animate({opacity:1,top:'50%'});
          })
        })
      })
      $(".close, .backgr").click(function(){
        $('body').css('overflow', 'auto');
        $(".modal_2").animate({opacity:0,top:'50%'}),
       
          $(".modal_2").css('display','none');
          $(".backgr").fadeOut(400);
       
      })

     
      $(".click-cont").click(function(){
        $(".slider-carusel").fadeTo(500,0);
          $(".slider-carusel").css('position','absolute','right','-9999px');
          $(".exp-content").css('height','270px');
          $(".cont-sm:eq(0)").css
            ('display','block')
        $(".cont-sm:eq(0)").fadeTo(500,2,function(){
      })
        $("#hide").click(function(){
          $(".cont-exp:eq(0)").fadeTo(100,0,function(){
            $(".cont-exp").next().fadeTo(50,0);
            $(".cont-exp").next().fadeTo(50,0);
            $(".slider-carusel").css('position','relative','right','0px');
            $(".slider-carusel").fadeTo(1000,1);
            $(".exp-cont").css('height','100px');
          })
        })

        $('.slider-carusel').slick({
          dots: true,
          infinite: false,
          speed: 300,
          slidesToShow: 4,
          slidesToScroll: 4,
          responsive: [
            {
              breakpoint: 1024,
              settings: {
                slidesToShow: 3,
                slidesToScroll: 3,
                infinite: true,
                dots: true
              }
            },
            {
              breakpoint: 600,
              settings: {
                slidesToShow: 2,
                slidesToScroll: 2
              }
            },
            {
              breakpoint: 480,
              settings: {
                slidesToShow: 1,
                slidesToScroll: 1
              }
            }
  
          ]
        });
      })




