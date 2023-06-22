<?php
// Connexion à la base de données
$connexion = mysqli_connect("localhost", "root", "", "administrateur");

// Vérifier la connexion
if (mysqli_connect_errno()) {
  echo "Échec de la connexion à MySQL : " . mysqli_connect_error();
  exit();
}

// Récupérer les données du formulaire
$id = $_POST['id'];
$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$age = $_POST['age'];
$classe = $_POST['classe'];

// Requête de mise à jour
$requete = "UPDATE table_eleves SET nom='$nom', prenom='$prenom', age='$age', classe='$classe' WHERE ID='$id'";

// Exécution de la requête
if (mysqli_query($connexion, $requete)) {
  echo "Les informations de l'élève ont été mises à jour avec succès.";
} else {
  echo "Erreur lors de la mise à jour des informations de l'élève : " . mysqli_error($connexion);
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>
