<?php

   //Konfig aplikacji
   if(file_exists("../conf.ig.php")) {
     include_once("../conf.ig.php");
   }
  

//Podsumowanie zamowienia
//echo "<p>Cena podstawowa: <Strong>".$cena_podstawowa." kredytów</strong></p>\n";
//... i tak dalej

?>


<h2>Dokończ zgłoszenie</h2>
<p>Wpisz miasto oraz swój login aby poprawnie wypełnić zgłoszenie</p>
<form action="index.php?wybor=zapisz_zgloszenie" method="POST">
    <!-- <input type="hidden" name="wybor" value="zapisz_zamowienie">// -->
   <p><label>Miasto: <input type="text" placeholder="Wprowadź nazwę miasta" required class="form-control input-lg required"></label>
   <!--<label>Nazwisko <input type="text" placeholder="Wprowadź nazwisko" required class="form-control input-lg required"></label></p>-->
   <p><button class="btn btn-primary" type="submit">Wyślij</button></p>

<?php
//echo "<input type=\"hidden\" name=\"imie\" value=\"".$_POST['imie']."\" >\n";
//echo "<input type=\"hidden\" name=\"nazwisko\" value=\"".$_POST['nazwisko']."\" >\n";
echo "<input type=\"hidden\" name=\"rodzaj\" value=\"".$_POST['rodzaj']."\" >\n";
echo "<input type=\"hidden\" name=\"opis\" value=\"".$_POST['opis']."\" >\n";

?>

</form>
<!--<hr> -->

