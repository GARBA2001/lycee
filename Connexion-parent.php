<?php
// Informations de connexion à la base de données
$host = 'localhost';
$dbName = 'administrateur';
$user = 'root';
$password = '';

try {
    // Création de la connexion PDO
    $pdo = new PDO("mysql:host=$host;dbname=$dbName;charset=utf8", $user, $password);

    // Configuration des options de PDO
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Génère des exceptions en cas d'erreur
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Récupère les résultats de requête sous forme de tableau associatif

    // Vérification si le formulaire de connexion est soumis
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Récupération des données du formulaire
        $email = $_POST['email'];
        $mot_de_passe = $_POST['mot_de_passe'];

        // Requête pour vérifier les informations de connexion dans la base de données
        $stmt = $pdo->prepare("SELECT * FROM parent WHERE email = ?");
        $stmt->execute([$email]);
        $administrateur = $stmt->fetch();

        if ($administrateur && password_verify($mot_de_passe, $administrateur['mot_de_passe'])) {
            // Les informations de connexion sont valides
            // Redirection vers la page d'accueil ou autre traitement
            header('Location: accueil.php');
            // exit();
        } else {
            // Les informations de connexion sont invalides
            echo "Identifiants invalides.";
        }
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulaire de connexion parent</title>
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
      <input type="password" placeholder="Mot de passe :" name="mot_de_passe">
    </div>
    <a href="mot_de_passe_oublier.php">Mot de passe oublié ?</a>
    <div align="center">
      <button type="submit">Se connecter</button>
    </div>
  </form>
</body>
</html>
