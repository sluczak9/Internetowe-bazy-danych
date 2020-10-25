<?php
//Właczenie wyświetlania błedów
//ini_set('display_errors','On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE);
error_reporting(E_ALL);
$override_main = "../";
function z_post()
{
    foreach ($_POST as $var => $value)
    {
        echo "<br>$var => $value";
    }
}

$main_location = "../";
$current_site = "Help Desk";
if (file_exists("../header.php"))
{
    include ("../header.php");
}

//z_post();
echo "<br>";

if (file_exists("../conf.ig.php")) include_once ("../conf.ig.php");

$login = $_POST['login'];

$sql = "SELECT * FROM " . $prefix . "_uzytkownicy WHERE `login`='" . $login . "'";
$wynik = mysqli_query($conn, $sql);
$licz = mysqli_num_rows($wynik);
if (strlen($_POST['haslo']) < 6 && strlen($_POST['haslo2'])<6)
{
  echo "hasło musi mieć 6 znaków";
  echo "<p><a href=rejestracja.php>Powrót</a></p>";
}
else if ($_POST['haslo'] == $_POST['haslo2'] && $licz == 0)
{
    $hashedpassword = password_hash($_POST['haslo'], PASSWORD_DEFAULT);
    $query_insert = "INSERT INTO " . $prefix . "_uzytkownicy (`id_uzytkownika`, `login`, `haslo`,`imie`,`nazwisko`,`nr_tel`,`firma`) VALUES
        (NULL, '" . $_POST['login'] . "', '" . $hashedpassword . "', '" . $_POST['imie'] . "', '" . $_POST['nazwisko'] . "', '" . $_POST['telefon'] . "','" . $_POST['firma'] . "')";

    mysqli_query($conn, $query_insert);
    if (mysqli_affected_rows($conn) > 0)
    {
        echo "<p>Rejestracja udana </p>";
        echo "<p>Zaloguj się do nowo utworzonego konta </p>";
    }
    else
    {
        echo "<p>Rejestracja nie powiodła się</p>\n";
    }

}
else
{
    echo "Nieprawidłowe potwierdzenie hasła lub taki login już istnieje";
    echo "<p><a href=\"rejestracja.php\">Powrót</a></p>";
}

?>

  <!-- Page Content -->
  <div class="container mt-5">

  </div>
  <!-- /.container -->

<?php
if (file_exists("../footer.php"))
{
    include ("../footer.php");
}
?>
