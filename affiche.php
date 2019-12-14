<?php
session_start();
if (isset($_SESSION['id'])) {
	?>
	<HTML>

	<meta name="viewport" content="width=device-width, initial-scale=1">


	<BODY style="background: url('img/bckg5.jpg') 50% 50%/cover no-repeat fixed;">
		<div>

			<h1>My Informations</h1>


			<form action="" method="POST">
				<a href='fermer.php'><img src='img/close.png' height='50' width='50'></a>

			</form>

		</div>


	<?php
		$x = $_GET['x'];
		include("config.php");
		$res = mysqli_query($c, "select * from personne where Idp='$x'");
		if ($l = mysqli_fetch_array($res)) {
			echo "<font color='red'><left>Votre ID est </font>: $l[0] </left><Br>";
			echo "<font color='blue'><left>Votre Nom est</font>: $l[1] </left><Br>";
			echo "<font color='green'><left>Votre Prénom est</font>: $l[2] </left><Br>";
			echo "<font color='purple'><left>Votre Age est</font>: $l[3] </left><Br>";
			echo "<font color='oilver'><left>Votre Login est</font>: $l[4] </left><Br>";
			echo "<font color='orange'><left>Votre MDP est</font>: $l[5] </left><Br>";
		}
	}
	?>





	</body>

	</html>