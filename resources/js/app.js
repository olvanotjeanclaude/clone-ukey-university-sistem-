require('./bootstrap');
import "bootstrap"
import "bootstrap/dist/css/bootstrap.min.css"

window.Vue = require('vue');
import router from "./router"

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

const app = new Vue({
    router: router,
    el: '#app',
});