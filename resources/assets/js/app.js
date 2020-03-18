/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
require('./bootstrap');

/**
 * Import the main vue components we need
 */
import Vue from 'vue';
import InstantSearch from 'vue-instantsearch';
Vue.use(InstantSearch);

/**
 * Import our form class
 */
import Form from 'form-class';
window.Form = Form;

import hljs from 'highlight.js';
hljs.initHighlightingOnLoad();


import {library} from '@fortawesome/fontawesome-svg-core'

import {faHome, faServer, faPaintBrush, faShareAlt, faSearch, faCheckCircle } from '@fortawesome/pro-solid-svg-icons'
import {faChevronRight, faInfoCircle, faBars, faAngleDoubleRight, faAngleRight, faMapPin, faPhone as faPhoner, faEnvelope as faEnveloper } from '@fortawesome/pro-regular-svg-icons'
import {faStar, faMobileAlt, faSearch as falSearch, faPhone, faEnvelope, faSpinner, faDatabase, faShield, faWrench, faAnalytics, faGlobe, faChartNetwork, faServer as faServerL} from '@fortawesome/pro-light-svg-icons'
import {faTwitterSquare, faFacebookSquare} from '@fortawesome/free-brands-svg-icons'
import {FontAwesomeIcon} from '@fortawesome/vue-fontawesome'

library.add(faHome, faServer, faPaintBrush, faShareAlt, faSearch, faCheckCircle, faAngleDoubleRight);
library.add(faChevronRight, faInfoCircle, faBars, faAngleRight, faMapPin, faPhoner, faEnveloper);
library.add(faStar, faMobileAlt, falSearch, faPhone, faEnvelope, faSpinner, faDatabase, faShield, faWrench, faAnalytics, faGlobe, faChartNetwork, faServerL);
library.add(faTwitterSquare, faFacebookSquare);

/**
 * Global Vue Components
 */
Vue.component('fa', FontAwesomeIcon);
Vue.component('pinned', require('./components/pinned'));
Vue.component('Contact', require('./components/Contact'));
Vue.component('Dropdown',require('./components/Dropdown'));
Vue.component('SubscriptionForm',require('./components/SubscriptionForm'));
Vue.component('BlogSearch', require('./components/blog-search'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
});
