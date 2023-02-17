<?php
include("../controllers/Profilctrl.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <title>Page Profil</title>
</head>
<!-- Navbar -->
<header>
    <div class="collapse" id="navbarToggleExternalContent">
        <div class="bg-dark p-4">
        <a class="nav-link" href="http://localhost/php/Blogville/views/IndexInscription.php" style="color:white">Inscription</a>
            <!-- <h5 class="text-white h4">Inscription</h5> -->
            <br>
            <a class="nav-link" href="http://localhost/php/Blogville/views/IndexConnexion.php" style="color:white">Connexion</a>
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
<!--    Affichage profil -->

<body style=" text-align: center; font-size: x-large; background-color:lightpink; ">
    <div style="border: 2px solid black;margin-top:10%;margin-inline:25%; ">
        <?php
        // var_dump($_SESSION);
        ?>
        <h3 style="text-decoration: underline; ">Votre Pseudo est:</h3> <?php echo $affichage["pseudo"];
                                                                        ?> <br>
        <h3 style="text-decoration: underline;">L'email associé est:</h3> <?php
                                                                            echo $affichage["email"];
                                                                            ?>
        <!-- Boutons article/modifier/deconnexion/supprimer -->
        <form action="" method="post">
            <br><br>
            <input type="submit" name="article" value="Allez sur article ?" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ">
            <br><br>
            <input type="submit" name="Modifier" value="Modifier profil" style="background-color: blue; color:white; height:50px ;padding-left:1%; padding-right:1% ; border-radius:10%">
            <input type="submit" name="deconnexion" value="Se déconnecter" style="background-color: red; color:white ; height:50px ;padding-left:1%; padding-right:1%">
            <br><br>
            <input type="submit" name="supprimer" value="Supprimer le profil" style="color:crimson; background-color:black ; margin-bottom:3% ; height:50px ;padding-left:1%; padding-right:1%">

        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>