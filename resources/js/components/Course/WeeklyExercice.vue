<template>
  <div>
    <div class="table-box borderLightBlue borderRadiusTop">
      <h5 class="text-muted table-title">Weekly exercice</h5>
      <table class="table">
        <thead>
          <tr class="text-capitalize">
            <th scope="col">name</th>
            <th scope="col">Start date</th>
            <th scope="col">End date</th>
            <th scope="col">Extension Date</th>
            <th scope="col">type</th>
            <th scope="col">Max(MB)</th>
            <th scope="col">desctiption</th>
          </tr>
        </thead>

        <tbody class="table-content"></tbody>
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
