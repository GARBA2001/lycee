<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "administrateur";

// Création d'une connexion
$conn = new mysqli($servername, $username, $password, $database);

// Vérification de la connexion
if ($conn->connect_error) {
    die("Échec de la connexion : " . $conn->connect_error);
}

// Récupérer les données du formulaire
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$classe = $_POST['classe'];

// Préparer et exécuter la requête SQL d'insertion des données
$sql = "INSERT INTO table_eleves (nom, prenom, age, classe) VALUES ('$nom', '$prenom', '$age', '$classe')";
if ($conn->query($sql) === TRUE) {
    echo "L'élève a été inscrit avec succès.";
} else {
    echo "Erreur lors de l'inscription de l'élève : " . $conn->error;
}

// Fermer la connexion
$conn->close();
?>
