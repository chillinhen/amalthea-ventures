(function ($, root, undefined) {

    $(function () {
        //var stickyNavTop = $('#top-nav').offset().top;

        var stickyNav = function () {
            var scrollTop = $(window).scrollTop();

            if (scrollTop > 300) {
                $('#top-nav').addClass('sticky');
                //$('h1.logo').addClass('sticky-logo');
            } else {
                $('#top-nav').removeClass('sticky');
                //$('h1.logo').removeClass('sticky-logo');
            }
        };

        stickyNav();
        $(window).scroll(stickyNav);

        //stickybits('.fixedsticky', {useStickyClasses: true});

        var navButton = $('[class*="item-has-children"]');
        navButton.each(function () {

            $(this).append('<span class="icon"> </span>');
            $(this).children('.icon').on('click', function () {
                $(this).toggleClass('open');
                $(this).siblings('ul').toggleClass('show');
                e.preventDefault();
            });

        });
        $('.navbar-toggle').on('touchstart click', function (e) {
            $('#off-nav').toggleClass('open');
            $(this).toggleClass('open');
            e.preventDefault();
        });

    });


})(jQuery, this);



