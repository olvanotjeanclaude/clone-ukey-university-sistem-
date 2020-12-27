<template>
  <div>
    <div class="table-box borderLightGreen borderRadiusTop">
      <h5 class="text-muted table-title">Exercice information</h5>
      <table class="table">
        <thead>
          <tr class="text-capitalize">
            <th class="search"></th>
            <th scope="col">name</th>
            <th scope="col">desctiption</th>
            <th scope="col">type</th>
            <th scope="col">Start date</th>
            <th scope="col">End date</th>
          </tr>
        </thead>

        <tbody class="table-content">
          <tr>
            <td class="item">
              <router-link :to="`/lesson/${lessonId}/exercises/detail`">
                <i class="fa fa-search"></i>
              </router-link>
            </td>
            <td class="item">bootstrap kişisel web sayfası (size özgü bir tasarım)</td>
            <td class="item">Web sayfası kodlama</td>
            <td class="item">proje</td>
            <td class="item">07.12.2020 00:00:00</td>
            <td class="item">27.12.2020 23:55:00</td>
          </tr>
          <tr>
            <td class="item">
              <router-link :to="`/lesson/${lessonId}/exercises/detail`">
                <i class="fa fa-search"></i>
              </router-link>
            </td>
            <td class="item">bootstrap kişisel web sayfası (size özgü bir tasarım)</td>
            <td class="item">Web sayfası kodlama</td>
            <td class="item">proje</td>
            <td class="item">07.12.2020 00:00:00</td>
            <td class="item">27.12.2020 23:55:00</td>
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
