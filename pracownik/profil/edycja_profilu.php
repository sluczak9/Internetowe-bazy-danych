<?php
session_start();
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
$login=$_SESSION['login'];
  
  ?>

  <!-- Page Content -->
  <div class="container mt-5">

   <!-- <div class="row">-->
      <!--<div class="col-md-4">-->
        
      <h2>Zmień swoje hasło</h2><br/>
      <form class="form-horizontal" action="main.php?wybor=wynik_edycji" method="POST">

<!-- Form Name -->



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

      
     <!--  </div>-->
    <!-- </div>-->
    <!-- /.row -->

    

  </div>
  <!-- /.container -->

  
 

  <!-- Bootstrap core JavaScript -->

</body>

</html>
