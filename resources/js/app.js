require('./bootstrap');
const Vue = require('vue');
import Notifications from 'vue-notification'
Vue.use(Notifications);

require('../../node_modules/jquery/dist/jquery.min.js');
require('../../node_modules/js-datepicker');
require('../../node_modules/bootstrap-select-country/dist/js/bootstrap-select-country.min.js');

Vue.component('news', require('./components/newsComponent.vue').default);
Vue.component('travelBooking', require('./components/travelBooking.vue').default);
Vue.component('chat_box', require('./components/chatComponent.vue').default);


const app = new Vue({
    el: '#app'
});


$('.countrypicker').countrypicker();
const datepicker = require('js-datepicker');

const picker = datepicker('#depart', {
    formatter: (input, date, instance) => {
        const value = date.toLocaleDateString();
        input.value = value // => '1/1/2099'
    }
});
$(document).ready(function(){
    $('#action_menu_btn').click(function(){
        $('.action_menu').toggle();
    });
});
datepicker('#arrivee', {
    formatter: (input, date, instance) => {
        const value = date.toLocaleDateString();
        input.value = value // => '1/1/2099'
    }
});

