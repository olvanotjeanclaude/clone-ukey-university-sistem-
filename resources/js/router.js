import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import ExempleComponent from "./components/ExampleComponent.vue";
import Panel from "./components/Panel.vue"
import LessonInformation from "./components/LessonInformation.vue"
const routes = [
    { path: "/", component: Panel },
    { path: "/test", component: ExempleComponent },
    { path: "/ders-bilgileri/:lessonId", component: LessonInformation }
];

const router = new VueRouter({
    mode: "history",
    routes: routes
})

export default router