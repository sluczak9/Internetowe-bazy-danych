<?php
session_start();
//Właczenie wyświetlania błedów
ini_set('display_errors', 'On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE);
//error_reporting(E_ALL);
//Konfig aplikacji
if (file_exists("../conf.ig.php"))
{
    include_once ("../conf.ig.php");
}
$override_main = "../";
$main_location = "../";
$current_site = "Rejestracja";
if (file_exists("../header.php"))
{
    include ("../header.php");
}
$login = $_SESSION['login'];

$query = "SELECT `login`,`haslo`,`imie`,`nazwisko` FROM " . $prefix . "_admin WHERE login='" . $login . "'";
$result = mysqli_query($conn, $query) or die("Zapytanie zakończone niepowodzeniem");
while ($wynik = mysqli_fetch_assoc($result))
{

    $haslo = $wynik['haslo'];
    $imie = $wynik['imie'];
    $nazwisko = $wynik['nazwisko'];
}

?>

  <!-- Page Content -->
  <div class="container mt-5">

      <h2>Edytuj swój profil</h2><br/>
      <form class="form-horizontal" action="main.php?wybor=wynik_edycji" method="POST">
<fieldset>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imie">Imię</label>  
  <div class="col-md-4">
  <input id="imie" name="imie" type="text" value='<?php echo $imie ?>' class="form-control input-md" required maxlength="50">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nazwisko">Nazwisko</label>  
  <div class="col-md-4">
  <input id="nazwisko" name="nazwisko" type="text" value='<?php echo $nazwisko ?>' class="form-control input-md" required maxlength="80">
    
  </div>
</div>


<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="haslo">Hasło</label>
  <div class="col-md-4">
    <input id="haslo" name="haslo" type="password" placeholder="Wpisz hasło" class="form-control input-md"required>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="haslo2">Potwierdź hasło</label>
  <div class="col-md-4">
    <input id="haslo2" name="haslo2" type="password" placeholder="Wpisz hasło" class="form-control input-md"required>
    
  </div>
</div>


<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for="button1id"></label>
  <div class="col-md-8">
    <button id="" name="" class="btn btn-success">Zmień dane</button>
    
    <button id="" name="" class="btn btn-danger" type="reset">Wyczyść</button>
  </div>
</div>

</fieldset>
</form>
</div>

</body>

</html>
