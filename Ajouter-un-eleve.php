<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire d'inscription des élèves</title>
  <link rel="stylesheet" href="Style/style3.css">      
  <link rel="stylesheet" href="Style/boostrap-5.2.3-dist/boostrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>
  <form action="inscription-eleve.php" method="POST">
    <div class="social-media">
      <img src="Image/remove.png" alt="">
    </div>
    
    <div class="inputs">
      <input type="text" placeholder="Nom :" name="nom" />
      <input type="text" placeholder="Prénom :" name="prenom" />
      <input type="text" placeholder="Age :" name="age" />
      <label for="classe">Choisissez la classe :</label>
      <select id="classe" name="classe">
        <option value="6ème">6ème</option>
        <option value="5ème">5ème</option>
        <option value="4ème">4ème</option>
        <option value="3ème">3ème</option>
      </select>
    </div>
    
    <div align="center">
      <button type="submit">Inscrire</button>
    </div>
  </form>
</body>
</html>
