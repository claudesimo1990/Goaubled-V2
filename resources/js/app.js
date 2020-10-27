require('./bootstrap');
const Vue = require('vue');
const Vuex = require('vuex');

window.moment = require('moment'); 

import Notifications from 'vue-notification';
import VCalendar from  'v-calendar';
import {BootstrapVue, BootstrapVueIcons}  from 'bootstrap-vue';
import VueTyperPlugin from 'vue-typer'
import VueLetterAvatar from 'vue-letter-avatar';
import module from './store/store';
import VueToast from 'vue-toast-notification';
import 'vue-toast-notification/dist/theme-default.css';
 
Vue.use(VueToast);

Vue.use(VueLetterAvatar);
Vue.use(Notifications);
Vue.use(BootstrapVue);
Vue.use(BootstrapVueIcons)
Vue.use(VueTyperPlugin);
Vue.use(Vuex);

window.Store = new Vuex.Store(module)

// Use v-calendar & v-date-picker components
Vue.use(VCalendar, {
  componentPrefix: 'vc'
});

$('#myCarousel').carousel({
  interval: 3000,
})

// Global register
Vue.component('news', require('./components/newsComponent.vue').default);
Vue.component('pagination', require('laravel-vue-pagination'));
Vue.component('home-news-component', require('./components/homeNewsComponent.vue').default);
Vue.component('how-it-works-component', require('./components/howItWorksComponent.vue').default);
Vue.component('coli-component', require('./components/posts/coli.vue').default);
Vue.component('travel-component', require('./components/posts/travel.vue').default);
Vue.component('booking-travel-component', require('./components/booking/travel.vue').default);
Vue.component('booking-coli-component', require('./components/booking/coli.vue').default);
Vue.component('search-component', require('./components/search/search.vue').default);
Vue.component('results-component', require('./components/search/results.vue').default);
Vue.component('how-work', require('./components/home/howWork.vue').default);
Vue.component('about', require('./components/home/about.vue').default);
Vue.component('teams', require('./components/home/teams.vue').default);
Vue.component('destinations', require('./components/home/destinations.vue').default);
Vue.component('profile-component', require('./components/profile/profile.vue').default);
Vue.component('app-component', require('./components/messages/app.vue').default);
Vue.component('notification', require('./components/home/notifications.vue').default);

window.app = new Vue({
    el: '#app',
    data() {
      return {
        count: 0
      }
    },
    methods: {
      
    }
});
