<?php
session_start();
if (isset($_SESSION['id'])) {
	?>
	<HTML>

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<BODY style="background: url('img/bckg1.jpg') 50% 50%/cover no-repeat fixed;">
	<?php
		include("config.php");         // $c = mysqli_connect("localhost","root","","Hachem");
		$res = mysqli_query($c, "select * from personne");
		echo "<a href='fermer.php'><img src='img/close.png' height='100' width='100'> </a><center> <font color='red'><a href='ajouter.php'><img src='img/add.png' height='50' width='200'></a></center> <Br>";
		echo " <form action ='suptout.php' method='POST'>";
		echo "<table border='10'  style='width:100%;height:100%'  > <tr> <td BGCOLOR='FCCCCC' align='center'>Idp</td> <td BGCOLOR='FCCCCC' align='center'> Nom</td> <td BGCOLOR='FCCCCC' align='center'>Prénom</td> <td BGCOLOR='FCCCCC' align='center'> Age</td> <td BGCOLOR='FCCCCC' align='center'>Login</td> <td BGCOLOR='FCCCCC' align='center'>Mdp</td> <td BGCOLOR='FCCCCC' align='center'>Supp</td> <td BGCOLOR='FCCCCC' align='center'> Modifier </td></tr>";

		while ($l = mysqli_fetch_array($res)) {
			//echo "<tr> <td>$l[0]</td>  <td>$l[1]</td>  <td>$l[2]</td>  <td>$l[3]</td>  <td>$l[4]</td>  <td>$l[5]</td> </tr> ";
			//echo "<tr> <td align='center'>$l[0]</td>  <td align='center'> <a href='affiche.php?x=$l[0]'>$l[1] </a> </td>  <td align='center'>$l[2]</td>  <td align='center'>$l[3]</td>  <td align='center'>$l[4]</td>  <td align='center'>$l[5]</td>  </tr> 
			echo "
	   <tr><td><input type='checkbox' name='sup[]' value='$l[0]></td>
	   <td align='center'>$l[0]</td> 
	   <td align='center'> <a href='affiche.php?x=$l[0]'>$l[1] </a> </td> 
	   <td align='center'>$l[2]</td>  <td align='center'>$l[3]</td> 
	   <td align='center'>$l[4]</td>  <td align='center'>$l[5]</td> 
	   <td align='center'><a href='supp.php?y=$l[0]'><img src='img/del.png' height='30' width='30'></a></td> 
	   <td align='center'> <a href='modifier.php?x=$l[0]'><img src='img/edit.png' height='50' width='80'> </a> </td> </tr> ";
		}
		echo "</table> <Br> <center> <input type='submit' value='DELETE' style='width:20%;height:20%' > </center> </form>";
		mysqli_close($c);
	} else
		header("Location:login.php");
	?>


	</body>

	</html>