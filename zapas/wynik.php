<?php
$current_site = "Help Desk";
if(file_exists("../header.php")) {
  include("../header.php");
}

//Rejestracja.php

/*<!-- Multiple Radios -->
<div class="form-group">
  <label class="col-md-4 control-label" for="radio">Wybierz opcję</label>
  <div class="col-md-4">
  <div class="radio">
    <label for="radio">
      <input type="radio" name="radio" id="radio" value="osoba" checked="checked">
      Osoba prywatna
    </label>
	</div>
  <div class="radio">
    <label for="radio">
      <input type="radio" name="radio" id="radio" value="firma">
      Firma
    </label>
	</div>
  </div>
</div>*/


//Właczenie wyświetlania błedów
//ini_set('display_errors','On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE );
error_reporting(E_ALL);


function z_post(){
    foreach ($_POST as $var => $value){
        echo "<br>$var => $value";
    }
}
 
echo "<br>";

if(file_exists("../conf.ig.php")) include_once("../conf.ig.php");

$login=$_POST['login'];

$sql = "SELECT * FROM ".$prefix."_uzytkownicy WHERE `login`='".$login."'";
echo "<br>";
$wynik=mysqli_query($conn,$sql);
$licz = mysqli_num_rows($wynik);
//echo "Liczba takich samych loginów: ".$licz."<br>";
 

if($_POST['haslo']==$_POST['haslo2'] && $licz==0){

   // echo "Prawidłowe hasła<br>";
   //$radio=$_POST['radio'];
     // if($radio=="firma")
     // {

        $query_insert="INSERT INTO ".$prefix."_uzytkownicy (`id_uzytkownika`, `login`, `haslo`,`imie`,`nazwisko`,`nr_tel`, `uprawnienia`,`firma`) VALUES
        (NULL, '".$_POST['login']."', '".$_POST['haslo']."', '".$_POST['imie']."', '".$_POST['nazwisko']."', '".$_POST['telefon']."','1','1')";
        
        echo $query_insert;
    
          mysqli_query($conn, $query_insert);
            if(mysqli_affected_rows($conn)>0){
               echo "<p>Rejestracja udana </p>";
               } 
            else{
               echo "<p>Rejestracja nie powiodła się</p>\n";
               }
      //}
      /*else if ($radio="osoba"){
        $query_insert="INSERT INTO ".$prefix."_uzytkownicy (`id_uzytkownika`, `login`, `haslo`,`imie`,`nazwisko`,`nr_tel`, `uprawnienia`,`firma`) VALUES
        (NULL, '".$_POST['login']."', '".$_POST['haslo']."', '".$_POST['imie']."', '".$_POST['nazwisko']."', '".$_POST['telefon']."','1','0')";
        
        echo $query_insert;
    
          mysqli_query($conn, $query_insert);
            if(mysqli_affected_rows($conn)>0){
               echo "<p>Rejestracja udana </p>";
               } 
            else{
               echo "<p>Rejestracja nie powiodła się</p>\n";
               }
      }
      else{
        echo "NIe wybrałeś opcji";
      }*/
}

else {
    echo "Nieprawidłowe potwierdzenie hasła lub taki login już istnieje";
    echo "<p><a href=\"rejestracja.php\">Powrót</a></p>";
}


?>

<div class="container mt-5"\>

<?php
  if(file_exists("../footer.php")) {
    include("../footer.php");
}
?>