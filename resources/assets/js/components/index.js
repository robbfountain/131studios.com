import Vue from "vue";
import {FontAwesomeIcon} from "@fortawesome/vue-fontawesome";

import Pinned from "./Pinned";
import Contact from "./Contact";
import Dropdown from "./Dropdown";
import SubscriptionForm from "./SubscriptionForm";
import BlogSearch from "./blog-search";

/**
 * Global Vue Components
 */
Vue.component('fa', FontAwesomeIcon);
Vue.component('pinned', Pinned);
Vue.component('Contact', Contact);
Vue.component('Dropdown', Dropdown);
Vue.component('SubscriptionForm', SubscriptionForm);
Vue.component('BlogSearch', BlogSearch);
