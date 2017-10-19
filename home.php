<!DOCTYPE html>
<head>
    <title>administration</title>
    
    <meta charset="utf-8" />
  </head>
  <body>
  	<form action="" name="admin" method="post">
  		<input hidden name="administration" >
  		<input type="submit" name="admin" value="ADMINISTRATION">
  	</form>

  	<h1> nos dernières actualités</h1>
  	<?php
  	foreach($recup as $key ){
?>
      <h2><?php echo $key['titre'];?></h2>
      <p><?php echo substr( $key['contenu'], 0, 5);?></p>
      <p><?php echo $key['date_ajout'];?></p>
 <?php 	
  }