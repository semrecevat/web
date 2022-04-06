<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EMRE CEVAT SUBAŞI</title>
</head>
<body>
    <h3>DİZİLER</h3>
    <ol>
        <li> dizi oluşturmak için array() fonksiyonu veya[] kullanılabilir</li>
        <li> dizi içerisinde farklı türden birçok değer bulunabilir ( in, string ,double, obje ) 1,2,3, "ali" 123,90 </li>
        <li>echo $diziAdı ile dizi içeriği ekrana yazdırılamaz fakat örneğin 3 indisine sahip elemanın "echo $diziAdı [3]" şeklinde yazdırılabilir</li>
        <li>dizinin içerisindeki string ifadeler ("") şeklinde yazılır </li>
        <li>dizinin içerisindeki int  ifadeler direkt yazılır </li>
        <li>birbirinde elemanları virgülle ayrılır </li>
        <li>dizi içerisindeki indisler varsayılan olarak 0 dan başlar</li>
        <li>diziler içerisinde diziler tanımlanabilir</li>
    </ol>
    <?php
    $dizi1=array(1,2,3 ,"emre","ocak","subat");
    $dizi2=[1,2,3 ,"emre"];


    echo"<pre>";
    print_r($dizi1);
    echo"</pre>";


    echo "dizinin 5. elemanın türü:" .gettype( $dizi1[4]);
    echo "dizinin 5. elemanı:" . $dizi1[4];
    

    echo "dizinin 0. elemanı:<b>  $dizi1[0] </b> <br>";
    echo "dizinin 1. elemanı:<b>  $dizi1[1] </b> <br>";
    echo "dizinin 2. elemanı:<b>  $dizi1[2] </b> <br>";
    echo "dizinin 3. elemanı:<b>  $dizi1[3] </b> <br>";
    echo "dizinin 4. elemanı:<b>  $dizi1[4] </b> <br>";
    echo "dizinin 5. elemanı:<b>  $dizi1[5] </b> <br>";


    // dizinin içeriğini foreach döngüsü ile yazdırılması.
    foreach ($dizi1 as $eleman){
        echo "$eleman <br>";
    } 


    foreach($dizi1 as $anahtar=>$deger){
        echo  " $anahtar - $deger <br>";

    }
    // dizinin içeriğinin for döngüsü ile yazdırılması.
    for ($i=0; $i <count($dizi1) ; $i++) { 
        echo $dizi1[$i] ."<br>";
    }
    $sayilar = array(1,2,3,4,5);
    $sayilar = array(
        array(1,2,3,4,5),
        array(1,2,3,4,5)
        );


    echo"<pre>";
    print_r($sayilar);
    echo"</pre>";
    

    $sayilar = array(
       "integer"=> array(1,2,3,4,5),
        "double"=> array(1,2,3,4,5)
        );
        echo"<pre>";
        print_r($sayilar);
        echo"</pre>";


        echo "  sayılar dizisinin içerisindeki ikinci dizinin ikinci elemanı:" . $sayilar[1][1] . "<br>";
        echo "  sayılar dizisinin içerisindeki ikinci dizinin üçüncü elemanı:" . $sayilar[0][2] . "<br>";

        echo "************<br>************";
        $sayilar = array(
            "integer"=> array(1,2,3,4,5),
             "double"=> array(1,2,3,4,5)
             );
             echo"<pre>";
             print_r($sayilar);
             echo"</pre>";


             $bilgiler=array(
                 "id"      =>1,
                 "adi"     =>"emre",
                 "soyadi"  =>"salbaş",
                 "gsm"     =>"5348975669",
                 "cinsiyet"=>"erkek",
                 "yas"     =>"22",
             );

                
            echo"$bilgiler[adi] $bilgiler [soyadi] hoşgeldiniz . <br> ";
            echo $bilgiler["adi"] . " ". $bilgiler["soyadi"]. "hoşgeldiniz";

            echo"<pre>";
            print_r($bilgiler);
            echo"</pre>";


            foreach($bilgiler as $bilgi){
                echo $bilgi."-";
            }
            echo "<br><br><br><br><br>"
            $bilgi=str_split($bilgiler["gsm"])
            




    


    
    
    ?>
    
</body>
</html>