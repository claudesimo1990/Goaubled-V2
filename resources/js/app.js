require('./bootstrap');
const Vue = require('vue');

import Notifications from 'vue-notification';
import VCalendar from  'v-calendar';
import bootstrapVue  from 'bootstrap-vue';
import VueTyperPlugin from 'vue-typer'

Vue.use(Notifications);
Vue.use(bootstrapVue);
Vue.use(VueTyperPlugin);

// Use v-calendar & v-date-picker components
Vue.use(VCalendar, {
  componentPrefix: 'vc'
});

// Global register
Vue.component('news', require('./components/newsComponent.vue').default);
Vue.component('travelBooking', require('./components/travelBooking.vue').default);
Vue.component('chat', require('./components/chatComponent.vue').default);
Vue.component('dasboard-component', require('./components/dasboardComponent.vue').default);
Vue.component('test-component', require('./components/testComponent.vue').default);
Vue.component('home-news-component', require('./components/homeNewsComponent.vue').default);
Vue.component('how-it-works-component', require('./components/howItWorksComponent.vue').default);
Vue.component('coli-component', require('./components/posts/coli.vue').default);
Vue.component('travel-component', require('./components/posts/travel.vue').default);
Vue.component('booking-travel-component', require('./components/booking/travel.vue').default);
Vue.component('booking-coli-component', require('./components/booking/coli.vue').default);
Vue.component('search-component', require('./components/search/search.vue').default);
Vue.component('results-component', require('./components/search/results.vue').default);

const app = new Vue({
    el: '#app',
});
