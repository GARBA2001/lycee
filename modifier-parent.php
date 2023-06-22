<?php
// Connexion à la base de données
$connexion = mysqli_connect("localhost", "root", "", "administrateur");

// Vérifier la connexion
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Récupérer les données du formulaire
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$email = $_POST['email'];
$telephone = $_POST['telephone'];

// Requête de mise à jour
$requete = "UPDATE parent SET nom='$nom', prenom='$prenom', email='$email', telephone='$telephone' WHERE ID='$id'";

// Exécution de la requête
if (mysqli_query($connexion, $requete)) {
  echo "Les informations du parent ont été mises à jour avec succès.";
} else {
  echo "Erreur lors de la mise à jour des informations du parent: " . mysqli_error($connexion);
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>
