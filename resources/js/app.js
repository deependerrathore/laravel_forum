
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
require('./project');


window.Vue = require('vue');

import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

Vue.use(ElementUI);

const app = new Vue({
    el: '#app',
});
