<?php
require_once "../Model/Bdd.php";


$bdd = new Bdd();

if (isset($_POST['email']) && isset($_POST['mdp']) && isset($_POST['nom']) && isset($_POST['prenom']) ) {
 
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];

    $user = $bdd->Inscription($prenom,$nom,$email,$mdp);
    if($user==False){
        echo"faux";
    }else{
        echo"nada";
    }

} 
require "../view/valide.php";