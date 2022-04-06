<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //değişken belirleme($degisken="değişkenin adı";) şeklindedir
    $ad="emre";
    // yazdırması echo $degisken; şeklindedir 
    echo $ad;


    // define belirleme (define('PI', 3.14);) şeklindedir
    define('PI',3.14);
    define('e', 2.75);
    echo "<br>" .  PI;
    echo"<br>" . e;


    // kelime dizisinde kullanılan "" ve '' vardır ikiside kulanılır

    $kelime="Nasıl adını bile bilmediği bir kadına aşık olabilir";
    echo "<br>" . $kelime;
    

    $sarkı="bir adam adını bildildiklerini tek kalemle silebilirken";

    // kelimeleri cümleleri birleştirmek için (.) kullanılır.
    echo "<br>" . $kelime. " " . $sarkı;

    // harf sayısını belirleyen tanım strlendir.
    $soz= "<br>" ."sevdim seni bir kere başkasını sevemem";

    echo strlen($soz) ."   " . "<br>" ;

    /*
    Operator	Açıklama
    +	Toplama
    -	Çıkarma
    *	Çarpma
    /	Bölme
    %	Mod (bölümünden kalan)
    ++	Arttırma (1 ekleme)
    --	Azaltma (1 eksiltme)
     */

    /*
    görev işlemleri

    =	x = y	Eşitlik
    +=	x += y	x, y ile toplamına eşit
    -=	x -= y	x, y den farkına eşit
    *=	x *= y	x, y ile çarpımıdır
    /=	x /= y	x, y ile bölümüdür
    */
    /*
    karşilaştirma işlemleri
    ==	Eşittir	5 == 8 YANLIŞTIR
    !=	Eşit değildir	5 != 8 DOĞRUDUR
    <>	Eşit değildir	5 <> 8 DOĞRUDUR
    >	Büyüktür	5 > 8 YANLIŞTIR
    <	Küçüktür	5 < 8 DOĞRUDUR
    >=	Büyük eşittir	5 >= 8 YANLIŞTIR
    <=	Küçük eşittir	5 <= 8 DOĞRUDUR
    */
    /*
        mantıksal işlemler
    &&	VE	x = 6, y = 3 ise        ( x < 10 && y > 1 )     DOĞRUDUR
    ||	VEYA	x = 6, y = 3 ise    ( x == 5 || y == 5 )    YANLIŞTIR
    !	DEĞİLSE	x = 6, y = 3 ise    ( !( x == y ) )         DOĞRUDUR

    */

    $sayi1=5;
    $sayi2=7;
    echo   $sayi1 + $sayi2 ;


    // if else yapısı
    echo"<br>";

   $islem=2+2;

    if ($islem==4) {
        echo "2+2=4 eder";
    }
    // else yapısı
    // $benimsayim=59;
    // if ($benimsayim==59) 
    //     echo "benim sayım 59'dur";
    // else 
    //     echo "benim sayım o değil"


    $benim_sayim = 5;

   if ( $benim_sayim == 4 )
      echo "Benim sayım 4!";
   else
      echo "Benim sayım 4'ten farklı!"."<br>";



    //    else if else if yapısı
    $sayitut=6;
    if ($sayitut>5) 
        echo "sayım 5ten küçük";
    else if ($sayitut<5)
        echo" sayım 5ten büyük";
    else 
        echo "sayim 5";




        //  switch yapısı
        // ilk önce değişken belirlenir sonra switch yapısına girilerek seçimler yapılır yazdırılması gereken yerle echo kullanılır breakla sonlandırılır.


    $secim=5;
    
    switch($secim){
        case 1;
        echo"beim sayım 1";
        break;
        case 2;
        echo"benim sayım 2";
        break;
        case 3;
        echo "benim sayım 3";
        break;
    }
    echo "<br>";

    // string değişkeniyle switch yapısı 


    $isim="emre";
    switch($isim){
        case "ali";
        echo "bu isim ali";
        break;
        case "mehmet";
        echo "bu isim mehmet";
        break;
        case "emre";
        echo "bu isim emre";
        break;
        default;
        echo "bu isim hiç kimsenin";

    }
    echo "<br>";



    // dizeler ve arrey yapısı
    // değişken tanımla arrey içine at virgülle ayır.


    $markalar=array("bmw", "audi", "mersedes","peugeut");




    $markalar[0]="bmw";
    $markalar[1]="audi";
    $markalar[2]="mercedes";
    $markalar[3]="peugeut";
    
        

          
    



    ?>
</body>
</html>