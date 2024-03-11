<?php
require_once "../Model/BDD.php";
$bdd = new Bdd();

$poule = $bdd->getAllHeros();
require '../view/viewallhero.php';
