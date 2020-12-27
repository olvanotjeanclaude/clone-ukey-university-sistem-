<template>
  <div>
    <form class="card mt-2 mb-3 mx-3">
      <div class="card-header text-capitalize borderLightBlue borderRadiusTop">
        <h5 class="text-muted">group detail</h5>
      </div>
      <div class="card-body">
        <div class="form-row first">
          <label for="group-name" class="col-md-3">group name</label>
          <input type="text" class="form-control col-md-5" id="group-name" />
        </div>

        <div class="form-row d-flex">
          <label for="group-type" class="col-md-3">group type</label>
          <select class="groupe-type">
            <option value="open">open</option>
            <option value="close">closed</option>
          </select>
        </div>

        <div class="form-row">
          <label f or="description" class="col-md-3">description</label>
          <textarea name="" class="form-control col-md-5" id="description"></textarea>
        </div>

        <div class="form-row">
          <label for="category" class="col-md-3">group category</label>
          <input type="text" class="form-control col-md-5" id="category" />
        </div>

        <div class="form-row">
          <label for="max-member" class="col-md-3">max member</label>
          <input type="text" class="form-control col-md-5" id="max-member" />
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
