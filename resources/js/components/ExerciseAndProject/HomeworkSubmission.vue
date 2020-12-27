<template>
  <div class="border border-primary py-2">
    <form class="card mt-2 mb-3 mx-3 bg-light">
      <div class="card-header text-capitalize borderLightWarning borderRadiusTop">
        <h5 class="text-muted">submission information</h5>
      </div>
      <div class="card-body">
        <div class="form-row">
          <label for="delivery-date" class="col-md-3">Delivery date</label>
          <input type="datetime" class="form-control col-md-5" id="delivery-date" />
        </div>

        <div class="form-row">
          <label for="homework-folder" class="col-md-3">folder</label>
          <input
            type="file"
            class="col-md-5"
            id="homework-folder"
            value="27.12.2020 23:55"
          />

          <span class="ml-2">Maximum size: 20 MB</span>
        </div>

        <div class="form-row">
          <label for="end-date" class="col-md-3">delivery end date</label>
          <input
            type="datetime"
            class="form-control col-md-5"
            id="end-date"
            value="27.12.2020 23:55"
          />
        </div>

        <div class="form-row">
          <label for="description" class="col-md-3">description</label>
          <textarea name="" class="form-control col-md-5" id="description"></textarea>
        </div>

        <div class="form-row">
          <div class="col-md-3">
            <button class="btn btn-md" type="submit">
              <i class="fa fa-paper-plane mr-1"></i> deliver
            </button>
          </div>
        </div>
      </div>
    </form>
  </div>
</template>

<style scoped>
button {
  background: #3c8dbc;
  color: #fff;
  text-transform: capitalize;
}
</style>
