<template>
  <div>
    <form class="card mt-2 mb-3 mx-3">
      <div class="card-header text-capitalize borderLightBlue borderRadiusTop">
        <h5 class="text-muted">lesson information</h5>
      </div>
      <div class="card-body">
        <div class="form-row">
          <label class="col-md-3">Hafta No</label>
          <div class="form-control col-md-5">1</div>
        </div>

        <div class="form-row">
          <label for="theory" class="col-md-3">theory</label>
          <textarea name="theory" class="form-control col-md-5" id="theory"></textarea>
        </div>

        <div class="form-row">
          <label for="practice" class="col-md-3">practice</label>
          <textarea
            name="practice"
            class="form-control col-md-5"
            id="practice"
          ></textarea>
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

.form-row {
  margin: 5px 0;
  border-top: 1px solid rgba(238, 232, 232, 0.911);
  padding-top: 7px;
}
label {
  font-weight: 600;
  text-transform: capitalize;
}
#practice,
#theory {
  height: 120px;
}
</style>
