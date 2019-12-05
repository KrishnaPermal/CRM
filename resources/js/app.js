/**
 * First, we will load all of this project's Javascript utilities and other
 * dependencies. Then, we will be ready to develop a robust and powerful
 * application frontend using useful Laravel and JavaScript libraries.
 */

import './bootstrap';
import Vue from 'vue';
import Vuetify from 'vuetify';

//Route information for Vue Router
import Routes from './routes.js';


//Component File
import Layout from './layouts/Layout.vue';

Vue.use(Vuetify,{
    // components: {
    //     VApp,
    //   VRating,
    //   VToolbar,
    // },
  });

  const app = new Vue({
    el: '#app',
    router: Routes,
    components:{Layout},
    vuetify: new Vuetify({})
});

export default layout;
