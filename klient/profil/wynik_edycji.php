<script>
    function potwierdz()
{
    confirm("Press a button!");
}
    
</script>
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
    $query_update = "UPDATE `".$prefix."_uzytkownicy`  SET `login`= '" . $_POST['login'] . "', `haslo` = '" . $hashedpassword . "',`imie`= '" . $_POST['imie'] . "',`nazwisko`= '" . $_POST['nazwisko'] . "',`nr_tel`= '" . $_POST['telefon'] . "',`firma`='" . $_POST['firma'] . "' WHERE `login`='".$login."'";
    $query_update2 = "UPDATE `".$prefix."_zgloszenia` SET `klient`= '" . $_POST['login'] . "' WHERE `klient` = '".$login."'";
    mysqli_query($conn, $query_update);
    if (mysqli_affected_rows($conn) > 0)
    {
        //echo "<p>Zmiana danych udana</p>";
        //echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"../index.php\">wyloguj</a></p>\n";
        session_start();
        unset($_SESSION['id_uzytkownika']);
        unset($_SESSION['login']);
        session_destroy();
        header("location:../index.php");
    }
    else
    {
        echo "<p>zmiana danych nie powiodła się</p>\n";
        echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja\">Powrót</a></p>\n";
    }
    
    mysqli_query($conn, $query_update2);
    if (mysqli_affected_rows($conn) > 0)
    {
        echo "<p>w1</p>";
        //echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja\">Powrót</a></p>\n";
    }
    else
    {
        echo "<p>w2</p>\n";
        echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja\">Powrót</a></p>\n";
    }

}
else
{
    echo "w3";
    echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja\">Powrót</a></p>\n";
}

?>

  <!-- Page Content -->
  <div class="container mt-5">

  </div>
  <!-- /.container -->

