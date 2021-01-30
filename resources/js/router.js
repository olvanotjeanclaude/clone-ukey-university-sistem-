import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import ExempleComponent from "../js/Mode_test/ExampleComponent.vue";

import Panel from "../js/components/Dashboard/Panel.vue";
import LessonInformation from "../js/components/Lessons/LessonInformation.vue";
import LessonContent from "../js/components/Lessons/LessonContent.vue"

const studentList = () =>
    import ("../js/components/Students/StudentList.vue");


import MainPage from "./components/MainPage.vue";
import Groups from "./components/Groups/Groups.vue"
import GroupDetail from "./components/Groups/GroupDetailComponent.vue"

import Exercice from "./components/ExerciseAndProject/Exercice.vue"
import ExerciceDetailComponent from "./components/ExerciseAndProject/ExerciceDetailComponent.vue";

import Exams from "../js/components/Exams/Exams.vue";
import ExamsDetail from "../js/components/Exams/ExamsDetailComponent.vue";
import ExamResult from "../js/components/Exams/ExamEvaluation.vue"
import ExamStartComponent from "../js/components/Exams/ExamStartComponent.vue"

const routes = [
    { path: "/", component: Panel },
    { path: "/test", component: ExempleComponent },
    {
        path: "/lesson/:lessonId",
        component: MainPage,
        children: [
            { path: "/lesson/:lessonId/student/list", component: studentList },
            { path: "/lesson/:lessonId/ders-bilgileri", component: LessonInformation },
            { path: "/lesson/:lessonId/content", component: LessonContent },
            { path: "/lesson/:lessonId/group", component: Groups, },
            { path: "/lesson/:lessonId/group/group-detail", component: GroupDetail },
            { path: "/lesson/:lessonId/exercises", component: Exercice },
            {
                path: "/lesson/:lessonId/exercises/detail",
                component: ExerciceDetailComponent
            },
            { path: "/lesson/:lessonId/exams", component: Exams },
            { path: "/lesson/:lessonId/exams/detail", component: ExamsDetail },
            { path: "/lesson/:lessonId/exams/result", name: "examResult", component: ExamResult },
            { path: "/lesson/:lessonId/exams/start", name: "startingExam", component: ExamStartComponent },
        ]
    },
];

const router = new VueRouter({
    mode: "history",
    routes: routes
})

export default router