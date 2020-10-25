<?php
//Właczenie wyświetlania błedów
//ini_set('display_errors','On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL);
//session_start();
$override_main = "../";

$main_location = "../";
$current_site = "Help Desk";
if (file_exists("../header.php"))
{
    include ("../header.php");
}

echo "<br>";

if (file_exists("../conf.ig.php")) include_once ("../conf.ig.php");
$query = "SELECT `login` FROM ".$prefix."_pracownicy WHERE `id_pracownika`= ".$_GET['id_pracownika'];

$result = mysqli_query ($conn, $query) or die ("Zapytanie zakończone niepowodzeniem");
while ($wynik = mysqli_fetch_array($result)) {
$login=$wynik['login'];
}

    $query_update = "UPDATE `".$prefix."_pracownicy`  SET `login`= '" . $_POST['login'] . "',`imie`= '" . $_POST['imie'] . "',`nazwisko`= '" . $_POST['nazwisko'] . "' WHERE `login`='".$login."'";
    $query_update2 = "UPDATE `".$prefix."_zgloszenia` SET `pracownik`= '" . $_POST['login'] . "' WHERE `pracownik` = '".$login."'";
    mysqli_query($conn, $query_update);
    if (mysqli_affected_rows($conn) > 0)
    {
        echo "<p>Zmiana danych udana</p>";
    }
    else
    {
        echo "<p>zmiana danych nie powiodła się</p>\n";
        echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja_pracownika&id_pracownika=".$_GET['id_pracownika']."\">Cofnij</a></p>\n";
    }
    $query2 = "SELECT * FROM " . $prefix . "_zgloszenia WHERE pracownik='".$login."'"; 
    $wynik2 = mysqli_query($conn, $query2);
    $licz2 = mysqli_num_rows($wynik2);
    if ($licz2 > 0)
    {
        mysqli_query($conn, $query_update2);
        if (mysqli_affected_rows($conn) > 0)
        {
            echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja_pracownika&id_pracownika=".$_GET['id_pracownika']."\">Cofnij</a></p>\n";
        }
        else
        {
            echo "<p>zmiana danych nie powiodła się</p>\n";
           // echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja_pracownika&id_pracownika=".$_GET['id_pracownika']."\">Cofnij</a></p>\n";
        }
    }


?>

  <!-- Page Content -->
  <div class="container mt-5">

  </div>
  <!-- /.container -->

