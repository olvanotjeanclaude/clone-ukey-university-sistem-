<template>
  <div>
    <div class="table-box borderLightGreen borderRadiusTop">
      <h5 class="text-muted table-title">Course Materials</h5>
      <table class="table">
        <thead>
          <tr class="text-capitalize">
            <th class="search"></th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">week</th>
            <th scope="col">homework</th>
            <th scope="col">material type</th>
            <th scope="col">folder</th>
            <th scope="col">link</th>
          </tr>
        </thead>

        <tbody class="table-content">
          <tr>
            <td class="item">
              <router-link :to="`/lesson/${lessonId}/coursesMaterials/courseDetail`">
                <i class="fa fa-search"></i>
              </router-link>
            </td>
            <td class="item">google meet link</td>
            <td class="item">template for exam</td>
            <td class="item">1</td>
            <td class="item">Eğitimde Grafik ve Canlandırma Vize</td>
            <td class="item">text</td>
            <td class="item font-weight-bold">no folder</td>
            <td class="item">
              <a href="#">link 1</a>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      lessonId: this.$route.params.lessonId,
    };
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
</style>
