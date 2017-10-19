
<!DOCTYPE html>
<head>
    <title>administration</title>
    
    <meta charset="utf-8" />
  </head>
  <body>

<?php
	if(empty ($recupModif)){

?>

  	<!--possibilité d'ajouter une news-->
  	<form action="" name="ajout" method="post">
  		<p><label> auteur</label>
  		<input type="text" name="auteur"></p>
  		<p><label> titre </label>
  		<input type="text" name="titre"></p>
  		<p><label> Contenu </label>
  		<textarea type="textarea" name ="contenu"></textarea></p>
  		<input type="submit" name='ajouter'>
  	</form>
<?php
}

else{

	foreach ($recupModif as $key){

?>
<form action="" name="modify" method="post">
  		<p><label> auteur</label>
  		<input type="text" name="auteur" placeholder="<?php echo $key['auteur'];?>"></p>
  		<p><label> titre </label>
  		<input type="text" name="titre" placeholder="<?php echo $key['titre'];?>"></p>
  		<p><label> Contenu </label>
  		<textarea type="textarea" name ="contenu" placeholder="<?php echo $key['contenu'];?>" ></textarea></p>
  		<input type="hidden" name="id" value="<?php echo $key['id'];?>">
  		<input type="submit" name="modify">
  	</form>

<?php
	}			
}


  	//liste des news à modifier ou supprimer

  	$listeNews = new NewsController();
  	$liste = $listeNews ->recupList();

?>
  	<table>
  		<tr>
  			<th>Id</th>
	  		<th>Auteur</th>
	  		<th>Titre</th>
	  		<th>Date d'Ajout</th>
	  		<th>Date Modif</th>
	  		<th>Derniere Modification</th>
	  		<th> delete</th>
	  		<th> modifier</th>
	  	</tr>
<?php 
foreach ($liste as $key ){
	$id=$key['id'];

?>
	  	<tr>
	  		<td>
	  			<?php echo $id ?>
	  		</td>

	  		<td>
	  			<?php echo $key['auteur']; ?>
	  		</td>
	  		<td>
	  			<?php echo $key['titre'];?>
	  		</td>
	  		<td>
	  			<?php echo $key['contenu'];?>
	  		</td>
	  		<td>
	  			<?php echo $key['date_ajout'];?>
	  		</td>
	  		<td>
	  			<?php if ($key['date_modif'] == NULL) {
	  				echo 'pas de modif';
	  			}else{
	  				echo $key['date_modif'];
	  			}?>
	  		</td>
	  		<td><form action="" name ="delete" method ="post"><input type="hidden" name="idDelete" value="<?php echo $id;?>"> <input type="submit" name="delete" value ="supprimer"/></form></td>
	  		<td><form action="" name ="modif" method ="post"><input type="hidden" name="idModif" value="<?php echo $id;?>"><input type="submit" name="modif" value ="Modifier"></form></td>
	  		
	  	</tr>
	

<?php
}
?>
</table>