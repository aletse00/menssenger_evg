require('./bootstrap');

window.Vue = require('vue');

// app.js
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)


Vue.component('example-component', require('./components/ExampleComponent.vue'));

const app = new Vue({
    el: '#app'
});
