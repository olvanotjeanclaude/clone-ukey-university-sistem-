<template>
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mb-0 text-capitalize">
      <li class="breadcrumb-item" v-if="allLessons">
        <a href="">list of lessons</a>
      </li>

      <li class="breadcrumb-item" v-if="lessonName">
        <a href="#" @click="goDetail"> {{ getLessonName(lessonId) }} </a>
      </li>

      <li class="breadcrumb-item" v-if="section">
        <a href="#" @click="goPrev(link)"> {{ sec }} </a>
      </li>

      <li class="breadcrumb-item" v-if="detail">
        <a href="#"> {{ textDetail }} </a>
      </li>
      <li class="breadcrumb-item d-none">id : {{ lessonId }}</li>
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
      link: null,
    };
  },
  watch: {
    $route(to) {
      to.params.lessonId;
      this.link = to.path;
      this.sec = this.getSectionActive(this.link);
    },
  },

  methods: {
    goPrev(currentLink) {
      if (this.detail) {
        if (currentLink) {
          var linkFragment = currentLink.split("/")[3];
          var prev = `/lesson/${this.lessonId}/${linkFragment}`;
          this.$router.push(prev);
        }
        return true;
      }
      return false;
    },

    getSectionActive(url) {
      var lessonId = this.lessonId;

      if (url.length > 0) {
        this.detail = true;

        var indexOfLessonId = url.indexOf(lessonId);
        var activeSection = url.slice(indexOfLessonId + 2);
        var IndexDetail = activeSection.indexOf("/");

        if (IndexDetail != -1) {
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
    goDetail() {
      this.$router.push({ name: "lessonContent", params: { lessonId: this.lessonId } });
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
