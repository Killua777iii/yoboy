<?php
require_once "../Model/Bdd.php";


$bdd = new Bdd();

if (isset($_POST['email']) && isset($_POST['mdp']) ) {
 
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];

    $user = $bdd->connexion($email, $mdp);

   
    if($user==True){
       
        foreach ($user as $us) {
            session_start();    
            $_SESSION = [
                'id_ut' => $us['id_utilisateur'],
                'nom' => $us['nom'],
                'prenom' => $us['prenom']
            ];
        }
    }

} 