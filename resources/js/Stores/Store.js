import Vue from "vue"
import Vuex from "vuex"

Vue.use(Vuex);
import exams from "./modules/module.exams";
import users from "./modules/module.user";
import lessons from "./modules/module.lessons";

const store = new Vuex.Store({
    modules: {
        exams,
        users,
        lessons
    }
});

export default store;