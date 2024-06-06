<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="profil.css">
    <title>Profil</title>
</head>
<body>
    <div class="container">
        <h1>Bienvenue sur votre profil</h1>
        <div class="row">
            <div class="col-md-6">
                <label>Nom</label>
            </div>
            <div class="col-md-6">
                <?php echo $_SESSION['nom'];?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Prénom</label>
            </div>
            <div class="col-md-6">
                <?php echo $_SESSION['prenom'];?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Email</label>
            </div>
            <div class="col-md-6">
                <?php echo $_SESSION['email'];?>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <label>Téléphone</label>
            </div>
            <div class="col-md-6">
                <?php echo $_SESSION['tel'];?>
            </div>
        </div>
       

</div>
            