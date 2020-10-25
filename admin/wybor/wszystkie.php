<?php

//Konfig aplikacji
if(file_exists("../conf.ig.php")) {
    include_once("../conf.ig.php");
}




//Właczenie wyświetlania błedów
ini_set('display_errors','On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE );
//error_reporting(E_ALL);
?>

<!--<h3 class="mt-3">Zgłoszenia</h2>-->


<?php

//$cos="a1";
//sha1($cos);
//echo sha1($cos);

 $query = "SELECT * FROM ".$prefix."_zgloszenia" ; 
 //echo $query;
 $result = mysqli_query ($conn, $query) or die ("Zapytanie zakończone niepowodzeniem");

 echo "<h2 class=\"mt-3\">Lista wszystkich zgłoszeń</h2>\n";
 /* Wysyłanie zapytania SQL */


/* Wyświetlenie wyników w HTML */
echo "<table class=\"table table-secondary\">\n";
echo "<tr><th>Numer</th><th>Klient</th><th>Pracownik</th><th>Data zgłoszenia</th><th>Status</th></tr>\n";
while ($wynik = mysqli_fetch_array($result)) {
 echo "\t<tr>\n";
 #echo "<td>".$wynik[z_int]."</td>";
 echo "<td><a class=\"btn btn-link\" href=\"?wybor=przyjete&id_zgloszenia=".$wynik['id_zgloszenia']."\">".$wynik['id_zgloszenia']."</a></td>";
 echo "<td>".$wynik['klient']."</td>";
 echo "<td>".$wynik['pracownik']."</td>";
 echo "<td>".date("d-m-Y H:i:s",$wynik['data'])."</td>";
 echo "<td>".$wynik['status']."</td>";
 echo "\t</tr>\n";
 }
echo "</table>\n";


?>