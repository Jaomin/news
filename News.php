<?php
Class News{

	private $_id,
			$_auteur,
			 $_titre,
			 $_contenu,
			 $_date_ajout,
			 $_date_modif;

function __construct($auteur, $titre, $contenu, $date_ajout){
	$this->_auteur = $auteur;
	$this->_titre = $titre;
	$this->_contenu = $contenu;
	$this->_date_ajout = $date_ajout;
}

//getters et setters

public function id(){ return $this->_id;}
public function auteur(){ return $this->_auteur;}
public function titre(){ return $this->_titre;}
public function contenu(){ return $this->_contenu;}
public function date_ajout(){ return $this->_date_ajout;}
public function date_modif(){ return $this->_date_modif;}

public function setId ($id){
	$this->_id = (int) $id;
}
public function setAuteur ($auteur){
	if (is_string($auteur)){
	$this ->_auteur = $auteur;
}
}
public function settitre ($titre){
		if(is_string($titre)){
			$this->_titre = $titre;
		}
}
public function setContenu($contenu){
 	if (is_string($contenu)){
 			$this->_contenu = $contenu;
 	}
}
public function setDate_ajout($date_ajout){
	$this->_date_ajout = $date_ajout;
}

public function setDate_modif($date_modif){
	$this->$date_modif = $date_modif;
}



}