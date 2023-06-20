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
    
    // Utilisation de PDO pour effectuer des opérations sur la base de données
    
    // Exemple d'insertion de données dans une table
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $poste = $_POST['poste'];
    
    // Hashage du mot de passe
    $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
    
    $stmt = $pdo->prepare("INSERT INTO admin (nom, prenom, email, mot_de_passe, poste) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([$nom, $prenom, $email, $mot_de_passe_hash, $poste]);
    
    // Autres opérations sur la base de données...
    
    // Fermeture de la connexion PDO
    $pdo = null;
} catch (PDOException $e) {
    echo "Erreur de connexion à la base de données : " . $e->getMessage();
}
?>