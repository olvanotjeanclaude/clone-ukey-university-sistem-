<?php

use App\Exam;
use Illuminate\Database\Seeder;

class ExamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    /*
     $table->string("name");
            $table->text("description");
            $table->dateTime("start_time");
            $table->dateTime("end_time");
            $table->string("delay");
            $table->string("result");
    */
    public function run()
    {
        for ($i = 1; $i <= 3; $i++) {
            Exam::create([
                "name" => "exam test " . $i,
                "description" => "Bu sınav örnek (deneme) sınavıdır. Değerlendirilmeye alınmayacaktır. Gerçek sınavda böyle bir arayüz ile karşılaşacaksınız. Soruya (Örnek Soru1'e) tıklayın soru açılacaktır. Soruyu cevaplayınız ve cevabı kaydediniz. Sonra diğer soruya geçip devam edebilirsiniz. Eğer geriye dönmek isterseniz istediğiniz soruya tıklatıp tekrar düzenleyebilirsiniz cevabınızı.
Yanıtlama için kalan süreyi yukarıda göreceksiniz. Sınavın başlama saatinden sonraki 10 dakikada sınava girebilirsiniz. Deneme sınavında ilk 10 dakikada giremeyenler için deneme sınavını her hafta aktif edeceğim.
Kolay gelsin.
",
                "start_time" => "2020-03-14 00:00",
                "end_time" => date("Y-m-d H:i:s"),
                "delay" => "20000",
                "result" => "17/20"
            ]);
        }
    }
}