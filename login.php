<HTML>

<meta name="viewport" content="width=device-width, initial-scale=1">


<BODY style="background: url('img/bckg4.jpg') 50% 50%/cover no-repeat fixed;">
	<form action='' method='POST'>
		<center>Username: <input type="text" name="login"> </center><Br>
		<center>Password: <input type="password" name="mdp"></center> <Br>
		<center><input type="submit" value="Login" name="ok"></center>
	</form>
	<?php
	if (isset($_POST['ok'])) {
		$login = $_POST['login'];
		$mdp = $_POST['mdp'];
		include("config.php");
		$res = mysqli_query($c, "SELECT * from personne WHERE login = '$login' and mdp='$mdp'");
		if ($l = mysqli_fetch_array($res)) {
			session_start();
			$_SESSION['id'] = $l[0];
			header("Location:CRUD.php");
		} else
			echo "<center>ERROR: Username or Password is incorrect!</center>";
		mysqli_close($c);
	}
	?>
</body>

</html>