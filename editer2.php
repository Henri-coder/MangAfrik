<?php 

		include("connection.php");
		$req=$connection->prepare("SELECT * from event where id=? limit 1");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($_GET['id']));
        $tab=$req->fetchAll();

        if (isset($_POST['valider'])) {
			// code...
			$req=$connection->prepare("UPDATE `event` SET titre = ?, description = ? ,categorie = ? WHERE `event`.`id` = ?");
			$req->execute(array($_POST["titre"],$_POST["description"],$_POST["categorie"],$_GET['id']));
			header('location:cokpit_two.php');
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
		<!-- <input type="file" name="image"/><br> -->
		<input type="texte" name="titre" value="<?php echo $tab[0]["titre"]?>" /><br>
		<select name="categorie">
        <option value="Mark">MAMARK</option>
        <option value="part">Partenaire</option>
        <option value="clit">Clients</option>
      </select><br>
		<textarea name="description"><?php echo $tab[0]["description"]?></textarea><br>
		<input type="submit" name="valider" value="valider"/>
	</form>
 </body>
 </html>