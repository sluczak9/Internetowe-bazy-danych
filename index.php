<?php

//Właczenie wyświetlania błedów
ini_set('display_errors','On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE );

// Konfig projektu
if(file_exists("../ini/config.ini")) {
    $ini_array=parse_ini_file("../ini/config.ini");
}

//Konfig aplikacji
if(file_exists("conf.ig.php")) {
    include_once("conf.ig.php");
}

//Biblioteki
if(file_exists("lib/lib_f.php")){
    include("lib/lib_f.php");
}

if(file_exists("lib/form_f.php")){
    include("lib/form_f.php");
}
$override_main = "";
$main_location = "";
if(file_exists("header.php")) {
    include("header.php");
}
if(file_exists("main.php")) {
    include("main.php");
}
if(file_exists("footer.php")) {
    include("footer.php");
}
?>
  