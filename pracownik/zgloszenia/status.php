<?php

//Konfig aplikacji
if(file_exists("../conf.ig.php")) {
    include_once("../conf.ig.php");
}

//z_post();
//echo "<br>";
$status=$_POST['status'];
//echo $zgloszenie;
$login=$_SESSION['login'];
//echo "<br>".$login;
$ip=$_SERVER['REMOTE_ADDR'];
//echo "Ip wynosi:".$ip."\n";;
$data_zamowienia= time();
$dzienRand = rand(4,15);
$iloscSekund = $dzienRand * 24 * 60 * 60;
$data_zakonczenia = $data_zamowienia + $iloscSekund;
$zgloszenie=$_GET['id_zgloszenia'];
$query = "UPDATE `".$prefix."_zgloszenia` SET `status`='".$status."', `pracownik`='".$login."', `data_zakonczenia`='".$data_zakonczenia."'
          WHERE id_zgloszenia=".$zgloszenie."";


 if(mysqli_query($conn, $query)){
     echo "<p>Modyfikacja przebiegła pomyślnie</p>\n";
 }
 else{
     echo "<p>Niestety nie udało się zmodyfikować zgłoszenia</p>\n";
 }

?>