<?php 
	include("connection.php");
	$spr=$connection->prepare("DELETE From article where id=?");
	$spr->execute(array($_GET['id']));
	header('location:cokpit_one.php');
 ?>