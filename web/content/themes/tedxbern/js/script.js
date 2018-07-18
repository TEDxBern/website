(function( $ ) {
    var newsletterHeight = $('.newsletter').outerHeight()
        footerHeight = $('footer').outerHeight()
        headerHeight = $('.header-bar').outerHeight()
        substractHeight =  newsletterHeight + footerHeight + headerHeight;

    var respSize = function() {
        var bodyHeight = $('body').height()
            windowHeight = $(window).height()
            containerHeight = windowHeight - substractHeight
            halfHeight = containerHeight / 1.5
            quarterHeight = (halfHeight / 2)  - 2
            thirdHeight = containerHeight - (halfHeight + 16);

            $('.height-full').css('height', Math.floor(halfHeight));
            $('.height-half').css('height', quarterHeight);
            $('.width-third.height-half').css('height', thirdHeight);
    }

    $(window).resize(respSize);

    respSize();



}(jQuery));
