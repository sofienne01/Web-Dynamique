<?php
session_start();
if (isset($_SESSION['id'])) {
	?>
	<HTML>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<BODY style="background: url('img/bckg.jpg') 50% 50%/cover no-repeat fixed;">
	<?php
		$x = $_GET['x'];
		include("config.php");
		$res = mysqli_query($c, "SELECT * from personne where idp='$x'");
		if ($l = mysqli_fetch_array($res)) {
			echo "<form action ='' method='POST'>";
			echo "Nom: <input type='text' name='nom' value='$l[1]'>";
			echo "Prenom: <input type='text' name='prenom' value='$l[2]'>";
			echo "Age: <input type='number' name='age' value='$l[3]'>";
			echo "Login: <input type='text' name='login' value='$l[4]'>";
			echo "Password: <input type='text' name='mdp' value='$l[5]'>";
			echo "<input type='submit' value='modifier' name='ok'>";
			echo "</form>";
		}
		if (isset($_POST['ok'])) {
			$nom = $_POST['nom'];
			$prenom = $_POST['prenom'];
			$age = $_POST['age'];
			$login = $_POST['login'];
			$mdp = $_POST['mdp'];
			$res = mysqli_query($c, "UPDATE personne set nom='$nom', prenom='$prenom', age='$age', login='$login', mdp='$mdp' where idp='$x'");
			mysqli_close($res);
			header("Location: CRUD.php");
		}
	} else
		header("Location:login.php");

	?>


	</body>

	</html>