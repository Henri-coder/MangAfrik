<?php 

		include("connection.php");
		$req=$connection->prepare("SELECT * from article where id=? limit 1");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($_GET['id']));
        $tab=$req->fetchAll();

        if (isset($_POST['valider'])) {
			// code...
			$req=$connection->prepare("UPDATE `article` SET titre = ?, nom = ? ,texte = ? WHERE `article`.`id` = ?");
			$req->execute(array($_POST["titre"],$_POST["nom"],$_POST["texte"],$_GET['id']));
			header('location:cokpit_one.php');
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
		<!-- <input type="file" name="image"/><br> -->
		<input type="texte" name="titre" value="<?php echo $tab[0]["titre"]?>" /><br>
		<input type="texte" name="nom" value="<?php echo $tab[0]["nom"]?>" /><br>
		<textarea name="texte"><?php echo $tab[0]["texte"]?></textarea><br>
		<input type="submit" name="valider" value="valider"/>
	</form>
 </body>
 </html>