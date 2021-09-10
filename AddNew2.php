<?php
	if (isset($_POST['valider'])) {
		
			include("connection.php");
			$req=$connection->prepare("INSERT INTO event(image,titre,categorie,description) values(?,?,?,?)");
			try {
					$req->execute(array(file_get_contents($_FILES["image"]["tmp_name"]),$_POST["titre"],$_POST["categorie"],$_POST["description"]));
				header('location:cokpit_two.php');
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
	<form name="form-event" method="post" action="" enctype="multipart/form-data">
		<input type="file" name="image"/><br>
		<input type="texte" name="titre"/ placeholder="titre"><br>
		<select name="categorie">
        <option value="Mark">MAMARK</option>
        <option value="part">Partenaire</option>
        <option value="clit">Clients</option>
      </select><br>
		<textarea name="description" placeholder="ecrivez quelque chose max (50 lettres)" maxlength="50"></textarea><br>
		<input type="submit" name="valider" value="valider"/>
	</form>
</body>
</html>