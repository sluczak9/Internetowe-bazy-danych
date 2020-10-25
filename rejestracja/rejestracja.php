
<?php
//Właczenie wyświetlania błedów
ini_set('display_errors','On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE );
//error_reporting(E_ALL);
//Konfig aplikacji
if(file_exists("../conf.ig.php")) {
  include_once("../conf.ig.php");
}
$override_main = "../";
$main_location = "../";
$current_site = "Rejestracja";
if(file_exists("../header.php")) {
  include("../header.php");
}

?>


  <!-- Page Content -->
  <div class="container mt-5">

   <!-- <div class="row">-->
      <!--<div class="col-md-4">-->
        
      <h2>Rejestracja</h2><br/>
      <form class="form-horizontal" action="wynik.php" method="POST">
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imie">Imię</label>  
  <div class="col-md-4">
  <input id="imie" name="imie" type="text" placeholder="Wpisz imię" class="form-control input-md" required maxlength="50">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nazwisko">Nazwisko</label>  
  <div class="col-md-4">
  <input id="nazwisko" name="nazwisko" type="text" placeholder="Wpisz nazwisko" class="form-control input-md" required maxlength="80">
    
  </div>
</div>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="firma">Firma</label>
  <div class="col-md-4">
    <select id="firma" name="firma" class="form-control" required>
    <!--<option></option> -->
    <option value="">Wybierz firmę</option>
      <?php
      $query = "SELECT * FROM `".$prefix."_firmy`";
      $result = mysqli_query ($conn, $query) or die ("Zapytanie zakończone niepowodzeniem");

      while ($wynik = mysqli_fetch_assoc($result)) {

        $name=$wynik['nazwa'];
        $id=$wynik['id_firmy'];
        
        echo "<option value=".$name.">".$name."</option>";
        
        
      }


      ?>
      
    </select>
  </div>
</div>


<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="telefon">Numer telefonu</label>  
  <div class="col-md-4">
  <input id="telefon" name="telefon" type="text" placeholder="Wpisz numer telefonu" class="form-control input-md" required maxlength="12">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="Wpisz login" class="form-control input-md" required maxlength="20">
    
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
    <button id="" name="" class="btn btn-success">Rejestruj</button>
    <button id="" name="" class="btn btn-danger" type="reset">Wyczyść</button>
  </div>
</div>

</fieldset>
</form>

      
     <!--  </div>-->
    <!-- </div>-->
    <!-- /.row -->

    

  </div>
  <!-- /.container -->
<?php
  if(file_exists("../footer.php")) {
  include("../footer.php");
}
?>
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.slim.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>

</html>
