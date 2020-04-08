window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

let token = document.head.querySelector('meta[name="csrf-token"]');

window.axios.defaults.headers.common = {
    'X-CSRF-TOKEN': token.content,
    'X-Requested-With': 'XMLHttpRequest',
};

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

/**
 * Hilight JS
 */
import hljs from 'highlight.js';
hljs.initHighlightingOnLoad();

/**
 * Font Awesome
 */
import {library} from '@fortawesome/fontawesome-svg-core'

import {faHome, faServer, faPaintBrush, faShareAlt, faSearch, faCheckCircle } from '@fortawesome/pro-solid-svg-icons'
import {faChevronRight, faInfoCircle, faBars, faAngleDoubleRight, faAngleRight, faMapPin, faPhone as faPhoner, faEnvelope as faEnveloper } from '@fortawesome/pro-regular-svg-icons'
import {faStar, faMobileAlt, faSearch as falSearch, faPhone, faEnvelope, faSpinner, faDatabase, faShield, faWrench, faAnalytics, faGlobe, faChartNetwork, faServer as faServerL} from '@fortawesome/pro-light-svg-icons'
import {faTwitterSquare, faFacebookSquare} from '@fortawesome/free-brands-svg-icons'

library.add(faHome, faServer, faPaintBrush, faShareAlt, faSearch, faCheckCircle, faAngleDoubleRight);
library.add(faChevronRight, faInfoCircle, faBars, faAngleRight, faMapPin, faPhoner, faEnveloper);
library.add(faStar, faMobileAlt, falSearch, faPhone, faEnvelope, faSpinner, faDatabase, faShield, faWrench, faAnalytics, faGlobe, faChartNetwork, faServerL);
library.add(faTwitterSquare, faFacebookSquare);

import "./components";

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
});
