
<?php
	if (isset($_POST['valider'])) {
		
			include("connection.php");
			$req=$connection->prepare("INSERT INTO article(image,titre,nom,texte) values(?,?,?,?)");
			try {
			$req->execute(array(file_get_contents($_FILES["image"]["tmp_name"]),$_POST["titre"],$_POST["nom"],$_POST["texte"]));
			header('location:cokpit_one.php');
			echo "Ajout reussi";
			} catch (Exception | PDOStatement $e) {
				echo '<font color = "red">'."Erreur: il se peut que l'image soit trop lourde; veillez ressayer".'</font>';
			}
			
	}
	
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form name="form-article" method="post" action="" enctype="multipart/form-data">
		<input type="file" name="image"/><br>
		<input type="texte" name="titre"/><br>
		<input type="texte" name="nom"/><br>
		<textarea name="texte" placeholder="ecrivez quelque chose"></textarea><br>
		<input type="submit" name="valider" value="valider"/>
	</form>
</body>
</html>