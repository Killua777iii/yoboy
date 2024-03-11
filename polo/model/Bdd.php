<?php
class Bdd
{
    private $bdd;


    function __construct()
    {

        $dsn = 'mysql:dbname=projetphpjss;host=127.0.0.1';
        $dbUser = 'root';
        $dbPwd = '';

        try {
            $this->bdd = new PDO($dsn, $dbUser, $dbPwd);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function getAllHeros()
    {
        $sql ="SELECT heros.id_heros,
        heros.name,
        heros.slug,
         powerstats.intelligence as intelligence,
        powerstats.strength as strength,
        powerstats.speed as speed,
        powerstats.durability as durability,
        powerstats.power as power,
        powerstats.combat as combat,
        images.xs as xs,
        images.sm as sm,
        images.md as md	,
        images.lg as lg

        FROM 
        heros
  Inner JOIN powerstats ON heros.id_heros = powerstats.fk_heros 
  JOIN 
    images ON heros.id_heros = images.fk_heros"
   ;

        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();
    }
    function getOneHeroWithDetail($idhero)
    {
        $sql = "SELECT heros.id_heros,
        heros.name,
        heros.slug,
         powerstats.intelligence as intelligence,
        powerstats.strength as strength,
        powerstats.speed as speed,
        powerstats.durability as durability,
        powerstats.power as power,
        powerstats.combat as combat,
        appearance.gender as gender,
        appearance.race as race,
        appearance.eyeColor as eyeColor,
        appearance.hairColor as hairColor,
        biography.fullName as fullName,
        biography.alterEgos as alterEgos,
        biography.placeOfBirth as placeOfBirth,
        biography.firstAppearance as firstAppearance,
        biography.publisher as publisher,
        biography.alignment as alignment,
        weight.lb as lb,
        weight.kg as kg,
        height.ft as ft,
        height.cm as cm,
        connections.groupAffiliation  as groupAffiliation ,
        connections.relatives as relatives,
        images.xs as xs,
        images.sm as sm,
        images.md as md	,
        images.lg as lg,
        aliases.libelle as libelleAlias
FROM 
    heros
JOIN 
    powerstats ON heros.id_heros = powerstats.fk_heros
JOIN 
    appearance ON heros.id_heros = appearance.fk_heros
JOIN 
    biography ON heros.id_heros = biography.fk_heros
JOIN 
    weight ON appearance.id_appearance = weight.fk_appearance
JOIN 
    height ON appearance.id_appearance = height.fk_appearance
JOIN 
    connections ON heros.id_heros = connections.fk_heros
JOIN 
    images ON heros.id_heros = images.fk_heros
LEFT JOIN 
    aliases ON aliases.fk_biography = biography.id_biography
Where heros.id_heros=$idhero;

        ";
        $query = $this->bdd->prepare($sql);
        $query->execute();
        return $query->fetchAll();


    }
    function Inscription($prenom,$nom,$email,$mdp){
        $hashedPassword = password_hash($mdp, PASSWORD_DEFAULT);

            // Préparer la requête d'insertion
            $stmt = $this->bdd->prepare("INSERT INTO `client`(`nom`, `prenom`, `email`, `motDePasse`) VALUES (?, ?, ?, ?)");
            $stmt->execute([$nom, $prenom, $email, $hashedPassword]);

            echo "Utilisateur enregistré avec succès.";
            return true;
    }
function connexion($email,$pwd){

    $stmt = $this->bdd->prepare("SELECT id, motDePasse FROM client WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$user) {
        echo "Identifiantss invalides";
        return false;
    }
    // Vérifiez si le mot de passe correspond
    if (password_verify($pwd, $user['motDePasse'])) {
        echo "Connexion réussie. L'utilisateur avec l'ID " . $user['id'] . " est connecté.";
        return true;
    } else {
        echo "Identifiants invalides";
        return false;
    }
}
function getCommentaires($idheros){
    $sql ="SELECT `id_commentaire`, `description`, `fk_client`, `fk_heros`, `nom` FROM `commentaire` inner join client on client.id = commentaire.fk_client where fk_heros=$idheros ";
    $query = $this->bdd->prepare($sql);
    $query->execute();
    return $query->fetchAll();
    
}
function addCommentaire($description,$fk_client,$fk_heros){
    $stmt = $this->bdd->prepare("INSERT INTO commentaire (description, fk_client, fk_heros) VALUES (?, ?, ?)");
    $stmt->execute([$description, $fk_client, $fk_heros]);
}

}