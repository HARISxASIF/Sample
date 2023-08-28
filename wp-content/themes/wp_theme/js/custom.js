/*
WordPress Hack
----------------------------------
Wrap all document in to following.
jQuery(document).ready(function($) {
	...
});
*/
jQuery(document).ready(function($) {

$(document).ready(function(e) {
/* To add and remove active class on clicked li of navigation. */
var selector = 'nav li';

$(selector).on('click', function(){
    $(selector).removeClass('active');
    $(this).addClass('active');
});
/* END */

/* To add class first and last on first and last of all li. */
$('ul').children('li:first-child').addClass('first');
$('ul').children('li:last-child').addClass('last');
/* END */

});
/*Bootstrap menu on hover*/
// Bootstrap menu magic
  /*$(window).resize(function() {
    if ($(window).width() < 768) {
      $(".dropdown-toggle").attr('data-toggle', 'dropdown');
    } else {
      $(".dropdown-toggle").removeAttr('data-toggle dropdown');
    }
  });*/
/*Bootstrap menu on hover*/
/* === Sticky Menu === 
    (function () {
        var nav = $('header');
        var scrolled = false;

        $(window).scroll(function () {

            if (110 < $(window).scrollTop() && !scrolled) {
                nav.addClass('sticky animated fadeInDown').animate({ 'margin-top': '0px' });

                scrolled = true;
            }

            if (110 > $(window).scrollTop() && scrolled) {
                nav.removeClass('sticky animated fadeInDown').css('margin-top', '0px');

                scrolled = false;
            }
        });
    }());*/
			

			// Search
	jQuery( '#search-button' ).click( function () {
		console.log( "Open Search, Search Centered" );
		$( "div.mk-fullscreen-search-overlay" ).addClass( "mk-fullscreen-search-overlay-show" );
	} );
	jQuery( "a.mk-fullscreen-close" ).click( function () {
		console.log( "Closed Search" );
		$( "div.mk-fullscreen-search-overlay" ).removeClass( "mk-fullscreen-search-overlay-show" );
	} );
/*Search End*/
});