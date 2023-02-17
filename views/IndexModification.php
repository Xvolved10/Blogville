<?php
include("../controllers/Modificationctrl.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    
    <title>Modification Profil</title>
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
    <div style="border: 2px solid black; margin-top: 10%; margin-inline:25%">
        <h1 style="font-size: xx-large;  text-decoration:underline">Modification du profil</h1>
        <br>
        <form action="" method="post" enctype="multipart/form-data" name="formModifs" >
            <label>Entrez votre nouveau Pseudo :&nbsp</label>
            <input type="text" name="pseudo" value="<?= $b["pseudo"] ?>" style="text-align:left ; background-color:white">
            <?php
            if (isset($error["pseudo"])) { ?>
                <p><?php echo $error["pseudo"]; ?></p>
            <?php } ?>
            <br><br>
            <label>Entrez votre nouvel Email :&nbsp</label>
            <input type="email" name="email" value="<?= $b["email"] ?>" style="text-align:left ; background-color:white">
            <?php
            if (isset($error["email"])) { ?>
                <p><?php echo $error["email"]; ?></p>
            <?php } ?><br><br>
            <label>Entrez votre ancien mot de passe :&nbsp</label>
            <input type="password" name="AncienMDP" value="" style="text-align:left ; background-color:white"><br><br>
            <?php
            if (isset($error["ErreurAncienMDP"])) { ?>
                <p><?php echo $error["ErreurAncienMDP"]; ?></p>
            <?php } ?><br><br>
            <label>Entrez votre nouveau mot de passe :&nbsp</label>
            <input type="password" name="MotDepasse" value="" style="text-align:left ; background-color:white"><br><br>
            <?php
            if (isset($error["MotDepasse"])) { ?>
                <p><?php echo $error["MotDepasse"]; ?></p>
            <?php } ?>
            <label>Choisissez votre nouvelle ville :&nbsp</label>
            <select name="id_citie" style="background-color: white;">
                <option value="">--Choisissez votre ville--</option>
                <?php foreach ($a as $key => $value0) {

                ?>
                    <option value="<?php echo $value0["id"] ?>" style="text-align:left ; background-color:white"> <?php echo $value0["name"] ?></option>
                <?php
                }  ?>
            </select>
            <br><br>

            <input type="file" name="modif_avatar" value="Ajouter un Avatar" style="background-color:aquamarine;">
            <br><br><br>
            <button type="submit" value="" name="Retourprofil" style="background-color:dodgerblue ; color:yellow;margin-bottom:2% ; height:50px ;padding-left:1%; padding-right:1%">Retour au profil </button>

            <button type="submit" value="" name="Modification" style="background-color: blueviolet; color:yellow; margin-bottom:2% ; height:50px ;padding-left:1%; padding-right:1%"">Mettre à jour le Profil</button>
            
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>