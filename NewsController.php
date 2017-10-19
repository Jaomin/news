<?php
Class NewsController{

public function fiveFirst(){
	$recupFive= new NewsModel();
	$recup = $recupFive->recupFive();
	require_once($_SERVER['DOCUMENT_ROOT'].'/news/home.php');	

}

public function addNews(){
	if (isset($_POST['ajouter']) && isset($_POST['auteur']) && isset ($_POST['titre']) && isset($_POST['contenu'])){

	$auteur = $_POST['auteur'];
	$titre = $_POST['titre'];
	$contenu = $_POST['contenu'];
	$date_ajout = date("Y-m-d H:i:s");
	$news = new News($auteur, $titre, $contenu, $date_ajout);

	$maNews = new NewsModel(); 
 	$maNews->addNews($news);
 	require_once($_SERVER['DOCUMENT_ROOT'].'/news/admin.php');	
 }
}

public function recupList(){
	$liste = new NewsModel();
	  $recup= $liste->listeNews();
	  return $recup;


}

public function recupOneNews(){
	if(isset($_POST['modif'])){
		 $id = $_POST['idModif'];
		 $recup= new NewsModel();
		$recupModif = $recup->recupModif($id);
		require_once($_SERVER['DOCUMENT_ROOT'].'/news/admin.php');
	 }
}
public function delete(){
	if(isset($_POST['delete'])){
		$id= $_POST['idDelete'];
		$deleteNews = new NewsModel;
		$deleteNews-> delete($id);

	}
}
	

public function modif(){
	if (isset ($_POST['modify']) && isset($_POST['auteur']) && isset($_POST['titre']) && isset($_POST['contenu'])){
		$id=$_POST['id'];
		$tab=array(
			'titre'=>$_POST['titre'],
			'contenu'=>$_POST['contenu'],
			'date_modif'=>date("Y-m-d H:i:s")
			);
		$modif= new NewsModel();
		$modif->modif($id, $tab);
		require_once($_SERVER['DOCUMENT_ROOT'].'/news/home.php');
}
}
}