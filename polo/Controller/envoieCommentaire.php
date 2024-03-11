<?php
require_once "../Model/BDD.php";
$bdd = new Bdd();
$poule = $bdd->addCommentaire($_POST['text'],$_POST['iduti'], $_POST['idhero']);


echo 'envoi effectuer'
?>