<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Mon site avec Bootstrap</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="Style/style-accueil.css">
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
          <a class="nav-link" href="gestion-eleve.php" target="_blank">Gestion des élèves</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="gestion-parent.php" target="_blank">Gestion des parents</a>
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
 <h3>Bienvenue sur l'application du Lycée Saint Jean.</h3> <br>


 <div class="btn-group d-flex justify-content-center" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary col-2 btn-lg">
    <a href="gestion-eleve.php" style="color: inherit; text-decoration: none;">Gestion des élèves</a>
  </button>
  <div class="col-1"></div> <!-- Colonne vide -->
  <button type="button" class="btn btn-primary col-2 btn-lg">
    <a href="gestion-moyenne.php" style="color: inherit; text-decoration: none;">Gestion des moyennes</a>
  </button>
  <div class="col-1"></div> <!-- Colonne vide -->
  <button type="button" class="btn btn-primary col-2 btn-lg">
    <a href="gestion-parent.php" style="color: inherit; text-decoration: none;">Gestion des parents</a>
  </button>
</div>
 <br><br><br><br><br>

<footer>

  <!-- Copyright -->
  <div class="footer-copyright text-center">&copy; Developed </i> by DAO A.Razak, GARBA Faridatou and KABORE Sadia
  
</div>
  <!-- Copyright -->

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
