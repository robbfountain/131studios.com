$(document).ready(function () {

    var owl = $('.owl-carousel');
    owl.owlCarousel({
        items: 3,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        nav: false
    });
    // $('.play').on('click', function () {
    //     owl.trigger('play.owl.autoplay', [3000])
    // });
    // $('.stop').on('click', function () {
    //     owl.trigger('stop.owl.autoplay')
    // });

    var $grid = $('.grid').imagesLoaded(function () {
        $grid.masonry({
            itemSelector: '.grid-item',
            columnWidth: '.max-w-sm'
        });
    });
});