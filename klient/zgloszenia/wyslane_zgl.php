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

<h2 class="mt-3">Wysłane zgłoszenia</h2>

<!--<h3 class="mt-3">Zgłoszenia</h2>-->


<?php

$login=$_SESSION['login'];


$query = "SELECT * FROM ".$prefix."_zgloszenia WHERE klient='".$login."'"; 
$result = mysqli_query ($conn, $query) or die ("Zapytanie zakończone niepowodzeniem");

/* Wysyłanie zapytania SQL */

/* Wyświetlenie wyników w HTML */
echo "<table class=\"table table-secondary\">\n";
echo "<tr><th>Numer</th><th>Klient</th><th>Data zgłoszenia</th><th>Status</th></tr>\n";
while ($wynik = mysqli_fetch_array($result)) {
echo "\t<tr>\n";
#echo "<td>".$wynik[z_int]."</td>";
echo "<td><a class=\"btn btn-link\" href=\"?wybor=szczegoly&id_zgloszenia=".$wynik['id_zgloszenia']."\">".$wynik['id_zgloszenia']."</a></td>";
echo "<td>".$wynik['klient']."</td>";
echo "<td>".date("d-m-Y H:i:s",$wynik['data'])."</td>";
echo "<td>".$wynik['status']."</td>";
echo "\t</tr>\n";
}
echo "</table>\n";

 
?>
