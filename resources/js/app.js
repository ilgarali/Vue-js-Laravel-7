import router from './router'
import store from './store'


require('./bootstrap');

window.Vue = require('vue');

Vue.component('Home', require('./views/Home.vue').default);

const app = new Vue({
    router,
    store,
    el: '#app',
});
