<?php
session_start();
if(ISSET($_SESSION['id']))
{
	$sup=$_POST['sup'];
	include("config.php");
	foreach ($sup as $v)
	{
	$res= mysqli_query($c,"delete from personne where idp='$v'");
	}
	mysqli_close($c);
	header("Location:CRUD.php");
}else
{header("Location:login.php");}
?>