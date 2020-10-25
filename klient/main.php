<?php
if(isset($_POST['wybor'])) $wybor = $_POST['wybor'];
if(isset($_GET['wybor'])) $wybor = $_GET['wybor'];

session_start();
$current_site = "HelpDesk";
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
      //if($wybor == "strona") echo " active";
    ?>
    " href="?wybor=strona_glowna">Strona główna</a></li>
    <li class="nav-item"><a class="nav-link
    <?php
      if($wybor == "formularz") echo " active";
    ?>
    " href="?wybor=formularz">Utwórz zgłoszenie</a></li>
    <li class="nav-item"><a class="nav-link
    <?php
      if($wybor == "moje_ogloszenia") echo " active";
    ?>
    " href="?wybor=moje_zgloszenia">Moje zgłoszenia</a></li>
    <li class="nav-item"><a class="nav-link
    <?php
      if($wybor == "edycja") echo " active";
    ?>
    " href="?wybor=edycja">Edytuj profil</a></li>
 </ul>
</nav>

<?php
switch ($wybor){
  case "formularz":
    if(file_exists("zgloszenia/formularz.php")) include("zgloszenia/formularz.php");
    break;
  case "zgloszenia":
    if(file_exists("zgloszenia/zgloszenia.php")) include("zgloszenia/zgloszenia.php");
    break;
  case "zapisz_zgloszenie":
    if(file_exists("zgloszenia/zapisz_zam.php")) include("zgloszenia/zapisz_zam.php");
    break; 
  case "moje_zgloszenia":
    if(file_exists("zgloszenia/wyslane_zgl.php")) include("zgloszenia/wyslane_zgl.php");
    break; 
  case "szczegoly":
    if(file_exists("zgloszenia/szczegoly.php")) include("zgloszenia/szczegoly.php");
    break; 
  case "edycja":
    if(file_exists("profil/edycja_profilu.php")) include("profil/edycja_profilu.php");
    break;
  case "wynik_edycji":
    if(file_exists("profil/wynik_edycji.php")) include("profil/wynik_edycji.php");
    break; 
  case "dezaktywacja":
    if(file_exists("profil/dezaktywacja.php")) include("profil/dezaktywacja.php");
    break; 
  default:
    if(file_exists("zgloszenia/strona_glowna.php")) include("zgloszenia/strona_glowna.php");
    break;
}
?>

      </div> 
    </div>
    <!--/.row -->
  </div>
  <!--/.container-->    
<?php
if(file_exists("../footer.php")) {
  include("../footer.php");
}
?>