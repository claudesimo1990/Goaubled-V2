require('./bootstrap');
const Vue = require('vue');
import Notifications from 'vue-notification';
Vue.use(Notifications);

Vue.component('news', require('./components/newsComponent.vue').default);
Vue.component('travelBooking', require('./components/travelBooking.vue').default);
Vue.component('chat', require('./components/chatComponent.vue').default);
Vue.component('dasboard-component', require('./components/dasboardComponent.vue').default);
Vue.component('test-component', require('./components/testComponent.vue').default);
Vue.component('home-news-component', require('./components/homeNewsComponent.vue').default);
Vue.component('how-it-works-component', require('./components/howItWorksComponent.vue').default);

const app = new Vue({
    el: '#app'
});

