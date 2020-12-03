import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import ExempleComponent from "./components/ExampleComponent.vue";
import Panel from "./components/Panel.vue"

const routes = [
    { path: "/", component: Panel },
    { path: "/test", component: ExempleComponent }
];

const router = new VueRouter({
    mode: "history",
    routes: routes
})

export default router