<?php
//Właczenie wyświetlania błedów
//ini_set('display_errors','On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL);
session_start();
$override_main = "../";



$main_location = "../";
$current_site = "Help Desk";
if (file_exists("../header.php"))
{
    include ("../header.php");
}

//z_post();
echo "<br>";

if (file_exists("../conf.ig.php")) include_once ("../conf.ig.php");

$login=$_SESSION['login'];
if (strlen($_POST['haslo']) < 6 && strlen($_POST['haslo2'])<6)
{
  echo "hasło musi mieć 6 znaków";
  echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja\">Powrót</a></p>\n";
}
else if ($_POST['haslo'] == $_POST['haslo2'] && $licz == 0)
{
    $hashedpassword = password_hash($_POST['haslo'], PASSWORD_DEFAULT);
    #$query_update = "UPDATE `".$prefix."_uzytkownicy`  SET `haslo` = '" . $hashedpassword . "',`imie`= '" . $_POST['imie'] . "',
    #`nazwisko`= '" . $_POST['nazwisko'] . "',`nr_tel`= '" . $_POST['telefon'] . "',`firma`='" . $_POST['firma'] . "' WHERE `login`='".$login."'";

    $query_update = "UPDATE `".$prefix."_pracownicy`  SET `haslo` = '" . $hashedpassword . "' WHERE `login`='".$login."'";
    
    mysqli_query($conn, $query_update);
    if (mysqli_affected_rows($conn) > 0)
    {
        echo "<p>Zmiana danych udana</p>\n";
        echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja\">Powrót</a></p>\n";
    }
    else
    {
        echo "<p>zmiana danych nie powiodła się</p>\n";
    }

}
else
{
    echo "Nieprawidłowe potwierdzenie hasła";
    echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja\">Powrót</a></p>\n";
}

?>

  <!-- Page Content -->
  <div class="container mt-5">

  </div>
  <!-- /.container -->

