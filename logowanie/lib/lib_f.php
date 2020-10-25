<?php
function z_post(){
    foreach ($_POST as $var => $value){
        echo "<br>$var => $value";
    }
}

#funkcja inaczej zwana show_error() 
function se($conn){ 
    echo /*mysqli_errno($conn). ": " .*/ mysqli_error($conn) . "\n"; 
   }

   ?>