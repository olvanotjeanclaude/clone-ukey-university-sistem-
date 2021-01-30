import Vue from "vue"
import Vuex from "vuex"

Vue.use(Vuex);
import exams from "./modules/module.exams";
import user from "./modules/module.user";

const store = new Vuex.Store({
    modules: {
        exams,
        user
    }
});

export default store;