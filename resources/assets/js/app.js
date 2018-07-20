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

window.Form = Form;

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
Vue.component('IndexPage',require('./components/IndexPage'));
Vue.component('HeaderNav', require('./components/HeaderNav'));
Vue.component('fa', FontAwesomeIcon);
Vue.component('pinned', require('./components/pinned'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
    router,
});