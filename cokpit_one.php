<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<table>
		<thead>
			<tr>
				<!-- <th>Image</th> -->
				<th>Titre</th>
				<th>nom</th>
				<th>texte</th>
				
			</tr>
		</thead>
		<tbody>
			<?php

				include("connection.php");
  				$index=$connection->prepare("SELECT COUNT(id) FROM article");
			  $index->execute();
			  $tab2=$index->fetchAll();
			  
			  $index2=$connection->prepare("SELECT id FROM `article` WHERE 1");
			  $index2->execute();
			  $tab3=$index2->fetchAll();
			  


			  $counter = $tab2[0][0];

			for ($i=0 ; $i <= $counter-1; $i++) { 
        
        		$req=$connection->prepare("SELECT * from article where id=? limit 1");
                $req->setFetchMode(PDO::FETCH_ASSOC);
                $req->execute(array($tab3[$i][0]));
                $tab=$req->fetchAll();

               
            ?>
         <tr>
		
		<td><?php echo $tab[0]["titre"]?></td>
		<td><?php echo $tab[0]["nom"]?></td>
		<td><?php echo $tab[0]["texte"]?></td>
		<td>
			<a href="editer.php?id=<?php echo $tab3[$i][0] ?>">Editer</a>
			<a onclick="return confirm('voulez vous vraiment supprimer ce contenu')"
			href="Supprimer.php?id=<?php echo $tab3[$i][0] ?>" >Supprimer</a>
		</td>
		</tr>
		</tbody>
		<?php
			}
		?>
	</table>
	<a href="AddNew.php">Ajouter</a>
</body>
</html>