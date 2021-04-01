<template>
  <div>
    <div class="table-box borderLightGreen borderRadiusTop">
      <h5 class="text-muted table-title">Groups information</h5>
      <table class="table">
        <thead>
          <tr class="text-capitalize">
            <th class="search"></th>
            <th scope="col">name</th>
            <th scope="col">categories</th>
            <th scope="col">type</th>
            <th scope="col">description</th>
            <th scope="col">max</th>
            <th scope="col">available</th>
            <th scope="col">membership?</th>
          </tr>
        </thead>

        <tbody class="table-content">
          <tr>
            <td class="item">
              <router-link :to="`/lesson/${lessonId}/groups/group-detail`">
                <i class="fa fa-search"></i>
              </router-link>
            </td>
            <td class="item">Deneme</td>
            <td class="item">Ara sınav mazeretDonanımı</td>
            <td class="item">Üye Kabulüne Kapalı</td>
            <td class="item">Üye Kabulüne Kapalı</td>
            <td class="item">1</td>
            <td class="item">1</td>
            <td class="item">yes</td>
          </tr>
          <tr>
            <td class="item">
              <router-link :to="`/lesson/${lessonId}/groups/group-detail`">
                <i class="fa fa-search"></i>
              </router-link>
            </td>
            <td class="item">Deneme</td>
            <td class="item">Ara sınav mazeret Donanımı</td>
            <td class="item">Üye Kabulüne Kapalı</td>
            <td class="item">Üye Kabulüne Kapalı</td>
            <td class="item">1</td>
            <td class="item">1</td>
            <td class="item">yes</td>
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
