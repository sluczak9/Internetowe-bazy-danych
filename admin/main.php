<?php
if(isset($_POST['wybor'])) $wybor = $_POST['wybor'];
if(isset($_GET['wybor'])) $wybor = $_GET['wybor'];
//echo $wybor;

session_start();
$main_location = "../";
if(file_exists("../header.php")) {
  include("../header.php");
}
?>

 <!-- wybor Content -->
 <div class="container mt-5">

    <div class="row">

      <div class="col-md-12 mb-5">
      
<nav>
 <ul class="nav nav-tabs">
 <li class="nav-item"><a class="nav-link
    <?php
      //if($wybor == "zgloszenia") echo " active";
    ?>
    " href="?wybor=zgloszenia">Wszystkie zgłoszenia</a></li>
    <li class="nav-item"><a class="nav-link
    <?php
      if($wybor == "pracownicy") echo " active";
    ?>
    " href="?wybor=pracownicy">Lista pracowników</a></li>
    <li class="nav-item"><a class="nav-link
    <?php
      if($wybor == "rejestracja") echo " active";
    ?>
    " href="?wybor=rejestracja">Rejestracja pracowników</a></li>
    <li class="nav-item"><a class="nav-link
    <?php
      if($wybor == "edycja") echo " active";
    ?>
    " href="?wybor=edycja">Edytuj profil</a></li>
 </ul>
</nav>

<?php
switch ($wybor){
  case "rejestracja":
    if(file_exists("wybor/rejestracja/rejestracja.php")) include("wybor/rejestracja/rejestracja.php");
    break;
  case "wynik":
    if(file_exists("wybor/rejestracja/wynik.php")) include("wybor/rejestracja/wynik.php");
    break;
  case "pracownicy":
    if(file_exists("wybor/pracownicy.php")) include("wybor/pracownicy.php");
    break; 
  case "details":
    if(file_exists("wybor/details.php")) include("wybor/details.php");
    break; 
  case "stan":
      if(file_exists("wybor/stan.php")) include("wybor/stan.php");
      break; 
  case "przyjete":
    if(file_exists("wybor/przyjete.php")) include("wybor/przyjete.php");
    break;
  case "edycja":
      if(file_exists("wybor/profil/edycja_profilu.php")) include("wybor/profil/edycja_profilu.php");
      break;
  case "wynik_edycji":
      if(file_exists("wybor/profil/wynik_edycji.php")) include("wybor/profil/wynik_edycji.php");
      break;
  case "edycja_pracownika":
      if(file_exists("wybor/profil/edycja_pracownika.php")) include("wybor/profil/edycja_pracownika.php");
      break; 
  case "wynik_edycji_prac":
      if(file_exists("wybor/profil/wynik_edycji_prac.php")) include("wybor/profil/wynik_edycji_prac.php");
      break; 
    default:
    if(file_exists("wybor/wszystkie.php")) include("wybor/wszystkie.php");
      break; 
      
}
?>
      </div> 
    </div>
  </div>
<?php
if(file_exists("../footer.php")) {
  include("../footer.php");
}
?>