<template>
  <div class="border border-primary py-2">
    <div class="table-box borderLightGreen borderRadiusTop">
      <h5 class="text-muted table-title">Helper document</h5>
      <table class="table">
        <thead>
          <tr class="text-capitalize">
            <th class="search"></th>
            <th scope="col">name</th>
            <th scope="col">type</th>
            <th scope="col">folder</th>
            <th scope="col">text</th>
          </tr>
        </thead>

        <tbody class="table-content bg-light">
          <tr>
            <td class="item">
              <router-link :to="`/lesson/${lessonId}/exercises/detail`">
                <i class="fa fa-search"></i>
              </router-link>
            </td>
            <td class="item">name</td>
            <td class="item">folder</td>
            <td class="item">download</td>
            <td class="item">
              Ekte yer alan dosyadaki başlığı altındaki "günlük ders planı" şablonu örnek
              alınarak ve web adresinden de faydalanılarak dönem ödev
              hazırlanacaktır.Talim Terbiye Kurulu'nun "ÖĞRETİM PROGRAMLARI VE
              MATERYALLER" başlığı altında yer alan derslere ait örnekleri incelenmelidir.
              AYRICA https://www.mebders.com ADRESİ DE GÜNCEL KAYNAK OLARAK İNCELENEBİLİR.
            </td>
          </tr>
          <tr>
            <td class="item">
              <router-link :to="`/lesson/${lessonId}/exercises/detail`">
                <i class="fa fa-search"></i>
              </router-link>
            </td>
            <td class="item">name</td>
            <td class="item">folder</td>
            <td class="item">download</td>
            <td class="item">
              Ekte yer alan dosyadaki başlığı altındaki "günlük ders planı" şablonu örnek
              alınarak ve web adresinden de faydalanılarak dönem ödev hazırlanacaktır.
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
.item {
  font-size: 0.88rem;
}
thead {
  text-align: center;
}
tr,
td {
  padding: 5px;
}
th {
  padding: 7px;
}
</style>
