<template>
  <div>
    <form class="card mt-2 mb-3 mx-3">
      <div class="card-header text-capitalize borderLightBlue borderRadiusTop">
        <h5 class="text-muted">exam detail</h5>
      </div>
      <div class="card-body">
        <div class="form-row first">
          <label for="exam-name" class="col-md-3">name</label>
          <input
            type="text"
            class="form-control col-md-5"
            id="exam-name"
            value="Web Tabanlı Programlama Vize 2020-2021"
          />
        </div>

        <div class="form-row">
          <label for="description" class="col-md-3">description</label>
          <textarea name="" class="form-control col-md-5" id="description"></textarea>
        </div>

        <div class="form-row">
          <label for="start-time" class="col-md-3">Start date and time</label>
          <input
            type="datetime"
            class="form-control col-md-5"
            id="start-time"
            value="27.11.2020 19:00"
          />
        </div>

        <div class="form-row">
          <label for="end-time" class="col-md-3">last entry</label>
          <input
            type="datetime"
            class="form-control col-md-5"
            id="end-time"
            value="27.11.2020 19:03"
          />
        </div>

        <div class="form-row">
          <label for="duration" class="col-md-3">duration</label>
          <input type="number" class="form-control col-md-5" id="duration" value="30" />
        </div>
      </div>
    </form>
  </div>
</template>

<style scoped>
.card-header {
  padding: 0.5em;
}
.card-body {
  padding: 0 5px;
}
div.first {
  margin-top: 0;
}
select {
  border: 1px solid rgba(238, 232, 232, 0.911);
}
.form-row {
  margin: 5px 0;
  border-top: 1px solid rgba(238, 232, 232, 0.911);
  padding-top: 7px;
}
label {
  font-weight: 600;
  text-transform: capitalize;
}
#description {
  height: 120px;
}
input.form-control,
select {
  height: 1.8rem;
}
</style>
