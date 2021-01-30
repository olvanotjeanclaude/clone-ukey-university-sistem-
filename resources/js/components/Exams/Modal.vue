<template>
  <div>
    <!-- Modal -->
    <div
      v-if="modalOpen"
      class="modal fade"
      id="modalExamStart"
      role="dialog"
      aria-labelledby="toModal"
      aria-hidden="true"
    >
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-body">
            Your exam will be started. Clicking the 'start' button and you declare that
            you have read the exam instructions and are ready to answer the exam. Do you
            want to continue?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-primary" @click="startQuestion">
              Start
            </button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">
              Exit
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  props: ["isModalVisible"],
  data() {
    return {
      lessonId: this.$route.params.lessonId,
      modalOpen: this.isModalVisible,
      cantEnter: false,
    };
  },
  methods: {
    showModal() {
      this.modalOpen = true;
      this.$nextTick(() => {
        $("#modalExamStart").modal("show");
      });
    },

    startQuestion() {
      this.$router.push({ name: "startingExam", params: { lessonId: this.lessonId } });
      $("#modalExamStart").modal("hide");
    },
  },
};
</script>
