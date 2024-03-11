<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Option 1: Include in HTML -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
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

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="index.php">Super'Site Web</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href="#">Liste des Héros</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="apropos.php">À Propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php">Contact</a>
        </li>
        <li class="nav-item">   
            <a class="nav-link" href="connexion.php">Se Connecter / Deconnexion </a>

       </li>
      </ul>
    </div>
  </nav>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

