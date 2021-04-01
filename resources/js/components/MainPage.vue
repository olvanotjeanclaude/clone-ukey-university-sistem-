<template>
  <div>
    <div v-if="sidebar">
      <div class="container-fluid">
        <div class="row bg-light border-bottom rowBredCrumb">
          <div class="col-md-3"></div>
          <div class="col-md-9 px-0">
            <bread-crumb></bread-crumb>
          </div>
        </div>
      </div>

      <div id="main-page">
        <sidebar-component :lessonId="lessonId"></sidebar-component>

        <main>
          <router-view></router-view>
        </main>
      </div>
    </div>
  </div>
</template>

<script>
import BreadCrumb from "../Layouts/BreadCrumb.vue";
import Sidebar from "../../js/Layouts/sidebar.vue";
//import LessonContent from "./Lessons/LessonContent.vue";

export default {
  data() {
    return {
      sidebar: false,
      lessonId: null,
      //  isLessonsList:
    };
  },

  components: {
    "sidebar-component": Sidebar,
    "bread-crumb": BreadCrumb,
    //  LessonContent,
  },

  methods: {
    getSideBar() {
      this.lessonId = this.$route.params.lessonId;
      if (this.lessonId != undefined) {
        this.sidebar = true;
      }
    },
  },
  created() {
    this.getSideBar();
  },
};
</script>
