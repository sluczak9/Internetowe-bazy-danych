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
  <link href= "<?php echo $main_location?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet"> 
  
  <!-- Custom styles for this template -->
  <link href="<?php echo $main_location?>vendor/bootstrap/css/wookies.css" rel="stylesheet">

</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="<?php if(isset($override_main))echo $override_main; else echo "main.php?wybor=strona_glowna"?>">Help Desk</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <?php
          if (isset($_SESSION['login'])) {
            echo "<li class=\"nav-item\"><a class=\"nav-link\">" . $_SESSION['typ'] . ": " . $_SESSION['login'] . "</a></li>";
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . $main_location . "logowanie/cms/logout.php\">Wyloguj</a></li>";
          }
          else {
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . $main_location . "logowanie/cms/login.html\">Zaloguj</a></li>";
            echo "<li class=\"nav-item\"><a class=\"nav-link\" href=\"" . $main_location . "rejestracja/rejestracja.php\">Rejestracja</a></li>";
          }
          ?>
        </ul>
      </div>
    </div>
  </nav>
 </html>