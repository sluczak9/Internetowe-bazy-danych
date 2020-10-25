
  <?php

  //Konfig aplikacji
if(file_exists("../../conf.ig.php")) {
  include_once("../../conf.ig.php");
}

//Właczenie wyświetlania błedów
ini_set('display_errors','On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE );
//error_reporting(E_ALL);


?>

      
      <h2 class="mt-4">Rejestracja</h2><br/>
      <form class="form-horizontal" action="index.php?wybor=wynik" method="POST">
<fieldset>

<!-- Form Name -->
<!--<legend>Rejestracja</legend>-->

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="imie">Imię</label>  
  <div class="col-md-4">
  <input id="imie" name="imie" type="text" placeholder="Wpisz imię" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="nazwisko">Nazwisko</label>  
  <div class="col-md-4">
  <input id="nazwisko" name="nazwisko" type="text" placeholder="Wpisz nazwisko" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="login">Login</label>  
  <div class="col-md-4">
  <input id="login" name="login" type="text" placeholder="Wpisz login" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="haslo">Hasło</label>  
  <div class="col-md-4">
  <input id="haslo" name="haslo" type="password" placeholder="Wpisz hasło" class="form-control input-md" required>
    
  </div>
</div>

<!-- Password input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="haslo2">Potwierdź hasło</label>
  <div class="col-md-4">
    <input id="haslo2" name="haslo2" type="password" placeholder="Wpisz hasło" class="form-control input-md"required>
    
  </div>
</div>



<?php


?>
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

      
     
