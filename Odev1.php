
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nesne Temelli Web Programlama</title>
</head>

<body>


/* Uygulama 1 */
 <br>
<?php

    class Ogrenci
    {

        
        public $isim = "Gülcan";
        public $soyisim = "Kasımoğlu";

        var $cinsiyet = "kadın";

        public const GSM = "05358987898";
        public const ADRES = "Adu - Aymes Bilgisayar Lab.";
       


     }
    
    
        function karesi ($sayi)
       {
         return $sayi*$sayi;
       }
        $sonuc ="6 sayısının karesi :".karesi(6);
            echo $sonuc;
      
        
            $nesne = new Ogrenci;

            echo "<br>";
        
            echo "$nesne->isim  $nesne->soyisim";
        
            echo "<br>";
            echo $nesne->cinsiyet;
            echo "<br>";
        
        
            echo "<br>";
        
            echo "<br>";
            echo $nesne::GSM;
            echo "<br>";
        
        {
            
        }
        
         
    


            
 

   
    
        echo "<br> /*Uygulama 2 */<br>"; 
       
    class Personel
    {

       
        function __construct()
        {
            echo "Bu sınıftan bir nesne türetildi ve constract çalıştı.<br><br><br>";
        }

        public $isim = "Duman";

        public function selamVer()
        {
            echo "Merhaba  - SelamVer";
        }

    }

    $kus = new Personel;
    echo $kus->isim;
    echo "<br>";
    $kus->selamVer();
    
    function __destruct()
        {
            echo "Yıkıcı Metot Çalıştı.";
            
        }
    
        echo "<br>";
        echo "<br> /*Faktöriyel */<br>"; 

        $sayi=5;
        $faktoriyel=1;
        for($i=1;$i<=$sayi;$i++)
           $faktoriyel*=$i;
        echo "$sayi!=$faktoriyel";

        echo "<br>";
        echo "<br> /*Vize-Final notu hesaplama */<br>"; 

        $vize = @$_POST["vize"];
       $final = @$_POST["final"];
       $proje = @$_POST["proje"];
       notHesapla($vize, $final, );

       function notHesapla($vize, $final)
    {
        $not = ($vize * 0.3) + ($final * 0.7);

        if ($vize > 100 || $final > 100) {
            echo "Notlar 100'den büyük olamaz";
        } else if ($not > 50) {
            echo "Geçme Notunuz: AA - $not";
        } else if ($not > 50 && $not < 50) {
            echo "Geçme Notunuz: BB - $not";
        } else {
            echo "Kaldınız.";
        }
    }

    ?> 

</body>

</html>



 

