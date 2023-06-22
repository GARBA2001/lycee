<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Modifier un élève</title>
</head>
<body>
  <?php
  // Récupérer l'ID de l'élève à modifier
  $id = $_GET['id'];

  // Connexion à la base de données
  $connexion = mysqli_connect("localhost", "root", "", "administrateur");

  // Vérifier la connexion
  if (mysqli_connect_errno()) {
    echo "Échec de la connexion à MySQL : " . mysqli_connect_error();
    exit();
  }

  // Requête pour récupérer les informations de l'élève
  $requete = "SELECT * FROM table_eleves WHERE ID='$id'";
  $resultat = mysqli_query($connexion, $requete);
  $eleve = mysqli_fetch_assoc($resultat);

  // Fermer la connexion à la base de données
  mysqli_close($connexion);
  ?>

  <h3>Modifier les informations de l'élève</h3>

  <form action="modification-eleve.php" method="POST">
    <input type="hidden" name="id" value="<?php echo $eleve['ID']; ?>">

    <div class="social-media">
      <img src="Image/remove.png" alt="">
    </div>
    
    <div class="inputs">
      <input type="text" placeholder="Nom :" name="nom" value="<?php echo $eleve['nom']; ?>" required>
      <input type="text" placeholder="Prénom :" name="prenom" value="<?php echo $eleve['prenom']; ?>" required>
      <input type="text" placeholder="Age :" name="age" value="<?php echo $eleve['age']; ?>" required>
      <label for="classe">Choisissez la classe :</label>
      <select id="classe" name="classe">
        <option value="6ème" <?php if ($eleve['classe'] == '6ème') echo 'selected'; ?>>6ème</option>
        <option value="5ème" <?php if ($eleve['classe'] == '5ème') echo 'selected'; ?>>5ème</option>
        <option value="4ème" <?php if ($eleve['classe'] == '4ème') echo 'selected'; ?>>4ème</option>
        <option value="3ème" <?php if ($eleve['classe'] == '3ème') echo 'selected'; ?>>3ème</option>
      </select>
    </div>
    
    <div align="center">
      <button type="submit">Modifier</button>
    </div>
  </form>
</body>
</html>
