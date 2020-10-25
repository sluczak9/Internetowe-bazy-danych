<?php
if(isset($_POST['wybor'])) $wybor = $_POST['wybor'];
if(isset($_GET['wybor'])) $wybor = $_GET['wybor'];
//echo $wybor;

$main_location = "../";
session_start();
if(file_exists("../header.php")) {
    include("../header.php");
}
?>
<div class="container mt-5">

    <div class="row">

      <div class="col-md-12 mb-5">
      
<nav>
 <ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link
    <?php
      if($wybor == "zgloszenia") echo " active";
    ?>
    " href="?wybor=zgloszenia">Wszystkie zgłoszenia</a></li>
    <li class="nav-item"><a class="nav-link
    <?php
      if($wybor == "przyjete") echo " active";
    ?>
    " href="?wybor=przyjete">Przyjęte zgłoszenia</a></li>
    <li class="nav-item"><a class="nav-link
    <?php
      if($wybor == "edycja") echo " active";
    ?>
    " href="?wybor=edycja">Zmień hasło</a></li>
 </ul>
</nav>

<?php
switch ($wybor){
  case "oferta":
  if(file_exists("../wybor/oferta.php")) include("../wybor/oferta.php");
  break;
  case "szczegoly":
    if(file_exists("zgloszenia/szczegoly.php")) include("zgloszenia/szczegoly.php");
    break; 
  case "status":
      if(file_exists("zgloszenia/status.php")) include("zgloszenia/status.php");
      break; 
  case "przyjete":
      if(file_exists("zgloszenia/przyjete.php")) include("zgloszenia/przyjete.php");
      break; 
  case "edycja":
      if(file_exists("profil/edycja_profilu.php")) include("profil/edycja_profilu.php");
      break;
  case "wynik_edycji":
      if(file_exists("profil/wynik_edycji.php")) include("profil/wynik_edycji.php");
      break; 
  default:
  if(file_exists("zgloszenia/wszystkie.php")) include("zgloszenia/wszystkie.php");
break;  
}
?>
<?php

?>
      </div> 
    </div>
    <!--/.row -->
  </div>

 <?php
  if(file_exists("../footer.php")) {
    include("../footer.php");
}
?>