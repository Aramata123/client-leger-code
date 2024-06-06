<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Roille</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    
    <?php include('../includes/menuform.php') ; ?>
</head>
<body class="form"> 
    <section id="signup">
        <h2>S'inscrire</h2>
        <form action="../gestion/gestion_inscription.php" method="post">

            <label for="nom">Nom :</label>
            <input type="text" id="nom" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" id="prenom" name="prenom" required>

            <label for="email">Adresse e-mail :</label>
            <input type="email" id="email" name="email" required>
            
            <label for="adr">Adresse :</label>
           <input type="text" id="adr" name="adr" required>
 
            <label for="tel">Numéro téléphone :</label>
            <input type="tel" id="tel" name="tel" required>

            <label for="type">Type d'utilisateur :</label>
             <select id="types" name="types" required>
             <option value="particulier">Particulier</option>
             <option value="entreprise">Entreprise</option>
             </select>

              <div id="siret_div" style="display:none;">
         <label for="siret">SIRET </label>
         <input type="text" id="siret" name="siret">
         </div>

         <div id="statut_div" style="display:none;">
         <label for="statut">Statut </label>
         <input type="text" id="statut" name="statut">
         </div>

             <label for="mdp">Mot de passe :</label>
             <input type="password" id="mdp" name="mdp" required>

             <label for="confirmmdp">Confirmer le mot de passe :</label>
             <input type="password" id="confirm_mdp" name="confirm_mdp" required>

              <input type="submit" value="S'inscrire" >
        </form>
    </section>
    <script> document.getElementById('types').addEventListener('change', function() { if(this.value == 'entreprise') { document.getElementById('siret_div').style.display = 'block';
             document.getElementById('statut_div').style.display = 'block'; } else { document.getElementById('siret_div').style.display = 'none'; document.getElementById('statut_div').style.display = 'none'; } });
     </script>

</body>
</html>



