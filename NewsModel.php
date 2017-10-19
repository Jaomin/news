<?php
class newsModel{

	private $db;


public function __construct(){
		$this->db = DB::getInstance();
	}
public function recupFive(){
	$req= "SELECT * FROM news ORDER BY date_ajout DESC LIMIT 5 ";
	$tab=array();
	$resultat=$this->db->recup($req, $tab);
	return $resultat;
}

public function addNews(News $news){
echo'ajout d\'une news dans la bdd</br>';
echo $auteur = $news->auteur();
echo $titre = $news->titre();
echo $contenu= $news->contenu();
echo $date_ajout= $news->date_ajout();
$req= "INSERT INTO news (auteur, titre, contenu, date_ajout) VALUES (:auteur, :titre, :contenu, :date_ajout)";
$tab=array(
"auteur"=>$auteur,
"titre"=>$titre,
"contenu"=>$contenu,
"date_ajout"=>$date_ajout
);
$resultat = $this->db->recup($req, $tab);


}

public function listeNews(){
	$req = "SELECT * FROM news order by date_ajout DESC";
	$tableau=array();
		$resultat=$this->db->recup($req,$tableau);
		return $resultat;

}

public function recupModif($id){
	$req= "SELECT * FROM news WHERE id= $id;";
	$tab=array();
		$resultat=$this->db->recup($req, $tab);
		return $resultat;

}
public function delete($id){
	$req="DELETE FROM news WHERE id=$id;";
	$tab=array();
	$resultat=$this->db->recup($req, $tab);
}

public function modif($id, $tab){
	$req= "UPDATE news SET titre = :titre, contenu=:contenu, date_modif= :date_modif WHERE id=$id;";
	$tab=array(
		"titre"=>$tab['titre'],
		"contenu"=>$tab['contenu'],
		"date_modif"=>$tab['date_modif']
	);
	$resultat=$this->db->recup($req, $tab);
}
 
}