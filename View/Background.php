<?php
session_start();
if (empty($_SESSION["idUtilisateur"])){
    header("Location:erreur.php");
}
include("Shared/header.php");
include("Shared/navbar.php");
include("../Model/BDD.php");
?>

<style type="text/css">
    <?php include ("../css/bgc.css")?>
    <?php include ("../css/background.css")?>
</style>

<!-- Jumbotron -->
<div class="container-fluid">
    <div class="jumbotron text-center">
        <h1 class="display-4">
            <strong>Background</strong>
    </div>
</div>
