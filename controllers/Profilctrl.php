<?php
session_start();
include_once("../models/Utilisateurs.php");
if (isset($_SESSION["id"])){
    $ajoue = new Utilisateurs();

    $ajoue->setId($_SESSION["id"]);
    $affichage = $ajoue->select();

// Condition bouton commentaire/article
if (isset($_POST["article"])) {
    header("Location:../views/IndexArticle.php");
}
// Condition bouton deconnexion
if (isset($_POST["deconnexion"])) {
    session_destroy();
    header("Location:../views/IndexConnexion.php");
}
// Condition bouton modifier
if (isset($_POST["Modifier"])) {
    header("Location:../views/IndexModification.php?value=" . $_SESSION["id"]);
}
// condition bouton supprimer
if (isset($_POST['supprimer'])) {
    $suppression = $_POST['supprimer'];
    
    header("Location:../views/IndexSuppression.php?value=" . $_SESSION["id"]);
    // var_dump($requete);
}
}
else{
    header("Location:../views/IndexConnexion.php");
}
?>