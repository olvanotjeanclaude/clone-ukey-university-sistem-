<template>
  <div class="border border-primary py-2">
    <form class="card mt-2 mb-3 mx-3 bg-light">
      <div class="card-header text-capitalize borderLightBlue borderRadiusTop">
        <h5 class="text-muted">homework/project</h5>
      </div>
      <div class="card-body">
        <div class="form-row">
          <label for="exo-name" class="col-md-3">name</label>
          <input type="text" class="form-control col-md-5" id="exo-name" />
        </div>

        <div class="form-row d-flex">
          <label for="exo-type" class="col-md-3">type of homework</label>
          <select class="groupe-type">
            <option value="open">project</option>
            <option value="close">weekly</option>
            <option value="close">group</option>
          </select>
        </div>

        <div class="form-row">
          <label for="start-date" class="col-md-3">delivery start date</label>
          <input
            type="datetime"
            class="form-control col-md-5"
            id="start-date"
            value="07.12.2020 00:00"
          />
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
          <label for="number-file" class="col-md-3">number of files</label>
          <input type="number" class="form-control col-md-5" id="number-file" value="1" />
        </div>

        <div class="form-row">
          <label for="folder-file" class="col-md-3">type of folder</label>
          <input
            type="folder"
            class="form-control col-md-5"
            id="folder-file"
            value="rar, zip, 7siz, targ"
          />
        </div>

        <div class="form-row">
          <label for="size-file" class="col-md-3">size of folder(10MB)</label>
          <input type="text" class="form-control col-md-5" id="size-file" value="10" />
        </div>

        <div class="form-row">
          <label for="description" class="col-md-3">description</label>
          <textarea name="" class="form-control col-md-5" id="description">
          "DERS MATERYALLERİ" KISMINDA  yer alan ekli dosyadaki "günlük ders planı" şablonu örnek alınarak ve ekli web adresinden de faydalanılarak dönem ödev hazırlanacaktır;
1.İlk ve orta seviyede (4-5-6-7-8.sınıflardan herhangi bir tanesinden) tek bir ders seçiniz (TERCİHEN KENDİ BRANŞINIZA AİT)
2.Derse ait verilmiş olan örnek şablonun başlıklarını dikkate alarak herhangi bir ÜNİTE den ÜÇ DERS SAATİ(40+40+40) olacak biçimde günlük planını hazırlayınız
3.Ödev, Min.3 sayfa Max 12 sayfa olacaktır.Puanlama ona göredir.Kendinizi ders öğretmeninin yerine koyarak "ÖZGÜN" ETKİNLİKLER eklenmeli,derste işlenen farklı yöntem ve tekniklerden de faydalanılmalıdır.
4.Planın üç ders saatine uygun "Etkinlikler" başlığına ait yapılacaklar geniş tutulmalıdır (Ek açıklamalar,yöntem,teknik uygulamaları,Resim,fotograf,deney görüntüler,şablon,şekil,harita,grafik ...vb eklenebilir)  
5.Dersin ödevi ders kapağı da hazırlanarak en son 28 Aralık 2020 tarihi ne kadar UKEY üzerinden yüklenmelidir.
6.Ödev final puanının %40 lık bölümünü oluşturacaktır.
BAŞARILAR...
          </textarea>
        </div>
      </div>
    </form>
  </div>
</template>

<style scoped>
textarea {
  min-height: 100px;
}
</style>
