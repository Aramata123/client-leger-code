<?php

session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier les informations du client</title>
    
</head>
<body>
    <h2>Modifier les informations du client</h2>
    <form action="modifier_profil.php" method="post">
        <label for="nomClient">Nom:</label><br>
        <input type="text" id="nomClient" name="nom" value ="<?= $_SESSION['nomClient'] ?>" ><br>
        
        <label for="prenom">Prenom:</label><br>
        <input type="text" id="prenom" name="nom" value ="<?= $_SESSION['prenom'] ?>" ><br>

        <label for="adr">Adresse:</label><br>
        <input type="text" id="adr" name="adr" value ="<?= $_SESSION['adr'] ?>" ><br>

        <label for="telephone">Numero téléphone:</label><br>
        <input type="number" id="tel" name="tel"value ="<?= $_SESSION['Tel'] ?>" ><br><br>

        <label for="email">Adresse email:</label><br>
        <input type="email" id="email" name="email"value ="<?= $_SESSION['email'] ?>" ><br><br>

        <label for="mdp">Mot de passe:</label><br>
        <input type="password" id="mdp" name="mdp"value ="<?= $_SESSION['mdp'] ?>" ><br><br>

        <input type="submit" value="Enregistrer les modifications">
    </form>

</body>
</html>
