import Vue from 'vue';
import Vuetify from 'vuetify';

import 'vuetify/dist/vuetify.min.css'


import Layout from './views/Layout.vue';


Vue.use(Vuetify)

var vm = new Vue({
    el: '#app',
    components:{
        Layout
    }
});