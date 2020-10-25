<?php
session_start();
//Konfig aplikacji
if(file_exists("../conf.ig.php")) {
  include_once("../conf.ig.php");
}


?>

<form class="form-horizontal" method="POST" action="index.php?wybor=zapisz_zgloszenie">
<!--<input type="hidden" name="wybor" value="zapisz_zgloszenie">-->
<fieldset>

<!-- Form Name -->
<!-- <legend>Konfigurator wycieczki</legend> -->
<h3 class="mt-3">Formularz zgłoszenia</h2>


<!-- Select Basic -->
<div class="form-group">
  <label class="col-md-4 control-label" for="rodzaj">Rodzaj zgłoszenia</label>
  <div class="col-md-4">
    <select id="rodzaj" name="rodzaj" class="form-control" required>
    <!--<option></option> -->
    <option value="">Wybierz rodzaj</option>
      <?php
      $query = "SELECT * FROM `".$prefix."_rodzaj`";
      $result = mysqli_query ($conn, $query) or die ("Zapytanie zakończone niepowodzeniem");

      while ($wynik = mysqli_fetch_assoc($result)) {

        $name=$wynik['nazwa'];
        $id=$wynik['id_rodzaju'];
        
        echo "<option value=".$name.">".$name."</option>";
        
        
      }


      ?>
      
    </select>
  </div>
</div>

<!-- Textarea -->
<div class="form-group">
  <label class="col-md-4 control-label" for="opis">Opis</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="opis" name="opis" placeholder="Wpisz opis zgłoszenia" required></textarea>
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="miasto">Miasto</label>  
  <div class="col-md-4">
  <input id="miasto" name="miasto" type="text" placeholder="Wpisz miasto" class="form-control input-md">
  </div>
</div>




<!-- Button (Double) -->
<div class="form-group">
  <label class="col-md-4 control-label" for=""></label>
  <div class="col-md-8">
    <button id="" name="" class="btn btn-success">Wyślij</button>
    <button id="" name="" class="btn btn-danger" type="reset">Wyczyść</button>
  </div>
</div>

</fieldset>
</form>

