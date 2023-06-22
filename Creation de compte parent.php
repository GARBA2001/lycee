<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire d'inscription en HTML & CSS - Frenchcoder</title>
  <link rel="stylesheet" href="Style/style1.css">      
  <link rel="stylesheet" href="Style/boostrap-5.2.3-dist/boostrap-5.2.3-dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
</head>
<body>



  <form action="inscriotion-parent.php" method="POST">
     
    <div class="social-media">
        <img src="Image/remove.png" alt="">
    </div>
     <h2>Création de compte parent</h2>
    <div class="inputs">
      <input type="text" placeholder="Nom :" name="nom" />
      <input type="text" placeholder="Prénom :" name="prenom" />
      <input type="email" placeholder="Email :" name="email" />
      <input type="password" placeholder="Mot de passe :" name="mot_de_passe">
    </div>
    <div align="center">
      <button type="submit">Créer</button>
    </div>
  </form>
</body>
</html>
