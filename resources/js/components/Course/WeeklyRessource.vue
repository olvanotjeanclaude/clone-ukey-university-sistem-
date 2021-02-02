<template>
  <div>
    <div class="table-box borderLightGreen borderRadiusTop">
      <h5 class="text-muted table-title">weekly Materials</h5>
      <table class="table">
        <thead>
          <tr class="text-capitalize">
            <th scope="col">name</th>
            <th scope="col">material type</th>
            <th scope="col">folder</th>
            <th scope="col">link</th>
          </tr>
        </thead>

        <tbody class="table-content">
          <tr>
            <td class="item">Course content and introduction</td>
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
