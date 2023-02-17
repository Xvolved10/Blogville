<?php
include("../controllers/Confirmationsuppctrl.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Suppression profil</title>
</head>
<!-- Navbar -->
<header>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        <a class="nav-link" href="http://localhost/php/Blogville/views/IndexInscription.php" style="color:white">Inscription</a>
            <br>
            <a class="nav-link" href="http://localhost/php/Blogville/views/IndexConnexion.php" style="color:white">Connexion</a>
            <br>
            <a class="nav-link" href="http://localhost/php/Blogville/views/IndexProfil.php" style="color:white">Profil</a>
            <br>
            <a class="nav-link" href="http://localhost/php/Blogville/views/IndexArticle.php" style="color:white">Article</a>
        </div>
    </div>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>
</header>

<body style="text-align: center; font-size: x-large; background-color: wheat;">
<div style="border: 2px solid black;margin-top:10%;margin-inline:25%; ">
    <h1 style="color:red; text-decoration: underline; " >Êtes vous sûr de vouloir supprimer votre profil ?</h1>
    <form action="" method="post">
        <p><?php  echo $messagesuppression ?></p>
    <input type="submit" name="Supprimer" value="Supprimer les données" style="background-color: red; color:black; height:50px ;padding-left:1%; padding-right:1% ; ">
    <br><br>
    <input type="submit" name="Retourprofil" value="Retourner au profil" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ;margin-bottom:3% ;">
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>