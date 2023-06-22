<?php
// Connexion à la base de données
$connexion = mysqli_connect("localhost", "root", "", "administrateur");

// Vérifier la connexion
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

// Vérifier si l'ID de l'élève est fourni dans l'URL
if (isset($_GET['id'])) {
  $id = $_GET['id'];

  // Requête de suppression
  $requete = "DELETE FROM table_eleves WHERE id = $id";

  // Exécution de la requête
  if (mysqli_query($connexion, $requete)) {
    echo "L'élève a été supprimé avec succès.";
  } else {
    echo "Une erreur s'est produite lors de la suppression de l'élève : " . mysqli_error($connexion);
  }
} else {
  echo "ID de l'élève non spécifié.";
}

// Fermer la connexion à la base de données
mysqli_close($connexion);
?>
