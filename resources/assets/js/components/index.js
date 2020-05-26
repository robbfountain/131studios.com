import Vue from "vue";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

import Pinned from "./Pinned";
import Contact from "./Contact";
import Dropdown from "./drop-down";
import SubscriptionForm from "./SubscriptionForm";
import BlogSearch from "./blog-search";
import Navigation from './navigation';

/**
 * Global Vue Components
 */
Vue.component('fa', FontAwesomeIcon);
Vue.component('pinned', Pinned);
Vue.component('Contact', Contact);
Vue.component('drop-down', Dropdown);
Vue.component('SubscriptionForm', SubscriptionForm);
Vue.component('BlogSearch', BlogSearch);
Vue.component('navigation',Navigation);
