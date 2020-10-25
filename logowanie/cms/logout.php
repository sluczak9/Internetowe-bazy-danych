<?php
session_start();
unset($_SESSION['id_uzytkownika']);
unset($_SESSION['login']);
session_destroy();
header("location:../../index.php");
?>