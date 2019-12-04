import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './components/Home';
import About from './components/About';
import Client from './components/Clients';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes:[
        {
            path: '/',
            name:'home',
            component: Home
        },
        {
            path: '/about',
            name:'about',
            component: About
        },
        {
            path: '/clients',
            name:'clients',
            component: Client
        },
    ]
});

export default router;