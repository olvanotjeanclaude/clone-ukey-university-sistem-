<template>
  <div>
    <div v-if="sidebar">
      <div class="container-fluid">
        <div class="row bg-light border-bottom rowBredCrumb">
          <div class="col-md-3"></div>
          <div class="col-md-9 px-0">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item">
                  <a href="#">Home</a>
                </li>
                <li class="breadcrumb-item">
                  <a href="#">Library</a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">
                  id : {{ lessonId }}
                </li>
              </ol>
            </nav>
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
import Sidebar from "../../js/Layouts/sidebar.vue";
import LessonContent from "./Lessons/LessonContent.vue";
export default {
  data() {
    return {
      sidebar: false,
      lessonId: undefined,
      lessonContent: false,
    };
  },
  components: {
    "sidebar-component": Sidebar,
    LessonContent,
  },
  created() {
    this.lessonId = this.$route.params.lessonId;
    if (this.lessonId != undefined) {
      this.sidebar = true;
    }
  },
  watch: {
    $route(to, from) {
      this.lessonId = to.params.lessonId;
    },
  },
};
</script>
