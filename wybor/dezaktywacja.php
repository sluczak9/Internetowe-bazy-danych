<?php

//Konfig aplikacji
if(file_exists("../conf.ig.php")) {
    include_once("../conf.ig.php");
}
$override_main = "../";
$main_location = "../";
$current_site = "Rejestracja";
if(file_exists("../header.php")) {
  include("../header.php");
}
session_start();
$login=$_SESSION['login'];
$pracownik=$_GET['id_pracownika'];


$query = "UPDATE `".$prefix."_uzytkownicy` SET `stan`=(select nazwa FROM `".$prefix."_stanprac` where `id_stanu` = 2)
          WHERE login='".$login."'";
 if(mysqli_query($conn, $query)){
     echo "<p>Konto zostało dezaktywowane</p>\n";
 }
 else{
     echo "<p>Dezaktywacja nie powiodła się</p>\n";
 }
 echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"../index.php\">Powrót do strony głównej</a></p>\n";

 if(file_exists("../footer.php")) {
 include("../footer.php");
}
?>