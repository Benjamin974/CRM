/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

require('./bootstrap');

import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify/lib';
import 'vuetify/dist/vuetify.min.css'

// Route information for vue router

import Routes from './routes.js';

//component File
import App from './views/App.vue';

Vue.use(Vuetify);

const app = new Vue({
    el: '#app',

    router: Routes,
    render: h => h(App),
});

export default app;

