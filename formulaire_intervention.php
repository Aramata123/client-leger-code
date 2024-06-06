<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demande d'intervention</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <?php include('../includes/menuform.php') ; ?>
</head>
<body>
    <form action="../gestion/gestion_intervention.php" method="POST">
       
        <label for="nomclient">Nom </label>
        <input type="text" id="nomclient" name="nomclient" required>
        
        <label for="prenomclient">Prenom </label>
        <input type="text" id="prenomclient" name="prenomclient" required>
        
        <label for="idmateriel">Sélectionner le matériel </label>
        <select id="idmateriel" name="idmateriel" required>     
            <option value="1">Tournevis plat </option>
            <option value="2">Pince a bec </option>
            <option value="3">Tournevis etoile</option>
            <option value="4">Souffleure</option>
            <option value="5">Balayeuse accompagner</option>
            <option value="6">Nettoyeur haut pression </option>
            <option value="7">Pinceau Plat </option>
            <option value="8"> Ensemble pompe a peinture </option>
            <option value="9">Rouleau</option>
            <option value="10">Perceuse viseuse</option>
            <option value="11">Perforatrice hydraulique</option>
            <option value="12">Marteau perforateur</option>
            <option value="13">Ponceuse </option>
            <option value="14">Languette de poncage</option>
            <option value="15">Ponceuse de sol en beton </option>
            <option value="16">Scie egoine stanley </option>
            <option value="17">Scie circulaire </option>
            <option value="18">Scie plongeante </option>
            <option value="19">Soudeuse Fibre</option>
            <option value="20">Positionneur de soudage 500Kg</option>
            <option value="21">Poste a souder</option>
            <option value="22">Excavatrice de taille standars</option>
            <option value="23">Compacteur a plaque vibrante</option>
            <option value="24">Pilonneuse husqvarna</option>
        </select><br>

        <label for="descriptions">Description de l'intervention </label>
        <textarea id="descriptions" name="descriptions" rows="4" cols="50" required></textarea>
        
        <label for="dateheure">Date et heure de l'intervention </label>
        <input type="datetime-local" id="dateheure" name="dateheure" required>

        <!-- Bouton de soumission du formulaire -->
        <input type="submit" value="Valider" name ="Valider">
    </form>
</body>
</html>

