<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders1</title>
</head>
<body>
    <?php
    // ekrana emre yazdıran kod
    echo "emre";
    //değişken belirlerken ($degiken="kalem0;") şeklinde yazılır 
    $ad="EMRE";
    //sayıda ise çift tırnak gerekmez.
    $yas=22;
    //değişkeni yazdırmada ise echo komutu ile yazdırılır 
    // kodları birleştirmek için (.) nokta kullanılır.
    echo "<br>" . $yas . "<br>". $ad;
    // define kodu $ işareti olmadan yapılır ve yüklü olarak bulunur.
    define('e',2.75);
    echo e ;
    //string değişkenler ($kelime="benim adım emre.";) şeklinde yazılır.
    $cumle="<br> Benim Adım Emre";
    echo $cumle;
    $adet=7;
    echo "<br> $adet kedi beni $adet";
    // nokta ile birleştirilir
    $kelime1=" hatasız kul olmaz";
    $kelime2=" hatamla sev beni";
    echo "<br> $kelime1 <br> ". "$kelime2";

    
    
    
    ?>
</body>
</html>