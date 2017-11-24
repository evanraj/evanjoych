$(document).ready(function () {
    if(jQuery('.bxslider').length == 1) {
          $('.bxslider').bxSlider({
            minSlides: 3,
            maxSlides: 5,
            slideWidth: 350,
            slideMargin: 10,
            moveSlides: 1,
            auto: true
        });      
    }
     $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });


});
//jQuery to collapse the navbar on scroll
$(window).scroll(function () {
    if(jQuery('.navbar').length == 1) {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function () {
    $('a.page-scroll').bind('click', function (event) {
        var $anchor = $(this);
        $('html, body').stop().animate({
            scrollTop: $($anchor.attr('href')).offset().top
        }, 1500, 'easeInOutExpo');
        event.preventDefault();
    });
});

jQuery(document).ready(function () {
    
    if(jQuery('.navbar').length == 1) {
        
        jQuery('.postt').addClass("hiddenn").viewportChecker({
            classToAdd: 'visiblee animated rollIn',
            offset: 100
        });
        jQuery('.facility-con').on('click', function () {
            jQuery('.face-list').find('.active').removeClass('active')
            var id = jQuery(this).attr('data-list');
            jQuery(id).addClass('active')
        })
        jQuery('.post').addClass("hiddenn").viewportChecker({
            classToAdd: 'visiblee animated bounceInLeft',
            offset: 100
        });
        jQuery('.post-foot').addClass("hiddenn").viewportChecker({
            classToAdd: 'visiblee animated pulse',
            offset: 100
        });
    }

});

