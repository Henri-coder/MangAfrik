<?php

	include("connection.php");
	$req=$connection->prepare("SELECT * from article where id=? limit 1");
	$req->setFetchMode(PDO::FETCH_ASSOC);
	$req->execute(array($_GET["id"]));
	$tab=$req->fetchAll();
	echo $tab[0]["image"];

	

?>