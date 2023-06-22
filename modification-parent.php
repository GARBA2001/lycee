<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de modification de compte parent</title>
  <link rel="stylesheet" href="Style/style1.css">      
  <link rel="stylesheet" href="Style/boostrap-5.2.3-dist/boostrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  <?php
  // Connexion à la base de données
  $connexion = mysqli_connect("localhost", "root", "", "administrateur");

  // Vérifier la connexion
  if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
  }

  // Récupérer l'ID du parent à modifier
  $id = $_GET['id'];

  // Requête pour récupérer les informations du parent à modifier
  $requete = "SELECT * FROM parent WHERE ID = '$id'";
  $resultat = mysqli_query($connexion, $requete);
  $row = mysqli_fetch_assoc($resultat);
  ?>
  
  <form action="modifier-parent.php" method="POST">
  <div class="social-media">
        <img src="Image/remove.png" alt="">
    </div>
    <div class="inputs">
      <input type="hidden" name="id" value="<?php echo $row['ID']; ?>" />
      <input type="text" placeholder="Nom :" name="nom" value="<?php echo $row['nom']; ?>" required />
      <input type="text" placeholder="Prénom :" name="prenom" value="<?php echo $row['prenom']; ?>" required />
      <input type="email" placeholder="Email :" name="email" value="<?php echo $row['email']; ?>" required />
      <input type="text" placeholder="Téléphone :" name="telephone" value="<?php echo $row['telephone']; ?>" required />
    </div>
    <div align="center">
      <button type="submit">Modifier</button>
    </div>
  </form>

  <?php
  // Fermer la connexion à la base de données
  mysqli_close($connexion);
  ?>
</body>
</html>
