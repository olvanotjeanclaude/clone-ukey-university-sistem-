<template>
  <div>
    <form class="card mt-2 mb-3 mx-3">
      <div class="card-header text-capitalize borderLightBlue borderRadiusTop">
        <h5 class="text-muted">course detail</h5>
      </div>
      <div class="card-body">
        <div class="form-row first">
          <label for="exam-name" class="col-md-3">name</label>
          <input
            type="text"
            class="form-control col-md-5"
            id="exam-name"
            value="Edmodo Sınıf kodu"
          />
        </div>

        <div class="form-row">
          <label for="link" class="col-md-3">Material type</label>
          <select name="material-type" id="">
            <option value="autre">autre</option>
            <option value="reference">reference</option>
            <option value="makale">makale</option>
            <option value="ders kitabı">ders kitabı</option>
          </select>
        </div>

        <div class="form-row">
          <label for="link" class="col-md-3">Type</label>
          <select name="material" id="">
            <option value="text">text</option>
            <option value="folder">reference</option>
          </select>
        </div>

        <div class="form-row">
          <label for="link" class="col-md-3">Link</label>
          <div class="col-md-5">
            <span class="font-weight-bold">No folder</span>
          </div>
        </div>

        <div class="form-row mb-3">
          <label for="description" class="col-md-3">description</label>
          <textarea
            name="description"
            class="form-control col-md-5"
            id="description"
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
