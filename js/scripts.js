(function ($, root, undefined) {

    $(function () {
        var stickyNavTop = $('.navbar-toggle').offset().top;

        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > stickyNavTop) {
                $('.navbar-toggle').addClass('sticky');
                $('h1.logo').addClass('sticky-logo');
            } else {
                $('.navbar-toggle').removeClass('sticky');
                $('h1.logo').removeClass('sticky-logo');
            }
        };

        stickyNav();
        $(window).scroll(stickyNav);
        
        //stickybits('.fixedsticky', {useStickyClasses: true});
        
         // Nav Button
        var navButton = $('.menu-item > a');
        var tapped = false;

    });
    

})(jQuery, this);



