<?php

$host="localhost";
$login= "";
$password="";
$dbname="";
$prefix="pro";

// /t-tabulacja
///n- enter
/* Łączenie i wybranie bazy */
$conn = mysqli_connect($host, $login, $password) or die ("Nie można się połączyć");
//echo ("Połączenie nawiązane");
mysqli_select_db ($conn, $dbname) or die ("Nie mozna wybrać bazy danych");
mysqli_query($conn, "SET NAMES UTF8");
?>
