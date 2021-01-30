require('./bootstrap');
import "bootstrap"
import "bootstrap/dist/css/bootstrap.min.css"

window.Vue = require('vue');
import router from "./router"
import store from "./Stores/Store"

Vue.component('example-component', require("./Mode_test/ExampleComponent.vue").default);
Vue.component('nav-top', require("./Layouts/navtop.vue").default);
Vue.component("main-page", require("./components/MainPage").default);

const app = new Vue({
    router: router,
    el: '#app',
    store
});