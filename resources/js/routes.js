import home from './components/profile/pages/home.vue';
import progressColis from './components/profile/pages/expedictions/progressColis.vue';
import colisPostDone from './components/profile/pages/expedictions/colisPostDone.vue';
import travelPostDone from './components/profile/pages/expedictions/travelPostDone.vue';

export default {
    mode: 'history',
    baseUrl: window.location,
    routes: [
        {
            path: '/',
            name: 'home',
            component: home
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