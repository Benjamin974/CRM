import Vue from 'vue';
import VueRouter from 'vue-router';

import Home from './components/Home';
import About from './components/About';
import Client from './components/Client';

import Vuetify from 'vuetify/lib';
import 'vuetify/dist/vuetify.min.css'
Vue.use(Vuetify);

Vue.use(VueRouter);

const router = new VueRouter({
mode: 'history',
routes: [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        name: 'about',
        component: About
    },
    {
        path: '/client',
        name: 'client',
        component: Client
    }
]
});

export default router;