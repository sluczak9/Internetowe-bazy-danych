<?php
   //Konfig aplikacji
   if (file_exists("../conf.ig.php"))
   {
       include_once ("../conf.ig.php");
   }
   
   echo "<h2 class=\"mt-5\">Szczegóły pracownika</h2>\n";
   echo "<div class=\"container\">\n";
   echo "<div class=\"row\">\n";
   $login;
   /* Wysyłanie zapytania SQL */
   //$nazwa = "SELECT `login` FROM "
   $query = "SELECT * FROM " . $prefix . "_pracownicy WHERE `id_pracownika`= " . $_GET['id_pracownika'];
   $result = mysqli_query($conn, $query) or die("Zapytanie zakończone niepowodzeniem");
   while ($wynik = mysqli_fetch_array($result))
   {
       echo "<div class=\"col-md-6\">\n";
       echo "<div class=\"card bg-light\">\n";
       echo "<div class=\"card-body\">\n";
       echo "<h5 class=\"card-title\">Pracownik: <i>" . $wynik['login'] . "</i></h5>";
       echo "<p class=\"card-text\">Imię: " . $wynik['imie'] . "</p>";
       echo "<p class=\"card-text\">Nazwisko: " . $wynik['nazwisko'] . "</p>";
       echo "<p class=\"card-text\">Stan: <b>" . $wynik['stan'] . "</b></p>";
       $login = $wynik['login'];
       echo "</div>\n"; //koniec card-body
       echo "</div>\n"; // koniec car
       echo "<p class=\"mt-5\"><a class=\"btn btn-primary\" href=\"?wybor=edycja_pracownika&id_pracownika=" . $_GET['id_pracownika'] . "\">Edytuj dane</a></p>\n";
       echo "</div>\n"; // koniec col-md-6
       echo "<div class=\"col-md-6\">\n";
   
       echo "<form class=\"form-horizontal\" method=\"POST\" action=\"index.php?wybor=stan&id_pracownika=" . $_GET['id_pracownika'] . "\">";
       echo "<fieldset>";
   
       echo "<div class=\"form-group\">";
       echo "<h4><label class=\"col-md-6 control-label\" for=\"stan\">Stan pracownika</label></h4>";
       echo "<div class=\"col-md-6\">";
       echo "<select id=\"stan\" name=\"stan\" class=\"form-control\" required>";
       echo "<option value=\"\">Wybierz stan</option>";
   
       $query = "SELECT * FROM `" . $prefix . "_stanprac` ";
       $result = mysqli_query($conn, $query) or die("Zapytanie zakończone niepowodzeniem");
   
       while ($wynik = mysqli_fetch_assoc($result))
       {
   
           $name = $wynik['nazwa'];
           $id = $wynik['nazwa'];
   
           echo "<option value=" . $name . ">" . $name . "</option>";
   
       }
       echo "</select>";
       echo "</div>";
       echo "</div>";
       //<!-- Button -->
       echo "<div class=\"form-group\">";
       echo "<label class=\"col-md-6 control-label\" for=\"\"></label>";
       echo "<div class=\"col-md-6\">";
       echo "<button id=\"\" name=\"\" class=\"btn btn-success\">Zmień stan</button>";
       echo "</div>";
       echo "</div>";
   
       echo "</fieldset>";
       echo "</form>";
       echo "</div>\n"; //koniec card-body
       echo "</div>\n"; // koniec card
       echo "</div>\n"; // koniec col-md-6
   }
   echo "</div>\n";
   echo "</div>\n";
   $query = "SELECT * FROM " . $prefix . "_zgloszenia WHERE `pracownik`= '" . $login . "'";
   $result = mysqli_query($conn, $query) or die("Zapytanie zakończone niepowodzeniem");
   
   echo "<h2 class=\"mt-3\">Lista przyjętych zgłoszeń pracownika $login</h2>\n";
   /* Wysyłanie zapytania SQL */
   $row_count = mysqli_num_rows($result);
   if ($row_count != 0)
   {
       /* Wyświetlenie wyników w HTML */
       echo "<table class=\"table table-secondary\">\n";
       echo "<tr><th>Numer</th><th>Klient</th><th>Data zgłoszenia</th><th>Status</th></tr>\n";
       while ($wynik = mysqli_fetch_array($result))
       {
           echo "\t<tr>\n";
           echo "<td><a class=\"btn btn-link\" href=\"?wybor=przyjete&id_zgloszenia=" . $wynik['id_zgloszenia'] . "\">" . $wynik['id_zgloszenia'] . "</td>";
           echo "<td>" . $wynik['klient'] . "</a></td>";
           echo "<td>" . date("d-m-Y H:i:s", $wynik['data']) . "</td>";
           echo "<td>" . $wynik['status'] . "</td>";
           echo "\t</tr>\n";
       }
   }
   else echo "<h3>Brak przyjętych zleceń</h3>";
   
   echo "</table>\n"
   ?>
