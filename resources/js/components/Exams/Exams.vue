<template>
  <div>
    <div class="table-box borderLightBlue borderRadiusTop">
      <h5 class="text-muted table-title">exams information</h5>
      <table class="table">
        <thead>
          <tr class="text-capitalize">
            <th class="search"></th>
            <th scope="col">name</th>
            <th scope="col">start time</th>
            <th scope="col">last entry time</th>
            <th scope="col">duration(mn)</th>
          </tr>
        </thead>

        <tbody class="table-content">
          <tr>
            <td class="item">
              <router-link :to="`/lesson/${lessonId}/exams/detail`">
                <i class="fa fa-search"></i>
              </router-link>
              <router-link :to="`/lesson/${lessonId}/exams/result`">
                <i class="ml-2 fa fa-arrow-circle-right"></i>
              </router-link>
            </td>
            <td class="item">Web Tabanlı Programlama Vize 2020-2021</td>
            <td class="item">27.11.2020 19:00:00</td>
            <td class="item">27.11.2020 19:03:00</td>
            <td class="item">40</td>
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
