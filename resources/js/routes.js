import home from './components/profile/pages/home.vue';
import messagerie from './components/profile/pages/messages.vue';
import progressColis from './components/profile/pages/expedictions/progressColis.vue';
import colisPostDone from './components/profile/pages/expedictions/colisPostDone.vue';
import travelPostDone from './components/profile/pages/expedictions/travelPostDone.vue';

export default {
    baseUrl: window.location,
    mode: 'history',
    routes: [
        {
            path: '/',
            name: 'home',
            component: home
        },
        {
            path: '/messageries',
            name: 'messageries',
            component: messagerie
        },      
        {
            path: '/progressColis',
            name: 'progressColis',
            component: progressColis
        },      
        {
            path: '/colisPostDone',
            name: 'colisPostDone',
            component: colisPostDone
        },      
        {
            path: '/travelPostDone',
            name: 'travelPostDone',
            component: travelPostDone
        },      
    ]
}