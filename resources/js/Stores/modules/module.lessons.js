import axios from "axios";
import store from "../Store";
var uri = "http://localhost:8000/api";

const state = {
    lessons: [],
    lesson: [],
}

const mutations = {
    SET_LESSONS(state, lessons) {
        state.lessons = lessons;
        return state.lessons;
    },
    SET_LESSON(state, lesson) {
        state.lesson = lesson;
        return state.lesson;
    }
}

const getters = {
    allLessons: (state) => {
        return state.lessons;
    },

    getLessonById: (state) => (lessonId) => {
        //return state.lessons
        return state.lessons.filter((element) => element.id == lessonId);
    },

    getLessonName: (state) => (lessonId) => {
        var lesson = state.lessons.find(lesson => {
            return lesson.id == lessonId;
        });
        if (lesson) {
            return lesson.name;
        }
        return "no name";
    }
}

const actions = {
    getAllLessons({ commit }) {
        axios.get(uri + "/lesson")
            .then(response => {
                commit("SET_LESSONS", response.data)
            })
            .catch((e) => this.errors.push(e));
    },
}

export default {
    namespaced: true,
    state: state,
    getters: getters,
    mutations: mutations,
    actions: actions
}