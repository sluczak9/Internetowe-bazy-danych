

<?php
   if(isset($_POST['wybor'])) $wybor = $_POST['wybor'];
   if(isset($_GET['wybor'])) $wybor = $_GET['wybor'];
   //echo $wybor;
   
   //Właczenie wyświetlania błedów
   ini_set('display_errors','On');
   //error reporting( E_WEARNING );
   error_reporting(E_ALL ^ E_NOTICE );
   //error_reporting(E_ALL);
   
   
   ?>
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
                  " href="index.php">Strona główna</a></li>
            </ul>
         </nav>
         <br><h2>Witamy na stronie naszego HelpDesk'u</h2><br>
               <p>Jesteśmy nową i szybko rozwijającą się firmą, której zadaniem jest poprawa jakości pracy spółek partnerskich oraz zwiększanie niezawodności Państwa pracy.
                  Nasi wyszkoleni pracownicy są przygotowani do szybkiego reagowania na problemy, dzięki czemu zaufały nam już dziesiątki firm.
               </p>
               <p>Nasza firma zajmuje się wsparciem technicznym a wszystko odbywa się natychmiastowo, za pośrednictwem sieci.</p>
               <p>Nie trać czasu i pieniędzy na szukanie niewykwalifikowanych pracowników, my zajmiemy się twoimi problemami, a Ty będziesz mógł bez obaw kontynuować swoją pracę.
               <p>
               <p>Nasze usługi obejmują także dodatkowe wsparcie w zakresie sprzętów fizycznych.
                  Na dodatkowe żądanie wysyłamy pod dany adres naszego przedstawiciela, który pomoże z problemami nie możliwymi do rozwiązania online.
               </p>
               <p>Masz pytania ? Skontaktuj się z nami w wiadomości e-mail lub pod numerem telefonu.
                  Nasi asystenci są dostępni 24/7, odezwiemy się do Ciebie w przeciągu kilku chwil.
               </p>
               <p><b>email@example.com<br>
                  123 456 789</b>
               </p>
               <br><p><h2>Oferujemy usługi w zakresie:</h1>
               <ul>
                     <li>Napraw problemów związanych z oprogramowaniem
                     <br><li>Administrowania usług sieciowych
                     <br><li>Naprawy urządzeń peryferyjnych
                     <br><li>Optymizacji komputerów
                     <br><li>Instalacji oprogramowania (wraz z konfiguracją)
                     <br><li>Aktualizacji oprogramowania
               </ul>


      </div>
      <div class="col-md-4 mb-5">
      </div>
   </div>
   <!-- /.row -->
</div>
<!-- /.container -->

