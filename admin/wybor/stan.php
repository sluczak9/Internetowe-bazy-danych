<?php

//Konfig aplikacji
if(file_exists("../conf.ig.php")) {
    include_once("../conf.ig.php");
}

//z_post();
//echo "<br>";
$stan=$_POST['stan'];
$pracownik=$_GET['id_pracownika'];
//echo $pracownik;
//$login=$_SESSION['login'];
//echo "<br>".$login;
//$ip=$_SERVER['REMOTE_ADDR'];
//echo "Ip wynosi:".$ip."\n";;
//$data_zamowienia= time();
//echo "<br>ip =>" .$ip;
$query = "UPDATE `".$prefix."_pracownicy` SET `stan`='".$stan."'
          WHERE id_pracownika='".$pracownik."'";

 if(mysqli_query($conn, $query)){
     echo "<p>Modyfikacja przebiegła pomyślnie</p>\n";
 }
 else{
     echo "<p>Niestety nie udało się zmodyfikować zgłoszenia</p>\n";
 }
 echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=pracownicy\">Powrót do listy pracowników</a></p>\n";

?>