(function($) {

    var homeSectionHeight = $(window).height() -100;

    $(".home-section").height(homeSectionHeight);

    $(window).resize(function () {
        $(".home-section").height(homeSectionHeight);
    });

    function scrollToAnchor(className){
        var tag = $(className);
        $('html,body').animate({scrollTop: tag.offset().top},'slow');
    }

    $('.anchor-button').on('click', function () {
        scrollToAnchor('.welcome-section');
    });

    $('.flexslider').flexslider({
        animation: "slide",
        animationLoop: false,
        itemMax: 4,
        itemWidth: ($(window).width()/3),
        controlNav: false,
        prevText: '<',
        nextText: '>'
    });

})(jQuery);