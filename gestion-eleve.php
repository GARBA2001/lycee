<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Mon site avec Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style/style-accueil.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.13.0/css/all.css">
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
          <a class="nav-link" href="gestion-eleve.php">Gestion des élèves</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gestion-parent.php">Gestion des parents</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gestion-moyenne.php">Gestion des moyennes</a>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-light" onclick="logout()">Déconnexion</button>
        </li>
      </ul>
    </div>
  </nav>
</header>
<h3>Bienvenue sur l'application du Lycée Saint Jean.</h3> <br>
<h2>Responsive Table</h2>

<div class="table-wrapper">
  <table class="fl-table">
    <thead>
      <tr>
        <th>ID</th>
        <th>Nom</th>
        <th>Prénom</th>
        <th>Age</th>
        <th>Classe</th>
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
      
      // Requête pour récupérer les données de la base de données
      $requete = "SELECT * FROM table_eleves";
      $resultat = mysqli_query($connexion, $requete);
      
      // Parcourir les résultats et afficher les données dans le tableau
      while ($row = mysqli_fetch_assoc($resultat)) {
        echo "<tr>";
        echo "<td>".$row['ID']."</td>";
        echo "<td>".$row['nom']."</td>";
        echo "<td>".$row['prenom']."</td>";
        echo "<td>".$row['age']."</td>";
        echo "<td>".$row['classe']."</td>";
        echo "<td>";
        echo "<a href='#'><i class='fas fa-plus'></i></a> "; // Icône pour les détails de l'élève
        echo "<a href='#'><i class='fas fa-edit'></i></a> "; // Icône pour la modification de l'élève
        echo "<a href='#'><i class='fas fa-trash-alt'></i></a>"; // Icône pour la suppression de l'élève
        echo "</td>";
        echo "</tr>";
      }
      
      // Fermer la connexion à la base de données
      mysqli_close($connexion);
      ?>
    </tbody>
  </table>
</div>

<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
<script>
  function logout() {
    // Code pour déconnexion
    console.log('Déconnexion effectuée');

    // Redirection vers la page de connexion
    window.location.href = "Connexion.php";
  }
</script>
<footer>
  <div class="footer">
    <div class="container">
      <div class="text-center">&copy; Developed by DAO A.Razak, GARBA Faridatou and KABORE Sadia</div>
    </div>
  </div>
</footer>
</body>
</html>
