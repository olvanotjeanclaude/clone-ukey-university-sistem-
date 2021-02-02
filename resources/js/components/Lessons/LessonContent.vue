<template>
  <div>
    <lesson-information></lesson-information>
    <div id="lessonContent" class="mt-2 mb-3 mx-3 borderLightGreen borderRadiusTop">
      <h5 class="text-muted card-header m-auto">weekly lesson content</h5>
      <table class="table lesson-content">
        <thead>
          <tr class="text-capitalize">
            <th class="search"></th>
            <th scope="col" class="detail">hafta</th>
            <th scope="col" class="theory">theory</th>
            <th scope="col" class="practice">practice</th>
          </tr>
        </thead>
        <tbody v-if="loading">
          loading...
        </tbody>
        <tbody v-else>
          <tr v-for="lesson in lessonContent" :key="lesson.id">
            <td class="item text-center">
              <router-link :to="`/lesson/${lessonId}/coursesDetail`">
                <i class="fa fa-search"></i>
              </router-link>
            </td>
            <td class="item text-center">{{ lesson.week }}</td>
            <td class="item">{{ lesson.theory }}</td>
            <td class="item">{{ lesson.practice }}</td>
          </tr>
          <tr class="d-none">
            <td>
              <a href=""><i class="fa fa-search"></i></a>
            </td>
            <td>1</td>
            <td class="item">Otto</td>
            <td class="item">@mdo</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import LessonInformation from "./LessonInformation.vue";
import axios from "axios";

export default {
  data() {
    return {
      loading: false,
      lessonContent: [],
      lesson_id: undefined,
    };
  },
  components: {
    "lesson-information": LessonInformation,
  },
  methods: {
    loadLessonInfo() {
      this.loading = true;
      if (this.lessonId !== undefined) {
        let fullUrl =
          window.location.origin + "/api/lesson/" + this.lessonId + "/content";
        console.log(fullUrl);
        axios
          .get(fullUrl)
          .then((response) => {
            this.lessonContent = response.data;
          })
          .catch((errors) => {
            console.log(errors);
          })
          .finally(() => (this.loading = false));
      } else {
        console.log("not loaded");
      }
    },
  },
  beforeMount() {
    this.lessonId = this.$route.params.lessonId;
    this.loadLessonInfo();
  },
};
</script>

<style scoped>
.lesson-content {
  font-size: 0.9rem;
}

.item {
  padding: 7px;
  margin: 0;
}
.title {
  background: rgba(0, 0, 0, 0.03);
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
</style>
