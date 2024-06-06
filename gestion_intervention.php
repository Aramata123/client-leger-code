<?php
// Connexion à la base de données
$serveur = "localhost"; 
$utilisateur = "root"; 
$motdepasse = ""; 
$basededonnees = "roille_sa"; 

$connexion = new mysqli($serveur, $utilisateur, $motdepasse, $basededonnees);

// Vérifier la connexion
if ($connexion->connect_error) {
    die("La connexion à la base de données a échoué : " . $connexion->connect_error);
}

// Vérifier si le formulaire a été soumis
if (isset($_POST['Valider'])) {
    // Récupérer les données du formulaire
    $idmateriel = $_POST['idmateriel'];
    $descriptions = $_POST['descriptions'];
    $dateheure = $_POST['dateheure'];
    $nom = $_POST['nomclient'];
    $prenom = $_POST['prenomclient'];

    // Rechercher l'ID du client à partir de son nom et prénom
    $sql_client = "SELECT idclient FROM client WHERE nom = '$nom' AND prenom = '$prenom' limit 1";
     
    $result_client = $connexion->query($sql_client);
    if ($result_client->num_rows > 0) {
        $row = $result_client->fetch_assoc();
        $idclient = $row['idclient'];
        echo "idc :". $idclient;
        // Préparer et exécuter la requête SQL pour insérer les données dans la table 'intervention'
        $sql = "INSERT INTO intervention (idmateriel, idclient, descriptions, dateheure) VALUES ('$idmateriel', '$idclient', '$descriptions', '$dateheure')";
       
       
        if ($connexion->query($sql) === TRUE) {
            // Afficher un message de succès
            echo "Votre demande d'intervention a été soumise avec succès.";
        } else {
            // Afficher un message d'erreur en cas d'échec de l'insertion
            echo "Erreur lors de la soumission de votre demande d'intervention : " . $connexion->error;
        }
    } else {
        // Afficher un message d'erreur si le client n'est pas trouvé
        echo "Erreur : Client non trouvé.";
    }
}

// Fermer la connexion à la base de données
$connexion->close();

// Rediriger l'utilisateur vers la page d'accueil après avoir soumis le formulaire
header("Location: ../index2.php");
exit; // Assure que le script s'arrête après la redirection
?>
