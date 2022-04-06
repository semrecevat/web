<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ders2</title>
</head>
<body>
    
<?php  
    
/* php versiyon ve detay bilgisini gösterir. */
        //echo phpinfo(); 
        echo "<h4> Tırnak İşaretleri Arasındaki Farklar </h4>";
        $uni = "Adnan Menderes Üniversitesi";
        echo "Değişken İçeriği: $uni";
        echo "<br>";
        echo "<br>";

        /* Değişken İsminin Yazdırılması */
        echo "1- Kazandığınız Üniversite: \$uni";
        echo "<br>";
        echo "2- Kazandığınız Üniversite:" . '$uni';
        echo "<br>";
        echo '3- Kazandığınız Üniversite: $uni';

        /* Değişkenin İçeriğinin Yazdırılması */
        echo "<br>";
        echo "<br>";
        echo "1- Kazandığınız Üniversite: $uni";
        echo "<br>";
        echo "2- Kazandığınız Üniversite:" . $uni;
        echo "<br>";
        echo "3- Kazandığınız Üniversite:" . "$uni";
        echo "<br>";
        echo '4- Kazandığınız Üniversite:' . "$uni";

        echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
        echo "<h5> Toplama İşlemi</h5>";
        $sayi1 = 20;
        $sayi2 = 10;
        echo "\$sayi1 + \$sayi2 = " . ($sayi1+$sayi2);
        echo "<br>";
        echo "$sayi1 + $sayi2 = " . ($sayi1+$sayi2);
        echo "<br>";
        $sonuc = $sayi1+$sayi2;
        echo "$sayi1 + $sayi2 = $sonuc";

        echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
        echo "<h5> Çıkarma İşlemi</h5>";
        $sayi1 = 20;
        $sayi2 = 10;
        echo "\$sayi1 - \$sayi2 = " . ($sayi1-$sayi2);
        echo "<br>";
        echo "$sayi1 - $sayi2 = " . ($sayi1-$sayi2);
        echo "<br>";
        $sonuc = $sayi1-$sayi2;
        echo "$sayi1 - $sayi2 = $sonuc";

        echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
        echo "<h5> Çarpma İşlemi</h5>";
        $sayi1 = 20;
        $sayi2 = 10;
        echo "\$sayi1 * \$sayi2 = " . ($sayi1*$sayi2);
        echo "<br>";
        echo "$sayi1 * $sayi2 = " . ($sayi1*$sayi2);
        echo "<br>";
        $sonuc = $sayi1*$sayi2;
        echo "$sayi1 * $sayi2 = $sonuc";

        echo "<hr> <h4>Temel Matematiksel İşlemler</h4>";
        echo "<h5> Bölme İşlemi</h5>";
        $sayi1 = 20;
        $sayi2 = 10;
        echo "\$sayi1 / \$sayi2 = " . ($sayi1/$sayi2);
        echo "<br>";
        echo "$sayi1 / $sayi2 = " . ($sayi1/$sayi2);
        echo "<br>";
        $sonuc = $sayi1/$sayi2;
        echo "$sayi1 / $sayi2 = $sonuc";
        echo"<hr><h5> üst alma işlemi</h5>";
        $x=4;
        $y="2";
        echo "değişken tipi " . gettype($x). "<br>";
        echo "değişken tipi:" . gettype($y). "<br>";
        echo "$x<sup>$y</sup>=". pow($x,$y);
        echo "<hr><h5> karekök alma işlmeleri </h5>";
        $x=125;
        $karakkok=sqrt($x);
        echo "$x sayısının karekökü $karakkok";

        echo"<hr><h5>mutlak değer işlemi (abs(x))</h5>";
        $x=(-12);
        $mutlak=abs($x);
        echo "|$x| sayısının mutlak değeri: $mutlak";

        echo"<hr><h5>taban değişim işlemi (abs(x))</h5>";
        echo "27 sayısının 2'lik tabandaki değişikliği:" . base_convert(27,10,2);
        $sayi=50;
        $taban =10;
        $yenitaban=2;
        $sonuc=base_convert($sayi,$taban,$yenitaban);
        echo "<br>";
        echo "$sayi <sub> 10 </sub>= $sonuc <sub> 2 </sub>";


        echo "<hr><h5>mod işlemi (fmod(x,y))</h5>";
        $x=20;
        $y=4;
        $mod= fmod($x,$y);
        echo"$x mod $y : $mod";
        echo "<br> $x sayısı:" . (fmod($x,2))==0 ?"çifttir" :"tektir";
        
        echo "<hr><h5>yuvarlama işlemi (round(x,y))</h5>";
        $x=15.315;
        $y=15.385;
        echo "x bir ondalık yuvarlaması sonucu:" . round($x,1)." <br>";
        echo "y bir ondalık yuvarlaması sonucu:" . round($y,1)." <br>";

        echo "x bir ondalık yuvarlaması sonucu:" . round($x,2)." <br>";
        echo "y bir ondalık yuvarlaması sonucu:" . round($y,2)." <br>";


        echo "<hr><h5> en yakın tam sayısa yuvarlama işlemi (round(x,y))</h5>";
        
        /*  en yakın tam sayısa yuvarlama işlemi*/
        $x=15.913;
        $y=15.213;
        echo "$x floor yuvarlama sonucu ". floor($x). "<br>";
        echo "$y floor yuvarlama sonucu ". floor($y). "<br>";
        /*kendisinden büyüjk en yuvarlmaa */
        $x=15.913;
        $y=15.213;
        echo "$x floor yuvarlama sonucu ". ceil($x). "<br>";
        echo "$y floor yuvarlama sonucu ". ceil($y). "<br>";




        for ($i=1; $i < 10 ; $i++) { 
            echo"$i. sayi".rand(0,100) . "<br>";
           
        }

        







?>

</body>
</html>