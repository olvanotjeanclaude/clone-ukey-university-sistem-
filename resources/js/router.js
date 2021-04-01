import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import ExempleComponent from "../js/Mode_test/ExampleComponent.vue";

import Panel from "../js/components/Dashboard/Panel.vue";
import LessonInformation from "../js/components/Lessons/LessonInformation.vue";
import lessonDetail from "../js/components/Lessons/LessonInformation.vue";
import LessonContent from "../js/components/Lessons/LessonContent.vue";
import LessonList from "./components/Lessons/LessonList.vue";

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
import ExamStartComponent from "../js/components/Exams/ExamStartComponent.vue";

import Courses from "./components/Course/CoursMaterials.vue";
import CourseDetail from "./components/Course/coursDetail.vue";
import CourseDetailComponent from "./components/Course/CourseDetailComponent.vue";

const routes = [
    { path: "/", component: Panel },
    { path: "/test", component: ExempleComponent },
    { path: "/lessons", component: LessonList },
    {
        path: "/lesson/:lessonId",
        component: MainPage,
        children: [
            { path: "/lesson/:lessonId/student/list", component: studentList },
            { path: "/lesson/:lessonId/ders-bilgileri", component: LessonInformation },
            { path: "/lesson/:lessonId/lessonDetail", component: lessonDetail },
            { path: "/lesson/:lessonId/content", name: "lessonContent", component: LessonContent },
            { path: "/lesson/:lessonId/groups", component: Groups, },
            { path: "/lesson/:lessonId/groups/group-detail", component: GroupDetail },
            { path: "/lesson/:lessonId/exercises", component: Exercice },
            {
                path: "/lesson/:lessonId/exercises/detail",
                component: ExerciceDetailComponent
            },
            { path: "/lesson/:lessonId/exams", component: Exams },
            { path: "/lesson/:lessonId/exams/detail", component: ExamsDetail },
            { path: "/lesson/:lessonId/exams/result", name: "examResult", component: ExamResult },
            { path: "/lesson/:lessonId/exams/start", name: "startingExam", component: ExamStartComponent },
            { path: "/lesson/:lessonId/coursesMaterials", name: "coursMaterials", component: Courses },
            { path: "/lesson/:lessonId/content/coursesDetail", name: "coursDetail", component: CourseDetailComponent },
            { path: "/lesson/:lessonId/coursesMaterials/courseDetail", component: CourseDetail },
        ]
    },
];

const router = new VueRouter({
    mode: "history",
    routes: routes
})

export default router