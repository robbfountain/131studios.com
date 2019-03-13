/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

/**
 * Import the main vue components we need
 * for Router, Vuex, Routes etc
 */
import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './routes';


import SmoothScroll from 'vue-smooth-scroll';
/**
 * Import our form class
 */
import Form from './classes/Form';
import {library} from '@fortawesome/fontawesome-svg-core'
import {fas} from '@fortawesome/pro-solid-svg-icons'
import {far} from '@fortawesome/pro-regular-svg-icons'
import {fal} from '@fortawesome/pro-light-svg-icons'
import {fab} from '@fortawesome/free-brands-svg-icons'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'
//
// import Isotope from 'isotope-layout';
// import ImagesLoaded from 'imagesloaded';
//
//
// var elem = document.querySelector('.grid');
//
// ImagesLoaded(elem, function(instance) {
//     var iso = new Isotope( elem, {
//         itemSelector: '.grid-item',
//         layoutMode: 'fitRows',
//         getSortData: {
//             id: '.id parseInt',
//             name: '.name',
//         },
//         sortBy: 'name'
//     });
//
//     // bind sort button click
//     var sortByGroup = document.querySelector('.sort-by-button-group');
//     sortByGroup.addEventListener( 'click', function( event ) {
//         // only button clicks
//         if ( !matchesSelector( event.target, '.button' ) ) {
//             return;
//         }
//         var sortValue = event.target.getAttribute('data-sort-value');
//         iso.arrange({ sortBy: sortValue });
//     });
//
// // change is-checked class on buttons
//     var buttonGroups = document.querySelectorAll('.button-group');
//     for ( var i=0; i < buttonGroups.length; i++ ) {
//         buttonGroups[i].addEventListener( 'click', onButtonGroupClick );
//     }
//
//     function onButtonGroupClick( event ) {
//         // only button clicks
//         if ( !matchesSelector( event.target, '.button' ) ) {
//             return;
//         }
//         var button = event.target;
//         button.parentNode.querySelector('.is-checked').classList.remove('is-checked');
//         button.classList.add('is-checked');
//     }
// });



Vue.use(SmoothScroll);

window.Form = Form;

import hljs from 'highlight.js';
window.hljs = hljs;



/**
 * Load Vue Router and initialize it
 */
Vue.use(VueRouter);
const router = new VueRouter({
    routes,
    mode: 'history'
});

library.add(fas)
library.add(far)
library.add(fal)
library.add(fab)

require('owl.carousel');

require('../../../node_modules/imagesloaded/imagesloaded.pkgd');
require('../../../node_modules/masonry-layout/dist/masonry.pkgd');

/**
 * Global Vue Components
 */
Vue.component('IndexPage', require('./components/IndexPage'));
Vue.component('HeaderNav', require('./components/HeaderNav'));
Vue.component('fa', FontAwesomeIcon);
Vue.component('pinned', require('./components/pinned'));
Vue.component('Home', require('./components/Home'));
Vue.component('About', require('./components/About'));
Vue.component('Contact', require('./components/Contact'));
Vue.component('Services', require('./components/Services'));
Vue.component('Projects', require('./components/Work'));
Vue.component('Quote', require('./components/Quote'));
Vue.component('Modal', require('./components/Modal'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
    router,
    data() {
        return {
            modal: false,
        }
    }
});