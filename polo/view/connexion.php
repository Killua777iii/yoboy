<?php
include "../view/header.php"

?>

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
    @media (min-width: 768px) {
      .photo-container {
        justify-content: flex-start;
      }
      .Lorem {
        margin-top: 0; /* Réinitialiser la marge en haut */
        margin-left: 20px; /* Espace entre l'image et le texte */
      }
    }

    body {
            background-color: #f8f9fa;
        }
        .login-container {
            margin-top: 100px;
        }
        .form-signin {
            max-width: 380px;
            padding: 15px;
            margin: auto;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .form-signin .form-control {
            position: relative;
            box-sizing: border-box;
            height: auto;
            padding: 10px;
            font-size: 16px;
        }
        .form-signin input[type="text"],
        .form-signin input[type="password"] {
            margin-bottom: 10px;
        }
        .form-signin button[type="submit"] {
            margin-top: 15px;
        }
  </style>
</head>
<body>
    

  <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 login-container">
                <form class="form-signin">
                    <h2 class="text-center">Connexion</h2>
                    <input type="text" id="inputEmail" class="form-control" placeholder="Nom d'utilisateur" required autofocus>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Mot de passe" required>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Se connecter</button>
                </form>
            </div>
        </div>
    </div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>