

require('./bootstrap');

window.Vue = require('vue');
import vuetify from './vuetify'
import router from './vuerouter'
import User from './Helpers/user'
window.User = User
window.EventBus = new Vue()

// editor
import Vue from 'vue'
import VueSimplemde from 'vue-simplemde'
import 'simplemde/dist/simplemde.min.css'
Vue.component('vue-simplemde', VueSimplemde)

// parse mde editor data
import md from 'marked'
window.md = md

// Vue.component('example-component', require('./components/ExampleComponent.vue').default);
import home from './components/appHome'


new Vue({

    el: '#app',
    vuetify,
    router,
    components:{
        'home' :home
    }
});
