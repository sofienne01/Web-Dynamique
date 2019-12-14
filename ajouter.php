<?php
session_start();
if (isset($_SESSION['id'])) {
	?>
	<HTML>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<BODY style="background: url('img/bckg.jpg') 50% 50%/cover no-repeat fixed;">
		<form action="" method="POST">
			<a href='fermer.php'><img src='img/close.png' height='50' width='50'></a>
			<center> Name: <input type="text" name="nom"></center> <Br>
			<center>Last Name: <input type="text" name="prenom"></center> <Br>
			<center>Age: <input type="text" name="age"></center> <Br>
			<center>Username: <input type="text" name="login"></center> <Br>
			<center>Password: <input type="password" name="mdp"></center> <Br>
			<center><input type="submit" name="OK" value="ADD"> </center>
		</form>
		<?php
			if (isset($_POST['OK'])) {
				$nom = $_POST['nom'];
				$prenom = $_POST['prenom'];
				$age = $_POST['age'];
				$login = $_POST['login'];
				$mdp = $_POST['mdp'];

				include("config.php");
				$res = mysqli_query($c, "insert into Personne VALUES (NULL,'$nom','$prenom','$age','$login','$mdp')");
				mysqli_close($c);
				header("Location:CRUD.php");
			}
			?>
	</body>

	</html>
<?php

} else
	header("Location:login.php");
?>