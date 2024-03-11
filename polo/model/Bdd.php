<?php
class Bdd
{
    private $bdd;


    function __construct()
    {

        $dsn = 'mysql:dbname=projetphpjs;host=127.0.0.1';
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
  JOIN images on heros.id_heros=images.fk_heros";

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

}