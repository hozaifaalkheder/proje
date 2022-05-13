<?php

error_reporting(0);

if(isset($_POST['gonder'])){
    
    $ad=$_POST["ad"];
    $soyad=$_POST["soyad"];
    $email=$_POST["email"];
    $cinsiyet=$_POST["cinsiyet"];
    $diller=$_POST["dil"];
    $mesaj=$_POST["mesaj"];
    if($ad!="" && $soyad!="" && $email!="" && $cinsiyet!="" &&  $diller!="" && $mesaj!=""){
        echo "Ad Soyad : $ad $soyad <br>";
        echo "E-Mail : $email <br>";
        echo "Cinsiyet : $cinsiyet <br>";
        echo "Diller : ";
        foreach ($diller as $key => $value) {
            echo "$value / ";
        }
        echo "<br>Mesaj : $mesaj";
    }
    else{
        header("location:../iletişim.html");
    }
}
else {
    header("Location:../iletişim.html");
}
?>
