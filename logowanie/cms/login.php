<?php
//Włączanie obsługi sesji
session_start();

//Właczenie wyświetlania błędów
ini_set('display_errors', 'On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(E_ALL);
//Pobieram metodę post z innego pliku
if (file_exists("../lib/lib_f.php"))
{
    include ("../lib/lib_f.php");
}

//Konfig aplikacji
if (file_exists("../../conf.ig.php"))
{
    include_once ("../../conf.ig.php");
}

/*function z_post(){
    foreach ($_POST as $var => $value){
        echo "<br>$var => $value";
    }
}*/

$stan="Aktywny";
$radio = $_POST['radio'];
$tabele = array(
    "klient" => "uzytkownicy",
    "pracownik" => "pracownicy",
    "admin" => "admin"
);
$id_w_tabelach = array(
    "klient" => "id_uzytkownika",
    "pracownik" => "id_pracownika",
    "admin" => "id_admina"
);
$typy_uzytkownikow = array(
    "klient" => "Klient",
    "pracownik" => "Pracownik",
    "admin" => "Administrator"
);
$query = "SELECT `".$id_w_tabelach[$radio]."`,`login`,`haslo`,`stan` FROM ".$prefix."_".$tabele[$radio]." WHERE login='".$_POST['login']."' AND stan ='".$stan."'";
$wynik = mysqli_query($conn, $query);

$logged = false;
//se($conn);

if (mysqli_num_rows($wynik) == 1)
{
    $wiersz = mysqli_fetch_assoc($wynik);
    if (password_verify($_POST['haslo'], $wiersz['haslo']))
    {
        //echo $wiersz['id_user']."<br>";
        //echo $wiersz['login']."<br>";
        $_SESSION['id_uzytkownika'] = $wiersz['id_uzytkownika'];
        $_SESSION['login'] = $wiersz['login'];
        $_SESSION['typ'] = $typy_uzytkownikow[$radio];
        $logged = true;
    }
}
if ($logged === false)
{
    header("location:blad.php");
    echo "<p>Niepoprawny login lub hasło</p>";
    echo "<p><a href=\"login.html\">Powrót</a></p>";
}
else
{
    header("location:../../" . $radio . "/main.php");
}

?>