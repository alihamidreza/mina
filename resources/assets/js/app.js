import Vue from 'vue'
import VueMaterial from 'vue-material'
import 'vue-material/dist/vue-material.min.css'
import Select from './components/Select.vue';
require('./bootstrap');
Vue.use(VueMaterial);
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('SelectBox' , Select);
const app = new Vue({
    el: '#app',
});
