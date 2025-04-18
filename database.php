<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
 
// Connexion PDO à la base de données
$host = 'localhost';
$db = 'siteali2';
$user = 'root';
$pass = '';
$charset = 'utf8mb4';
 
$dsn = "mysql:host=$host;dbname=$db;charset=$charset";
$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, // Active l'affichage des erreurs PDO en tant qu'exceptions
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC, // Retourne les résultats sous forme de tableau associatif
];
 
try {
    $pdo = new PDO($dsn, $user, $pass, $options); // Connexion à la base de données avec PDO
    echo "ok connected";
} catch (PDOException $e) {
    throw new PDOException($e->getMessage(), (int)$e->getCode()); // En cas d'erreur, on affiche le message
}




// Si formulaire soumis
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = $_POST['nom'];
    $cin = $_POST['cin'];
    $date_naissance = $_POST['date_naissance'];
    $telephone = $_POST['telephone'];
    $email = $_POST['email'] ?? null; // Email est facultatif
    $ville = $_POST['ville'];
    $sexe = $_POST['sexe'];

    // Requête SQL pour insérer les données
    $sql = "INSERT INTO utilisateurs (nom_complet, numero_cin, date_naissance, telephone, email, ville, sexe)
            VALUES (?, ?, ?, ?, ?, ?, ?)";
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$nom, $cin, $date_naissance, $telephone, $email, $ville, $sexe]);

    $message = "✅ Inscription enregistrée avec succès !";
}