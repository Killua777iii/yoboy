<?php
require_once "../Model/BDD.php";
$bdd = new Bdd();

$poule = $bdd->getOneHeroWithDetail($_GET['id']);
$commentaire = $bdd->getCommentaires($_GET['id']);
require '../view/viewdetail.php';
