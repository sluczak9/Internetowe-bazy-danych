<?php
session_start();
$login=$_SESSION['login'];
?>
<!-- Page Content -->
<div class="container mt-5">
	<div class="row">
		<div class="col-md-12 mb-5">

			<h2>Witamy ponownie <?php echo $login ?> !</h2>
			<p>Aby rozpocząć wybierz z powyższego paska opcję, która Cię interesuje.</p>
			<p>Strona 
				<b>
					<i>Utwórz zgłoszenie</i>
				</b> pozwala zgłosić nowy problem i wysłać go do naszego zespołu.
				<br>Na stronie 
					<b>
						<i>Moje zgłoszenia</i>
					</b> sprawdzisz aktualny stan zgłoszonych problemów.
				</p>
				<p>W celu zmiany swoich informacji osobowych lub dezaktywacji konta wybierz stronę <b><i>Edytuj Profil</i></b>.</p>
					</b>
				</p>
				<p>
					<u>Pamiętaj, aby po zakończonej pracy wylogować się używając opcji 
						<b>
							<i>Wyloguj</i>
						</b>
					</u>.
				</p>
			</div>
			<div class="col-md-4 mb-5"></div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container -->
