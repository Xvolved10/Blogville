<?php
include("../controllers/Articlectrl.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Article</title>
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

<body style=" text-align: center; font-size: x-large; background-color:lightpink; ">
    <div style="border: 2px solid black;margin-top:10%;margin-inline:25%; ">
        <form action="" method="post">
        <h1>Postez un commentaire</h1>
        <?php
            if (isset($error["textes"])) { ?>
                <p><?php echo $error["textes"]; ?></p>
            <?php } ?>
        <textarea name="textes" value="" style="background-color:lightblue ; color:darkorchid; width:75%; height:150px"></textarea>
        <br><br>
        <button type="submit" name="Valider" style="background-color: blue; color:white;margin-bottom:3% ; height:50px ;padding-left:1%; padding-right:1%">Valider</button>
        </form>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>