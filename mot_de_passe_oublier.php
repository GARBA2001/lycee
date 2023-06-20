<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Récupérer l'adresse e-mail saisie par l'utilisateur
    $email = $_POST['email'];

    // Vérifier si l'e-mail existe dans la base de données
    // Effectuer les vérifications nécessaires, par exemple avec une requête SQL
    
    // Si l'e-mail est valide, récupérer le nouveau mot de passe saisi par l'utilisateur
    $nouveauMotDePasse = $_POST['nouveau_mot_de_passe'];

    // Enregistrer le nouveau mot de passe dans la base de données pour l'utilisateur correspondant
    
    // Afficher un message de succès ou rediriger vers une page de confirmation
    echo "";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Réinitialisation du mot de passe - Frenchcoder</title>
  <link rel="stylesheet" href="Style/style1.css">      
  <link rel="stylesheet" href="Style/boostrap-5.2.3-dist/boostrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  <form action="" method="POST">
    <div class="social-media">
        <img src="Image/remove.png" alt="">
    </div>
    <div class="inputs">
      <input type="email" placeholder="Email :" name="email" />
      <input type="password" placeholder="Nouveau mot de passe :" name="nouveau_mot_de_passe">
    </div>
    <div align="center">
      <button type="submit">Réinitialiser le mot de passe</button>
    </div>
  </form>
</body>
</html>
