<?php
include "../view/header.php"

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marvel Characters</title>
    <style>
        /* Style pour la mise en page */
        .container {
            display: flex;
            flex-wrap: wrap;
        }

        .hero-card {
            width: 30%;
            margin: 10px;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .hero-name {
            font-weight: bold;
        }

        .hero-info {
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php
        if (is_array($poule) || is_object($poule)) {
        $j = 0;
        foreach ($poule as $p) {
        ?>
        <div class="hero-card">
        <?php
        // Supposons que les valeurs des différentes caractéristiques soient stockées dans des variables PHP
        $hero_name = $p["name"];
        $photo_path = $p["xs"];
        $id_api_value = $p["id_heros"];
        $slug_value = $p["slug"];
        $intelligence_value = $p["intelligence"];
        $force_value = $p["strength"];
        $vitesse_value = $p["speed"];
        $endurance_value = $p["durability"];
        $pouvoir_value = $p["power"];
        $combat_value = $p["combat"];

        // Affichage des éléments HTML avec les valeurs PHP
        echo '<div class="hero-name">' . $hero_name . '</div>';
        echo '<img src="' . $photo_path . '" alt="Photo du héros" width="100">';
        echo '<div class="hero-info">';
        echo '<div>ID-API: <span id="id-api">' . $id_api_value . '</span></div>';
        echo '<div>Slug: ' . $slug_value . '</div>';
        echo '<div> Intelligence: <span style="color: green;">' . $intelligence_value . '</span> </div>';
        echo '<div>Force: <span style="color: red;">' . $force_value . '</span></div>';
        echo '<div>Vitesse: <span style="color: yellow;">' . $vitesse_value . '</span></div>';
        echo '<div>Endurance: <span style="color: blue;">' . $endurance_value . '</span></div>';
        echo '<div>Pouvoir: <span style="color: black;">' . $pouvoir_value . '</span></div>';
        echo '<div>Combat: <span style="color: grey;">' . $combat_value . '</span></div>';
        echo '<a class="btn btn-primary" href="../controller/detailcontroller.php?id='.$id_api_value.'" role="button">Détail</a>';
        echo '</div>';
        ?>

     
        </div>
        <?php
        }
    }
        ?>
    </div>
</body>
</html>
