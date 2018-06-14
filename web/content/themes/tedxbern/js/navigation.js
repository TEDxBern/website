// function to hide navigation when clicked on a nav item, set delay depending on your animation
var closeNav = function(timeout){
    setTimeout(function(){
        jQuery('.hamburger, .navigation, .nav-drawer').removeClass('in');
        jQuery('.shift').removeClass('out');
    },timeout);
};

(function( $ ) {
    var menuToggle = $('a.menu-toggle');
    var contentClose = $('.shift, #page');

    $('.brand, .site').addClass('shift');

    // Hamburger function show/hide nav
    var shiftNav = function(){
        $('.shift').addClass('prep');        
        setTimeout(function(){
            $('.hamburger, .navigation, .nav-drawer, .header-bar').toggleClass('in');
            $('.shift').toggleClass('out').toggleClass('prep');
        }, 150);
        
    };

    // run hamburger function
    menuToggle.on('touchend click', function(event) {
        event.stopPropagation();
        event.preventDefault();
        if(event.handled !== true) {
            
            console.log('hb');
            shiftNav();

            event.handled = true;
        } else {
            return false;
        }
    });
    
    // close navigation when tap on content
    contentClose.on('touchend click', function(event) {
        // event.stopPropagation();
        // event.preventDefault();
        if(event.handled !== true) {

            console.log('content');
            closeNav();

            event.handled = true;
        } else {
            return false;
        }
    });
    
    closeNav();
    

    $('.multilang-dropdown').bind('touchstart touchend', function(e) {
        //e.preventDefault();
        $(this).find('.dropdown-container').addClass('in');
    });

    $('.nav-drawer').not('.mainnav').bind('touchstart touchend', function() {
        $(this).find('.dropdown-container').removeClass('in');
    });
    
}(jQuery));
