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
//$id_prac=$_GET['id_pracownika'];
$query = "SELECT `imie`,`nazwisko`,`login` FROM " . $prefix . "_pracownicy WHERE id_pracownika='" . $_GET['id_pracownika'] . "'";

$result = mysqli_query($conn, $query) or die("Zapytanie zakończone niepowodzeniem");
while ($wynik = mysqli_fetch_assoc($result))
{

    $imie = $wynik['imie'];
    $nazwisko = $wynik['nazwisko'];
    $login = $wynik['login'];

}
?>
    <h2 class="mt-4">Edycja pracownika <?php echo $imie ?> <?php echo $nazwisko ?></h2><br/>
<?php
//<form class="form-horizontal" action="index.php?wybor=wynik" method="POST">
echo "<form class=\"form-horizontal\" method=\"POST\" action=\"index.php?wybor=wynik_edycji_prac&id_pracownika=" . $_GET['id_pracownika'] . "\">";
?>
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

<!-- Text input-->
<div class="form-group">
<label class="col-md-4 control-label" for="login">Login</label>  
<div class="col-md-4">
<input id="login" name="login" type="text" value='<?php echo $login ?>' class="form-control input-md" required maxlength="20">
  
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
