/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */
// ( function() {
// 	var container, button, menu, links, i, len;

// 	container = document.getElementById( 'site-navigation' );
// 	if ( ! container ) {
// 		return;
// 	}

// 	button = container.getElementsByTagName( 'button' )[0];
// 	if ( 'undefined' === typeof button ) {
// 		return;
// 	}

// 	menu = container.getElementsByTagName( 'ul' )[0];

// 	// Hide menu toggle button if menu is empty and return early.
// 	if ( 'undefined' === typeof menu ) {
// 		button.style.display = 'none';
// 		return;
// 	}

// 	menu.setAttribute( 'aria-expanded', 'false' );
// 	if ( -1 === menu.className.indexOf( 'nav-menu' ) ) {
// 		menu.className += ' nav-menu';
// 	}

// 	button.onclick = function() {
// 		if ( -1 !== container.className.indexOf( 'toggled' ) ) {
// 			container.className = container.className.replace( ' toggled', '' );
// 			button.setAttribute( 'aria-expanded', 'false' );
// 			menu.setAttribute( 'aria-expanded', 'false' );
// 		} else {
// 			container.className += ' toggled';
// 			button.setAttribute( 'aria-expanded', 'true' );
// 			menu.setAttribute( 'aria-expanded', 'true' );
// 		}
// 	};

// 	// Get all the link elements within the menu.
// 	links    = menu.getElementsByTagName( 'a' );

// 	// Each time a menu link is focused or blurred, toggle focus.
// 	for ( i = 0, len = links.length; i < len; i++ ) {
// 		links[i].addEventListener( 'focus', toggleFocus, true );
// 		links[i].addEventListener( 'blur', toggleFocus, true );
// 	}

// 	/**
// 	 * Sets or removes .focus class on an element.
// 	 */
// 	function toggleFocus() {
// 		var self = this;

// 		// Move up through the ancestors of the current link until we hit .nav-menu.
// 		while ( -1 === self.className.indexOf( 'nav-menu' ) ) {

// 			// On li elements toggle the class .focus.
// 			if ( 'li' === self.tagName.toLowerCase() ) {
// 				if ( -1 !== self.className.indexOf( 'focus' ) ) {
// 					self.className = self.className.replace( ' focus', '' );
// 				} else {
// 					self.className += ' focus';
// 				}
// 			}

// 			self = self.parentElement;
// 		}
// 	}

// 	/**
// 	 * Toggles `focus` class to allow submenu access on tablets.
// 	 */
// 	( function( container ) {
// 		var touchStartFn, i,
// 			parentLink = container.querySelectorAll( '.menu-item-has-children > a, .page_item_has_children > a' );

// 		if ( 'ontouchstart' in window ) {
// 			touchStartFn = function( e ) {
// 				var menuItem = this.parentNode, i;

// 				if ( ! menuItem.classList.contains( 'focus' ) ) {
// 					e.preventDefault();
// 					for ( i = 0; i < menuItem.parentNode.children.length; ++i ) {
// 						if ( menuItem === menuItem.parentNode.children[i] ) {
// 							continue;
// 						}
// 						menuItem.parentNode.children[i].classList.remove( 'focus' );
// 					}
// 					menuItem.classList.add( 'focus' );
// 				} else {
// 					menuItem.classList.remove( 'focus' );
// 				}
// 			};

// 			for ( i = 0; i < parentLink.length; ++i ) {
// 				parentLink[i].addEventListener( 'touchstart', touchStartFn, false );
// 			}
// 		}
// 	}( container ) );
// } )();

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
