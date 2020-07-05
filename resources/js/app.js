require('./bootstrap');
const Vue = require('vue');
import Notifications from 'vue-notification';
Vue.use(Notifications);

Vue.component('news', require('./components/newsComponent.vue').default);
Vue.component('travelBooking', require('./components/travelBooking.vue').default);
Vue.component('chat_box', require('./components/chatComponent.vue').default);
Vue.component('dasboard-component', require('./components/dasboardComponent.vue').default);



const app = new Vue({
    el: '#app'
});

