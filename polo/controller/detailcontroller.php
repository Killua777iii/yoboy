<?php
require_once "../Model/BDD.php";
$bdd = new Bdd();

$poule = $bdd->getOneHeroWithDetail($_GET['id']);
require '../view/viewdetail.php';
