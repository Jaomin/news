<?php
function chargerClasse($class_name)
{
 require $class_name.'.php';
}

spl_autoload_register('chargerClasse');


if (empty($_GET) && empty($_POST)){
	$fiveFirst= new NewsController();
	$recupFive = $fiveFirst->fiveFirst();}

if (isset($_POST['admin'])){
	require_once($_SERVER['DOCUMENT_ROOT'].'/news/admin.php'); }



if(!isset ($_POST['idModif']) OR !isset($_POST['idDelete'])){
	$news = new NewsController();
	$maNews = $news->addNews();
}

if (isset($_POST['modif'])){
	$recupAModifier = new NewsController();
	$recup = $recupAModifier->recupOneNews();
}

if (isset($_POST['delete'])){
	$recupADelete = new NewsController();
	$recupADelete-> delete();
}
if (isset($_POST['modify'])){
	$modif = new NewsController();
	$modif->modif();
}