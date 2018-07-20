$(document).ready(function () {

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: true
    });
    $('.play').on('click', function () {
        owl.trigger('play.owl.autoplay', [3000])
    })
    $('.stop').on('click', function () {
        owl.trigger('stop.owl.autoplay')
    });

    var $grid = $('.grid');
    $grid.imagesLoaded(function () {
        $grid.isotope({
            itemSelector: ".grid-item",
            masonry: {
                columnWidth: 100
            }
        });
    });

    $('.filters-button-group').on('click', 'button', function () {
        var filterValue = $(this).attr('data-filter');
        // use filterFn if matches value
        $grid.isotope({filter: filterValue});
    });

});