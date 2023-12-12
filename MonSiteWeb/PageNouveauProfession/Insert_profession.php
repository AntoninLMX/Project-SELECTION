<?php

try {
    // Créer une connexion
    $conn = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");
    // Définir le mode d'erreur PDO sur exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer la requête SQL
    $stmt = $conn->prepare("INSERT INTO personnels (nom, prenom, email, mot_de_passe, profession) 
    VALUES (:nom, :prenom, :email, :mot_de_passe, :profession)");

    // Lier les paramètres
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $mot_de_passe = $_POST['mot_de_passe'];
    $profession = $_POST['profession'];

    if(empty($nom) || empty($prenom) || empty($email) || empty($mot_de_passe)|| empty($profession)) {
        echo "Tous les champs sont obligatoires.";
        exit;
    }

    $stmt->bindParam(':nom', $nom);
    $stmt->bindParam(':prenom', $prenom);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':mot_de_passe', $mot_de_passe);
    $stmt->bindParam(':profession', $profession);

    // Exécuter la requête
    $stmt->execute();

    header('Location: ..\PageClassementAdministrateurs\PageClassementAdministrateurs.php');
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Fermer la connexion
$conn = null;
?>