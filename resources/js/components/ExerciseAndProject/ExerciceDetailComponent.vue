<template>
  <div class="navpill m-2 px-2 pb-2">
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
      <li class="nav-item">
        <a
          class="nav-link bg-info active"
          id="homework-detail-tab"
          data-toggle="pill"
          href="#homework-detail"
          role="tab"
          aria-controls="homework-detail"
          aria-selected="true"
          >detail of homework</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link bg-info"
          id="submission-info-tab"
          data-toggle="pill"
          href="#submission-info"
          role="tab"
          aria-controls="submission-info"
          aria-selected="false"
          >submission information</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link bg-info"
          id="supplementary-doc-tab"
          data-toggle="pill"
          href="#supplementary-doc"
          role="tab"
          aria-controls="supplementary-doc"
          aria-selected="false"
          >supplementary documents</a
        >
      </li>
      <li class="nav-item">
        <a
          class="nav-link bg-info"
          id="group-evaluation-tab"
          data-toggle="pill"
          href="#group-evaluation"
          role="tab"
          aria-controls="group-evaluation"
          aria-selected="false"
          >group evaluation form</a
        >
      </li>
    </ul>
    <div class="tab-content" id="pills-tabContent">
      <div
        class="tab-pane fade show active"
        id="homework-detail"
        role="tabpanel"
        aria-labelledby="homework-detail-tab"
      >
        <exo-detail></exo-detail>
      </div>
      <div
        class="tab-pane fade"
        id="submission-info"
        role="tabpanel"
        aria-labelledby="submission-info-tab"
      >
        <homework-submission></homework-submission>
      </div>
      <div
        class="tab-pane fade"
        id="supplementary-doc"
        role="tabpanel"
        aria-labelledby="supplementary-doc-tab"
      >
        <document-helper></document-helper>
      </div>
      <div
        class="tab-pane fade"
        id="group-evaluation"
        role="tabpanel"
        aria-labelledby="group-evaluation-tab"
      >
        <group-evaluation></group-evaluation>
      </div>
    </div>
  </div>
</template>

<script>
import ExoDetail from "./ExoDetail.vue";
import HomeworkSubmission from "./HomeworkSubmission.vue";
import DocumentHelper from "./DocumentHelper";
import GroupEvaluationForm from "./GroupEvaluationForm";

export default {
  components: {
    ExoDetail,
    HomeworkSubmission,
    DocumentHelper,
    "group-evaluation": GroupEvaluationForm,
  },
};
</script>

<style scoped>
.nav-item {
  margin: 2px;
  text-transform: capitalize;
  font-size: 1.02rem;
}
.nav-link {
  color: #fefefe;
  border-bottom-left-radius: 0;
  border-bottom-right-radius: 0;
}
.nav-link.active {
  background: #fefefe !important;
  color: #000 !important;
  border-top: 3px solid #357ca5;
  border-left: 1px solid #357ca5;
  border-right: 1px solid #357ca5;
  border-bottom: 1px solid #357ca5;
}
.tab-content {
  padding: 4px;
}
</style>
