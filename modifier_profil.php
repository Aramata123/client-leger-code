<?php

session_start();

// Connexion à la base de données
$servername = "localhost";
$nom = "root";
$motdepasse= "";
$basededonnees = "roille_sa";

$conn = new mysqli($servername, $nom, $password, $database);
if ($conn->connect_error) {
    die("La connexion a échoué: " . $conn->connect_error);
}

// Récupération des données du formulaire
$idClient = $_SESSION['client']['idClient'];
$nomClient = $_POST['nom'];
$prenom = $_POST['prenom'];
$adr= $_POST['adr'];
$Tel = $_POST['tel'];
$email = $_POST['email'];
$mdp = $_POST['mdp'];

// Requête de mise à jour des informations dans la base de données
$sql = "UPDATE client SET nomClient='$nomClient', adr='$adr', Tel='$Tel', email='$email',mdp='$mdp' WHERE idClient='$idClient'";
if ($conn->query($sql) === TRUE) {
    echo "Modification appliquée";
} else {
    echo "Modification rejetée: " . $conn->error;
}

$conn->close();
?>

<html>
<a href="profil.php" class="btn-modifier">Retour</a>
</html>
