<?php
// Connexion à la base de données
$connexion = mysqli_connect("localhost", "root", "", "administrateur");

// Vérifier la connexion
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Vérifier si l'identifiant du parent est présent dans l'URL
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Requête de suppression du parent
  $requete = "DELETE FROM parent WHERE ID = $id";

  // Exécuter la requête de suppression
  if (mysqli_query($connexion, $requete)) {
    echo "Parent supprimé avec succès.";
  } else {
    echo "Erreur lors de la suppression du parent: " . mysqli_error($connexion);
  }
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>
