
 <?php

//Konfig aplikacji
if(file_exists("../conf.ig.php")) {
  include_once("../conf.ig.php");
}

//Właczenie wyświetlania błedów
//ini_set('display_errors','On');
//error reporting( E_WEARNING );
error_reporting(E_ALL ^ E_NOTICE );
error_reporting(E_ALL);



//z_post();
echo "<br>";



$login=$_POST['login'];

$sql = "SELECT * FROM ".$prefix."_pracownicy WHERE `login`='".$login."'";
//echo $sql ;
echo"<br>";
$wynik=mysqli_query($conn,$sql);
$licz = mysqli_num_rows($wynik);
//echo "Liczba takich samych loginów: ".$licz."<br>";


 
if (strlen($_POST['haslo']) < 6 && strlen($_POST['haslo2'])<6)
{
  echo "hasło musi mieć 6 znaków";
  echo "<p><a href=?wybor=rejestracja>Powrót</a></p>";
}
  
else if($_POST['haslo']==$_POST['haslo2'] && $licz==0){
  $hashedpassword = password_hash($_POST['haslo'], PASSWORD_DEFAULT);

        $query_insert="INSERT INTO ".$prefix."_pracownicy (`id_pracownika`, `imie`, `nazwisko`,`login`,`haslo`) VALUES
        (NULL, '".$_POST['imie']."', '".$_POST['nazwisko']."', '".$_POST['login']."', '".$hashedpassword."')";
        
          mysqli_query($conn, $query_insert);
            if(mysqli_affected_rows($conn)>0){
               echo "<p>Rejestracja udana </p>";
               } 
            else{
               echo "<p>Rejestracja nie powiodła się</p>\n";
               }
     
}

else{
    echo "Nieprawidłowe potwierdzenie hasła lub taki login już istnieje";
    echo "<p><a href=?wybor=rejestracja>Powrót</a></p>";
}


 ?>

  