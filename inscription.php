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

    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $poste = $_POST['poste'];

    // Vérification s'il existe déjà un directeur dans la base de données
    $stmt = $pdo->prepare("SELECT COUNT(*) FROM administrateurs WHERE poste = 'directeur'");
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($poste === 'directeur' && $count > 0) {
        // Si un directeur existe déjà, redirection vers la page de connexion
        header('Location: Connexion.php');
        exit();
    } else {
        // Hashage du mot de passe
        $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

        // Préparation de la requête d'insertion
        $stmt = $pdo->prepare("INSERT INTO administrateurs (nom, prenom, email, mot_de_passe, poste) VALUES (?, ?, ?, ?, ?)");

        // Exécution de la requête avec les valeurs des variables
        $stmt->execute([$nom, $prenom, $email, $mot_de_passe_hash, $poste]);

        // Fermeture de la connexion PDO
        $pdo = null;

        // Redirection vers la page de connexion
        header('Location: Connexion.php');
        exit();
    }
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>
