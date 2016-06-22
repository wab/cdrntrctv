/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        // Normal Clicks

        // Foundation init
        $(document).foundation();

        $('.cookies-message').cookieBar({ 
          closeButton : '.button' 
        });
        
        // Toggle nav
        $(function() {
          $('.toggle-nav').click(function() {
            $('body').toggleClass('show-nav');
            $(this).toggleClass('is-active');
             return false;
          });
          
        });

        // Toggle with hitting of ESC
        $(document).keyup(function(e) {
            if (e.keyCode === 27) {
           $('body').toggleClass('show-nav');
           $('.toggle-nav').toggleClass('is-active');
          }
        });

        //Sories carousel

        var stories =  $('.stories-carousel');
        
        // Stories
        stories.owlCarousel({
          loop:false,
          margin:20,
          responsiveClass:true,
          nav:false,
          dots:false,
          lazyLoad: true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:4
              }
          }
        });

        // Custom Navigation Events
        $(".stories .next").click(function(event) {
          event.preventDefault();
          stories.trigger('next.owl.carousel');   
        });

        $(".stories .prev").click(function(event) {
           event.preventDefault();
          stories.trigger('prev.owl.carousel');
        });

        // Animations

        $('.counter').counterUp();

        var meter = $('.progress-meter');
        
        meter.waypoint(
          function(direction) {
            meter.addClass('animated');
          },{
            offset:'80%'
          }
        );

        var picto = $('.argpicto');
        
        picto.waypoint(
          function(direction) {
            picto.addClass('animated');
          },{
            offset:'80%'
          }
        );

        

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
        
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
        
        // Carousel accueil
        $('.carousel').owlCarousel({
          items : 1,
          dots: true,
          nav: false,
          lazyLoad: true,
          autoplay: true
        });

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // Home page
    'page_template_page_logiciels': {
      init: function() {
        // JavaScript to be fired on the home page
        
        // Carousel accueil
        $('.gallery-carousel').owlCarousel({
          items : 1,
          dots: false,
          nav: false,
          autoplay: false,
          thumbs: true,
          thumbsPrerendered: true,
          lazyLoad: true,
          autoheight: true
        });

      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'entreprise': {
      init: function() {
        // JavaScript to be fired on the about us page

        //Sories carousel

        var equipe =  $('.equipe-carousel');

        // equipe
        equipe.owlCarousel({
          loop:true,
          margin:0,
          responsiveClass:true,
          nav:false,
          dots:false,
          lazyLoad: true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:2
              },
              1000:{
                  items:3
              }
          }
        });

        // Custom Navigation Events
        $(".equipe .next").click(function(e) {
          e.preventDefault();
          equipe.trigger('next.owl.carousel');
        });

         $(".equipe .prev").click(function(e) {
            e.preventDefault();
            equipe.trigger('prev.owl.carousel');
        });

        //Testimony carousel

        var testimony =  $('.testimony-carousel');

        // equipe
        testimony.owlCarousel({
          loop:true,
          margin:0,
          responsiveClass:true,
          nav:false,
          dots:true,
          lazyLoad: true,
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:2
              }
          }
        });
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
