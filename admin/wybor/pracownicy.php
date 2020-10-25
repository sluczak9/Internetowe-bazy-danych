<?php
//Konfig aplikacji
if (file_exists("../conf.ig.php"))
{
    include_once ("../conf.ig.php");
}

//Właczenie wyświetlania błedów
ini_set('display_errors', 'On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(E_ALL);

?>

<!--<h3 class="mt-3">Zgłoszenia</h2>-->


<?php
$query = "SELECT * FROM " . $prefix . "_pracownicy";
$result = mysqli_query($conn, $query) or die("Zapytanie zakończone niepowodzeniem");

echo "<h2 class=\"mt-3\">Lista zgłoszeń</h2>\n";

echo "<table class=\"table table-secondary\">\n";
echo "<tr><th>Id</th><th>Pracownik</th><th>Login</th><th>Stan</th></tr>\n";
while ($wynik = mysqli_fetch_array($result))
{
    echo "\t<tr>\n";
    echo "<td>" . $wynik['id_pracownika'] . "</td>";
    echo "<td><a class=\"btn btn-link\" href=\"?wybor=details&id_pracownika=" . $wynik['id_pracownika'] . "\">" . $wynik['imie'] . " " . $wynik['nazwisko'] . "</a></td>";
    echo "<td>" . $wynik['login'] . "</td>";
    echo "<td>" . $wynik['stan'] . "</td>";
    echo "\t</tr>\n";
}
echo "</table>\n";

?>
