<template>
  <div>
    <div class="row mx-3">
      <div class="offset-6 col-6">
        <h5 class="today font-weight-bold text-info float-right mt-3">{{ todayDate }}</h5>
      </div>
    </div>

    <exam-modal :isModalVisible="isModalVisible" ref="modal"></exam-modal>
    <div class="table-box borderLightBlue borderRadiusTop">
      <h5 class="text-muted table-title">exams information</h5>
      <table class="table">
        <thead>
          <tr class="text-capitalize">
            <th class="search"></th>
            <th scope="col">name</th>
            <th scope="col">start time</th>
            <th scope="col">last entry time</th>
            <th scope="col">duration(mn)</th>
          </tr>
        </thead>

        <tbody class="table-content">
          <tr>
            <td class="item">
              <router-link :to="`/lesson/${lessonId}/exams/detail`">
                <i class="fa fa-search"></i>
              </router-link>
              <router-link :to="`/lesson/${lessonId}/exams/result`">
                <i class="ml-2 fa fa-arrow-circle-right"></i>
              </router-link>
              <span class="exam-start">
                <i
                  v-if="isCanDoExam()"
                  class="ml-2 fa fa-check active"
                  @click="startExam"
                ></i>
              </span>
            </td>
            <td class="item">Web Tabanlı Programlama Vize 2020-2021</td>
            <td class="item">27.11.2020 19:00:00</td>
            <td class="item">27.11.2020 19:03:00</td>
            <td class="item">40</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
import ExamModal from "./Modal.vue";
export default {
  data() {
    return {
      todayDate: "",
      isModalVisible: false,
      lessonId: this.$route.params.lessonId,
      examDateTime: "2021/02/03 02:35 ",
      ExamDuration: 30,
      lastEntry: 5,
    };
  },
  methods: {
    isCanDoExam() {
      var exam = new Date(this.examDateTime);
      var examTime = exam.getTime() ? exam.getTime() : 0;
      var lastEntry = examTime + this.lastEntry * 60 * 1000; //last entry to seconde
      var now = new Date().getTime();

      if (this.isExamToday()) {
        return examTime <= now && now < lastEntry;
      }
    },

    isExamToday() {
      if (!this.examDateTime) return false;
      var today = this.todayIs().slice(0, 10);
      var examDate = this.examDateTime.slice(0, 10);
      return today == examDate;
    },

    startExam() {
      this.isModalVisible = true;
      this.$refs.modal.showModal(this.lessonId);
    },

    todayIs() {
      var date = new Date();
      var currentDay = date.getDate() < 10 ? `0${date.getDate()}` : date.getDate();
      var currentMonth =
        date.getMonth() < 10 ? `0${date.getMonth() + 1}` : date.getMonth() + 1;
      var currentYear = date.getFullYear();
      var currentHours = date.getHours() < 10 ? `0${date.getHours()}` : date.getHours();
      var currentMinutes =
        date.getMinutes() < 10 ? `0${date.getMinutes()}` : date.getMinutes();
      this.todayDate = `${currentDay}.${currentMonth}.${currentYear} ${currentHours}:${currentMinutes}`;

      var today = `${currentYear}/${currentMonth}/${currentDay} ${currentHours}:${currentMinutes}`;

      return today;
    },
  },
  mounted() {
    this.isCanDoExam();
  },
  components: {
    ExamModal,
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
.fa-check {
  cursor: pointer;
}
</style>
