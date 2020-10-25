<?php
    session_start();
    z_post();
    //Konfig aplikacji
    if(file_exists("../conf.ig.php")) {
    include_once("../conf.ig.php");
}

    echo "<h3 class=\"mt-5\">Zawartość zmiennej _POST</h3>\n";
    //while(list($var, $value)=each($_POST)):
     // echo "<br>\n".$var." => ".$value;
    //$insert_var.="`".$var."`, ";
    //$insert_value.="'".$value."', ";
    //endwhile;
    

    echo "<br>";
    $ip=$_SERVER['REMOTE_ADDR'];
    //echo "Ip wynosi:".$ip."\n";;
    $data_zamowienia= time();
    //echo "<br>ip =>" .$ip;
    //echo "<br>data_zamowienia =>" .$data_zamowienia;
    $login=$_SESSION['login'];

    //echo "<p>".date("j-M-Y H:i:s", $data_zamowienia)."</p>";

    

        $query_insert= "INSERT INTO ".$prefix."_zgloszenia (`id_zgloszenia`,`klient`,`miasto`,`pracownik`,`status`,`rodzaj`,`opis`) 
        VALUES  (NULL, '".$login."', '".$_POST['miasto']."', '', 'wysłano', '".$_POST['rodzaj']."','".$_POST['opis']."')";

        mysqli_query($conn, $query_insert);
 if(mysqli_affected_rows($conn)>0){
   echo "<p>Udało się wysłać zgłoszenie</p>\n";
 }else{
   echo "<p>Niestety nie udało się dodać zamówienia</p>\n";
 }

    

?>