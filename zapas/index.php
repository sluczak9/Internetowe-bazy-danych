<?php
$current_site = "Help Desk";
$main_location = "../";
if(file_exists("../header.php")) {
  include("../header.php");
}
?>

<!-- Page Content -->
<div class="container mt-5">
   <div class="row">
      <div class="col-md-4 mb-5">
         <h2>Hello</h2>
         <hr>
         <p>Hello. Jestem PHP w wersji: <b>7.2.24-0ubuntu0.18.04.4</b>.</p>
         <p>Internetowe bazy danych</p>
      </div>
      <div class="col-md-8 mb-5">
         <h2>Źródło</h2>
         <hr>
         <pre>
	&lt;p>hello&lt;/p>
	&lt;?php
	      echo "&lt;p>Hello. Jestem PHP w wersji: &lt;b>".phpversion()."&lt;/b>.&lt;/p>\n";
	?>
	</pre>
      </div>
   </div>
</div>

<?php
  if(file_exists("../footer.php")) {
    include("../footer.php");
}
?>