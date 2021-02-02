<template>
  <div class="card information my-1 mx-3 rounded">
    <h5 class="card-header text-muted text-capitalize">
      Basic Information of the Course
    </h5>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Teacher</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto text-uppercase">John Mathiew</p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Course name</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto">{{ detail.name }}</p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Course code</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto">{{ detail.code }}</p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Ects</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto">{{ detail.ects }}</p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Akts</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto">{{ detail.akts }}</p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Theory</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto">{{ detail.theory }}</p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Application</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto">{{ detail.application }}</p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Lab</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto">{{ detail.laboratory }}</p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Credit</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto">{{ detail.credit }}</p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>purpose </span>
        </div>
        <div class="field-display-value">
          <p class="m-auto">
            {{ detail.purpose }}
          </p>
        </div>
      </div>
    </div>
    <div class="information-item">
      <div class="field-display">
        <div class="field-display-title px-3">
          <span>Course Resources</span>
        </div>
        <div class="field-display-value">
          <p class="my-auto">{{ detail.resource }}</p>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import axios from "axios";
export default {
  data() {
    return {
      lessonId: this.$route.params.lessonId,
      detail: [],
    };
  },
  created() {
    let uri = "http://localhost:8000";
    axios
      .get(uri + "/api/lesson/" + this.lessonId)
      .then((response) => {
        this.detail = response.data;
        //console.log(this.detail);
      })
      .catch((e) => this.errors.push(e));
  },
};
</script>

<style scoped>
.information {
  border-top: 2px solid #00c0ef;
  border-left: 1px solid lightgray;
  border-right: 1px solid lightgray;
  border-bottom: 1px solid lightgray;
}
.field-display {
  display: flex;
  border-bottom: 1px solid lightgray;
}
.field-display-title {
  width: 25%;
  font-weight: 630;
  font-size: 0.95rem;
  text-transform: capitalize;
}
.field-display-title,
.field-display-value {
  padding: 3px 1px;
}
.field-display-value {
  width: 75%;
  font-size: 0.9rem;
}
</style>
