<?php
$y = $_GET['y'];
include ("config.php");
include ("xx.php");
$res=mysqli_query($c,"delete from personne where Idp='$y'");
mysqli_close($c);
header("Location:CRUD.php");
?>