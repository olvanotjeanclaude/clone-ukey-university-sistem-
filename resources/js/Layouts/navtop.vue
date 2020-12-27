<template>
  <div class="container-fluid">
    <div class="row text-white">
      <div class="col-lg-3 top-left">
        <div class="logo d-flex flex-nowrap">
          <div class="ukey">
            <h3 class="mx-2 text-uppercase">ukey</h3>
          </div>
          <div class="uludag">
            <p class="mt-2 text-capitalize">University of toamasina</p>
          </div>
        </div>
      </div>

      <div class="col-lg-9 top-right">
        <ul class="list-unstyled d-flex float-right mt-2">
          <li>
            <span><i class="mr-3 fa fa-bars"></i></span>
          </li>
          <li><i class="mr-3 fa fa-check-circle"></i></li>
          <li class="text-uppercase">
            <i class="mr-3 fa fa-user"></i>
          </li>
          <li class="text-uppercase">{{ user }} <i class="mr-3 fa fa-caret-down"></i></li>
        </ul>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      user: "olvanot jean claude rakotonirina",
    };
  },
};
</script>

<style scoped>
.top-left {
  background: #357ca5;
}
.top-right {
  background: #3c8dbc;
}
.ukey h3 {
  margin-top: 2px;
}
</style>
