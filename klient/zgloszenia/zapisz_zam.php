<?php
    session_start();
    if(file_exists("../conf.ig.php")) {
    include_once("../conf.ig.php");
    }

    

    echo "<br>";
    $ip=$_SERVER['REMOTE_ADDR'];
    $data_zamowienia= time();
    $login=$_SESSION['login'];

        $query_insert= "INSERT INTO ".$prefix."_zgloszenia (`id_zgloszenia`,`klient`,`miasto`,`pracownik`,`status`,`rodzaj`,`opis`,`data`,`adres_ip`) 
        VALUES  (NULL, '".$login."', '".$_POST['miasto']."', '', 'Wysłane', '".$_POST['rodzaj']."','".$_POST['opis']."','".$data_zamowienia."','".$ip."')";

        mysqli_query($conn, $query_insert);
        if(mysqli_affected_rows($conn)>0){
          echo "<p>Udało się wysłać zgłoszenie</p>\n";
          echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=formularz\">Powrót</a></p>\n";
        }else{
          echo "<p>Niestety nie udało się dodać zamówienia</p>\n";
        }

    

?>