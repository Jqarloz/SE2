 $(function() {

     var Page = (function() {

         var $navArrows = $('#nav-arrows'),
             $nav = $('#nav-dots > span'),
             slitslider = $('#slider').slitslider({
                 onBeforeChange: function(slide, pos) {

                     $nav.removeClass('nav-dot-current');
                     $nav.eq(pos).addClass('nav-dot-current');

                 }
             }),

             init = function() {

                 initEvents();

             },
             initEvents = function() {

                 // add navigation events
                 $navArrows.children(':last').on('click', function() {

                     slitslider.next();
                     return false;

                 });

                 $navArrows.children(':first').on('click', function() {

                     slitslider.previous();
                     return false;

                 });

                 $nav.each(function(i) {

                     $(this).on('click', function(event) {

                         var $dot = $(this);

                         if (!slitslider.isActive()) {

                             $nav.removeClass('nav-dot-current');
                             $dot.addClass('nav-dot-current');

                         }

                         slitslider.jump(i + 1);
                         return false;

                     });

                 });

             };

         return {
             init: init
         };

     })();

     Page.init();


 });

 $('.play-button').on('click', function() {
     $(this).hide();
     $(this).parent().fadeOut();
     $(this).parent().siblings('.slider-video')[0].play();
 });

 $('.slider-video').on('play', function() {
     $(this).attr('controls', '1');
 });