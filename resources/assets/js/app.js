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
window.Form = Form;

/**
 * Load Vue Router and initialize it
 */
Vue.use(VueRouter);
const router = new VueRouter({
    routes,
    mode: 'history'
});

/**
 * Global Vue Components
 */
Vue.component('HeaderNav', require('./components/HeaderNav'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
const app = new Vue({
    el: '#app',
    router,
});