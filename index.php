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



<?PHP 

 function dateCalculate( $t ) {
    $tarih = date( 'Y-m-d' );

    $date_yil = substr( $tarih, 0, 4 );
    $date_ay = substr( $tarih, 5, 6 );
    $date_ay_hesapla = ( int )substr( $date_ay, 0, 2 );
    $date_gun_hesapla = ( int )substr( $date_ay, 3, 5 );

    $t_yil = substr( $t, 0, 4 );
    $t_ay = substr( $t, 5, 6 );
    $t_ay_hesapla = ( int )substr( $t_ay, 0, 2 );
    $t_gun_hesapla = ( int )substr( $t_ay, 3, 5 );
    if ( $date_yil == $t_yil ) {
        if ( $date_ay_hesapla<$t_ay_hesapla ) {
            echo 'Süreniz Dolmuştur';
        } else if ( $date_ay_hesapla>$t_ay_hesapla || $date_ay_hesapla == $t_ay_hesapla && $date_gun_hesapla>$t_gun_hesapla ) {
            echo 'Süreniz Dolmuştur';
        } else if ( $date_ay_hesapla>$t_ay_hesapla || $date_ay_hesapla == $t_ay_hesapla && $date_gun_hesapla<$t_gun_hesapla ||
        $date_gun_hesapla == $t_gun_hesapla ) {
            echo 'Süreniz Geçerlidir';
        }
    } else {
        echo 'Süresi Dolmuştur';
    }

}



?>