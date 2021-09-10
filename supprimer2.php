<?php 
	include("connection.php");
	$spr=$connection->prepare("DELETE From event where id=?");
	$spr->execute(array($_GET['id']));
	header('location:cokpit_two.php');
 ?>