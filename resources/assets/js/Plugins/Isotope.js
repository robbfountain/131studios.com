import Isotope from 'isotope-layout';
import ImagesLoaded from 'imagesloaded';

const elem = document.querySelector('.grid');
ImagesLoaded(elem, function(instance) {
    const iso = new Isotope( elem, {
        itemSelector: '.grid-item',
        layoutMode: 'fitRows',
        filter: 'web',
    });
});