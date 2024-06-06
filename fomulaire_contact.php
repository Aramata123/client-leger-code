<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire de contact</title>
    <link rel="stylesheet" type="text/css" href="../css/styles.css">

    <?php include('../includes/menuform.php') ; ?>
</head>
<body class="form"> 
<div>
<form action="../gestion/gestion_contact.php" method="post">
    <label for="nom">Nom</label>
    <input type="text" id="nom" name="nom" required>
    
    <label for="email">Email</label>
    <input type="email" id="email" name="email" required>
    
    <label for="message">Message</label><br>
    <textarea id="message" name="message" rows="4" required></textarea>
    
    <input type="submit" value="Envoyer">
</form>

</div>
</section>
</body>
</html>
