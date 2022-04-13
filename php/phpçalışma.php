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


    echo "<pre>";
    print_r($markalar);
    echo "</pre>";


    $markalar1[0]="bmw";
    $markalar1[1]="audi";
    $markalar1[2]="mercedes";
    $markalar1[3]="peugeut";

    echo "<pre>";
    print_r($markalar1);
    echo "</pre>";


    // sayılı dizilerde yapılan tırnak işaretine gerek duyulmaz ve yapılan işşlemler çağrışımloı kullanılır. 

    $puanlar=array(
        "ali"=>15,
        "emre"=>25,
        "gizem"=>12,
        "hilal"=>21,
        "fatma"=>55,

    );
    echo"<pre>";
    print_r($puanlar);
    echo "</pre>";



    // dizi içinde dizilerde  array in içine birden fazla dizi kullanılır ve yazılır örnek.
    /*
    $aileler = array(
      "Eliçalışkan" => array("Murat","Çiğdem","Esra"),
      "Keçecioğlu" => array("Yavuz","Mustafa")
   );

   echo $aileler["Eliçalışkan"][0] . ",
      Eliçalışkan ailesinin bir üyesidir."; 
      
      */ 
      $aileler=array(
          "salbas"=>array("emre","elif","aynur","selami"),
          "eldek"=>array("mustafa","berkay","veysel"),
      );
      echo $aileler["salbas"][0].",salbas ailesinin bir üyesidir.";



    //   birden fazla dizide çalışırken döngülerden yararlanırız bunlardan biride for döngüsüdür.


    echo "<br>";
    $sayi=1;
    while($sayi<=5){
        echo "benim sayım $sayi !";
        $sayi++;
    };

// sayılar alt alta yazılmasını sağlamak için echo komudunun yanına br etiketi komay kolaylık sağlayacaktır.


    echo "<br>";
    $ikiser=0;

    while ($ikiser<=20) {
        echo "benim sayım $ikiser ! <br> ";
        $ikiser ++ ;
    };
// birden yüze kadar sayıların yazılımı ve 45 olana kadar sayı üreten kodu yazın.
//  rand bir sayı dizisinde belirlenen bir sayı dizisinde rastgele üretir.

$sayi=1;
$sayac=0;
while($sayi!=45){
   $sayi=rand(1,100);
   $sayac++;
}
echo "$sayi sayısı $sayac denemede bulundu.";


// 1 ile 100 arasında rastgele üretilen sayıların toplamı 500'den büyük olduğunda duran döngüyü, toplam ile toplanan sayı sayısını ekrana yazan php kodunu yazalım.


    $sayi1=rand(1,100);
    $sayac1=1;
    $toplam=$sayi1;
    while ($toplam <=500) {
        $sayi1=rand(1,100);
        $sayac++;
        $toplam+=$sayi1;


    }
    echo "toplam=$toplam + toplanan sayı sayısı = $sayac";



    //  günleri sıralayan dizi oluşturun ve  perşembe ve cumayı yazdırıan kodu yazın.

    $gunler=array(
        $gunler[]="pazartesi",
        $gunler[]="salı",
        $gunler[]="carsamba",
        $gunler[]="persembe  ",
        $gunler[]="cuma ",
        $gunler[]="cumartesi",
        $gunler[]="pazar",
    );
    echo "<br>" .  $gunler[3] . $gunler[4];


    // okuldaki öğretmen ve mudur yardımcıları ve mudurun olduğu bir dizi yazdırın.


    $okul=array(
        $mudur =array("adi"     =>"METE"),
        $mudury=array(
            "adi1"     =>"dilşen",
            "adi2"     =>"ercan",
            "adi3"     => "uğur",
        ),
        $ogretmen=array(
            "adi4"     =>   "apdullah",
            "adi5"     => "rahvan",
            "adi6"     =>"kısa LM",
            "adi7"     => "trafo",
            "adi8"     => "babannem",
            "adi9"     => "iskeletor",
            "adi10"     => "uzun LM"
        ),
    );

    echo "<pre>";
    print_r($okul);
    echo "</pre>";
    

          
    



    ?>
</body>
</html>