<?php
	try {
	 	$connection = new PDO('mysql:host = 127.0.0.1;dbname=mangafrik', 'root' , '');
	 	$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 	}
		catch (Exception $e) {
		 	echo '<font color = "red">'."Echec de la connection : ".$e->getMessage().'</font>';
		 }
?>