<template>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 text-capitalize">
      <li class="breadcrumb-item" v-if="allLessons">
        <a href="#">list of lessons</a>
      </li>

      <li class="breadcrumb-item" v-if="lessonName">
        <a href="#"> {{ getLessonName(lessonId) }} </a>
      </li>

      <li class="breadcrumb-item" v-if="section">
        <a href="#"> {{ sec }} </a>
      </li>

      <li class="breadcrumb-item" v-if="detail">
        <a href="#"> {{ textDetail }} </a>
      </li>
      <li class="breadcrumb-item active d-none">id : {{ lessonId }}</li>
    </ol>
  </nav>
</template>
<script>
import { mapState } from "vuex";
import { mapGetters } from "vuex";

export default {
  data() {
    return {
      allLessons: true,
      lessonName: true,
      section: true,
      detail: false,
      lessonId: this.$route.params.lessonId,
      textDetail: "detail",
      sec: "section",
    };
  },
  watch: {
    $route(to) {
      to.params.lessonId;
      var url = to.path;
      this.sec = this.getSectionActive(url);
    },
  },

  methods: {
    getSectionActive(url) {
      var lessonId = this.lessonId;

      if (url.length > 0) {
        this.detail = true;

        var indexOfLessonId = url.indexOf(lessonId);
        var activeSection = url.slice(indexOfLessonId + 2);
        var IndexDetail = activeSection.indexOf("/");

        if (IndexDetail != -1) {
          // console.log(activeSection);
          activeSection = activeSection.slice(0, IndexDetail);
          switch (activeSection) {
            case "exams/detail":
              this.textDetail = "detail";
              break;
            case "exams/result":
              this.textDetail = "result of exams";
              break;
            default:
              this.textDetail = "detail";
              break;
          }
        } else {
          this.detail = false;
        }

        if (activeSection == "student") {
          activeSection = "list of students";
          this.detail = false;
        }

        if (activeSection == "coursesMaterials") {
          activeSection = "course materials";
        }

        return activeSection;
      }

      return "section unvailable";
    },
  },

  computed: {
    ...mapState("lessons", ["lessons", "lesson"]),
    ...mapGetters("lessons", ["getLessonById", "getLessonName"]),
  },

  created() {
    this.$store.dispatch("lessons/getAllLessons");
    this.sec = this.getSectionActive(this.$route.path);
  },
};
</script>
