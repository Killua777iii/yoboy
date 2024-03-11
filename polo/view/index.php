<?php
include "../view/header.php"

?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ma Page</title>
  <!-- CSS Bootstrap -->
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



  <!-- Contenu principal -->
  <div class="container my-5">
    <div class="center-content">
      <div class="photo-container">
        <!-- Remplacez ceci par votre image -->
        <img src="https://www.pause-canap.com/media/wysiwyg/teamvg-h_ros-marvel-une-vonguru-min.png" alt="Photo">
      </div>
      <div class="Lorem mt-3">
        <p>Bienvenue dans l'univers captivant des super héros ! Notre site web offre une galerie complète où chaque héros est présenté en détail, révélant leurs origines, leurs pouvoirs et leurs exploits. Plongez dans leurs histoires palpitantes et découvrez des personnages légendaires prêts à défendre la justice et à inspirer le monde. Rejoignez-nous pour une expérience qui repousse les limites de l'imagination et célèbre le courage sans faille de ces héros extraordinaires.</p>
      </div>
    </div>
  </div>

  <!-- JavaScript Bootstrap -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
