<?php
if (isset($_POST['wybor'])) $wybor = $_POST['wybor'];
if (isset($_GET['wybor'])) $wybor = $_GET['wybor'];
session_start();
$main_location = "../";
if (file_exists("../header.php"))
{
    include ("../header.php");
}
?>
 <!-- wybor Content -->
<div class="container mt-5">
    <div class="row">
      <div class="col-md-12 mb-5">
        <?php
if ($_SESSION['id_user'] <> "")
{
    echo "<h2>Witaj " . $_SESSION['login'] . "!!!</h2>";
    echo "<div class=\"btn-group\">\n";
    echo "<a class=\"btn btn-primary\" href=\"cms/index.php\">CMS</a>\n";
    echo "<a class=\"btn btn-secondary\" href=\"cms/logout.php\">Logout</a>\n";
    echo "</div>\n";
}
else
{
    header("location:../index.php");
}
?>
      </div> 
    </div>
  </div>
<?php
if (file_exists("../footer.php"))
{
    include ("../footer.php");
}
?>
