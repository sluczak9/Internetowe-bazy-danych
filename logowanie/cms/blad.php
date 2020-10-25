<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
  <title><?php 
  if(isset($current_site))
    echo $current_site;
  else
    echo "Help Desk";
  ?></title>

  <!-- Bootstrap core CSS -->
  <link href= "../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
  
  <!-- Custom styles for this template -->
  <link href="../../vendor/bootstrap/css/wookies.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php if(isset($override_main))echo $override_main; else echo "../../index.php"?>">Help Desk</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . $main_location . "login.html\">Zaloguj</a></li>";
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=../../rejestracja/rejestracja.php>Rejestracja</a></li>";
          ?>
        </ul>
      </div>
    </div>
  </nav>


<!-- Page Content -->
<div class="container mt-5">
<div class="row">
   <div class="col-md-12 mb-5">
      <nav>
         <ul class="nav nav-tabs">
            <li class="nav-item"><a class="nav-link
               <?php
                  //if($wybor == "main") echo " active";
                  ?>
               " href="../../index.php">Strona główna</a></li>
         </ul>
      </nav>

   </div>
   <div class="col-md-4 mb-5">
      <p>Niepoprawny login lub hasło</p>
      <p><a href="login.html">Powrót</a></p>
   </div>
</div>
</div>
<?php
if(file_exists("../../footer.php")) {
  include("../../footer.php");
}
?>