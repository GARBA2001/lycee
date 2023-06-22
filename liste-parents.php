<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>La liste des parents</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style/style-accueil.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<body>
<header>
  <nav class="navbar navbar-expand-lg ">
    <a class="navbar-brand" href="acceuil.php">
      <img src="Image/remove.png" alt="Logo" class="logo-image">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="Creation de compte parent.php" target="_blank">Ajouter un parent</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gestion-eleve.php" target="_blank">Gestion des élèves</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gestion-moyenne.php" target="_blank">Gestion des moyennes</a>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-light" onclick="logout()">Déconnexion</button>
        </li>
      </ul>
    </div>
  </nav>
</header>
<img src="Image/remove.png" alt="Logo" class="logo-image acc">
<h3>La liste des parents d'élèves.</h3>

<div class="table-wrapper">
  <table class="fl-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Email</th>
        <th>Téléphone</th>
        <th>Détail</th>
      </tr>
    </thead>
    <tbody>
      <?php
      // Connexion à la base de données
      $connexion = mysqli_connect("localhost", "root", "", "administrateur");

      // Vérifier la connexion
      if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        exit();
      }

      // Requête pour récupérer les données des parents
      $requete = "SELECT * FROM parent";
      $resultat = mysqli_query($connexion, $requete);

      // Parcourir les résultats et afficher les données dans le tableau
      while ($row = mysqli_fetch_assoc($resultat)) {
        echo "<tr>";
        echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['prenom']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['telephone']."</td>";
        echo "<td>";
        echo "<a href='modification-parent.php?id=".$row['ID']."'><i class='fas fa-edit icone-action'></i></a>";
        echo "<a href='suppression-parent.php?id=".$row['ID']."'><i class='fas fa-trash icone-action'></i></a>";
        echo "<a href='mise-a-jour-parent.php?id=".$row['ID']."'><i class='fas fa-sync-alt icone-action'></i></a>";
        echo "</td>";
        echo "</tr>";
      }

      // Fermer la connexion à la base de données
      mysqli_close($connexion);
      ?>
    </tbody>
  </table>
</div>

<footer>
  <div class="footer">
    <div class="container">
      <div class="text-center">&copy; Developed by DAO A.Razak, GARBA Faridatou and KABORE Sadia</div>
    </div>
  </div>
</footer>

<script>
  function logout() {
    // Code pour déconnexion
    console.log('Déconnexion effectuée');

    // Redirection vers la page de connexion
    window.location.href = "Connexion.php";
  }
</script>

</body>
</html>
