import Vue from 'vue';
import Layout from './views/Layout.vue'
import Vuetify from 'vuetify/lib'
import 'vuetify/dist/vuetify.min.css'

Vue.use(Vuetify);

var vm = new Vue({
    el: '#tuto',
    components: { Layout },
});
