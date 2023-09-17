<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP İLE TARİH HESAPLAMASI</title>
</head>
<body>



<!-- Fonksiyona kampanya bitiş tarihini vermemiz yeterli olucaktır fonksiyon kampanya bitiş tarihi ile gunumuzdeki tarihi alır  kampanya bitiş
süresini hesaplar ve bitmiş yada devam ediyor cıktıısnı basar  -->


<b>Kampanya Durumunuz : <?php echo dateCalculate("2023/05/12"); ?></b>

    
</body>
</html>



<?php
 function dateCalculate($t) {
    $bugun = new DateTime();
    $kalan = DateTime::createFromFormat('Y-m-d', $t);

    if ($kalan < $bugun) {
        echo 'Süreniz Dolmuştur';
    } else {
        $interval = $bugun->diff($kalan);
        
        $kalan_yil = $interval->format('%y');
        $kalan_ay = $interval->format('%m');
        $kalan_gun = $interval->format('%d');
        
        $haftanin_gunleri = [
            1 => 'Pazartesi',
            2 => 'Salı',
            3 => 'Çarşamba',
            4 => 'Perşembe',
            5 => 'Cuma',
            6 => 'Cumartesi',
            7 => 'Pazar',
        ];
        
        $hangi_gun = $haftanin_gunleri[$kalan->format('N')];
        
        echo "Süreniz Geçerlidir. Kalan süre: $kalan_yil yıl, $kalan_ay ay, $kalan_gun gün. Son kullanma tarihi: $hangi_gun";
    }
}



?>
