<?php
include "../view/header.php"

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Personnalisation du style */
        .navbar-nav {
            margin-left: auto;
        }
        .center-content {
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            flex-direction: column;
        }
        .photo-container {
            max-width: 70%; /* Changer la taille selon les besoins */
            display: flex;
            justify-content: center;
        }
        .photo-container img {
            max-width: 100%;
        }
        .Lorem {
            margin-top: 20px; /* Espace entre l'image et le texte */
        }
        .color-box {
            height: 100px;
            width: 300px; /* Largeur des rectangles */
            margin: 10px;
            border: 2px solid black; /* Ajout d'une bordure */
            display: flex;
            justify-content: center;
            align-items: center;
        }
        @media (min-width: 768px) {
            .photo-container {
                justify-content: flex-start;
            }
            .Lorem {
                margin-top: 0; /* Réinitialiser la marge en haut */
                margin-left: 20px; /* Espace entre l'image et le texte */
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row">
    <?php
            if (is_array($poule) || is_object($poule)) {
            $j = 0;
            foreach ($poule as $p) {
        

                // Affichage du HTML
                echo '<div class="col-md-3">';
                echo '<div class="color-box bg-success">Intelligence: '. $p['intelligence'].'</div>';
                echo '<div class="color-box bg-danger">Strength: '. $p['strength'].'</div>';
                echo '<div class="color-box bg-warning">Speed: '. $p['speed'].'</div>';
                echo '</div>';

                echo '<div class="col-md-6 center-content">';
                echo '<div class="photo-container">';
                echo '<img src="https://media.gqmagazine.fr/photos/6571d7e79779b8a3415b0a9b/16:9/w_2560%2Cc_limit/Tom-Holland-Spiderman-what-we-know-so-far.jpg" alt="Photo">';
                echo '</div>';
                echo '<div class="Lorem">';
                echo 'Nom complet =' . $p["fullName"] . ' Alter Egos ='.$p["alterEgos"] . ' Lieu de naissance = ' . $p["placeOfBirth"] . ' Premiére Apparence : ' . $p["firstAppearance"];
                echo '</div>';
                echo '</div>';
                echo '<div class="col-md-3">';
                echo '<div class="color-box bg-primary">Durability: '. $p['durability'].'</div>';
                echo '<div class="color-box bg-dark">Power: '. $p['power'].'</div>';
                echo '<div class="color-box bg-light">Combat: '. $p['combat'].'</div>';
                echo '</div>';



            }
        }
        ?>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
