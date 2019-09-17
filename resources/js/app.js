
require('./bootstrap');

window.Vue = require('vue');

// import Dashboard from './components/Dashboard.vue';


import VueRouter from 'vue-router'
Vue.use(VueRouter)

let routes = [
    { path: '/dashboard', component: require('./components/Dashboard.vue').default },
    { path: '/profile', component: require('./components/Profile.vue').default  }
]


const router = new VueRouter({
    routes ,// short for `routes: routes`,
    mode: 'history' // Esto evitar #/tusitio
})


//  Vue.component('example-component', require('./components/ExampleComponent.vue').default);
// Vue.component('profile', require('./components/Profile.vue').default);


const app = new Vue({
    el: '#app',
    router
});
