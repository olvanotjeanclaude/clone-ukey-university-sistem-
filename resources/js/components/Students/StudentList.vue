<template>
  <div>
    <div id="student" class="mt-2 mb-3 mx-3 borderLightGreen borderRadiusTop">
      <h5 class="text-muted card-header m-auto">list of students</h5>
      <table class="table student-content">
        <thead>
          <tr class="text-capitalize">
            <th class="search text-center">#</th>
            <th scope="col" class="text-center">student NO</th>
            <th scope="col">name and surname</th>
            <th scope="col">in system</th>
          </tr>
        </thead>
        <tbody v-if="loading">
          <span class="text-center">loading...</span>
        </tbody>
        <tbody v-else>
          <tr v-for="(lesson, index) in lessons" :key="index">
            <td class="text-center">{{ index + 1 }}.</td>
            <td class="text-center">{{ lesson.student_id }}</td>
            <td class="item name">
              <span>{{ lesson.students.surname }}</span>
              <span class="ml-2">{{ lesson.students.lastname }}</span>
            </td>
            <td class="item">
              {{ lesson.students.isInSystem == 1 ? "active" : "inactive" }}
            </td>
          </tr>
          <tr class="px-3 d-none">
            <td>1</td>
            <td class="item">061990011</td>
            <td class="item">olvanot jean claude rakotonirina</td>
            <td>active</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<style scoped>
.student-content {
  font-size: 0.9rem;
}

.item {
  text-transform: uppercase;
}
.title {
  background: rgba(0, 0, 0, 0.03);
  padding: 0.75rem 1.25rem;
  margin-bottom: 0;
  background-color: rgba(0, 0, 0, 0.03);
  border-bottom: 1px solid rgba(0, 0, 0, 0.125);
}
</style>

<script>
export default {
  data() {
    return {
      lessons: [],
      lessonId: this.$route.params.lessonId,
      loading: false,
      count: 0,
    };
  },
  watch: {
    $route: "loadInfoBase",
  },

  methods: {
    loadInfoBase() {
      let baseUrl = window.location.origin;
      if (this.lessonId) {
        this.loading = true;
        let fullUrl = baseUrl + "/api/lesson/" + this.lessonId + "/student/list";

        // @ts-ignore
        axios
          .get(fullUrl)
          .then((response) => {
            this.lessons = response.data[0].students_school_information;
            //console.log(this.lessons);
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
  async beforeMount() {
    this.loadInfoBase();
  },
};
</script>

<style scoped>
tr,
td {
  padding: 5px;
}
th {
  padding: 7px;
}
</style>
