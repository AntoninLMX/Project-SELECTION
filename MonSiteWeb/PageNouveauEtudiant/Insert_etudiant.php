<?php

try {
    // Créer une connexion
    $conn = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");
    // Définir le mode d'erreur PDO sur exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Préparer la requête SQL
    $stmt = $conn->prepare("INSERT INTO etudiants (nom, prenom, bac, travail_serieux, absence, attitude_comportement, etude_superieur, avis_PP, avis_proviseur, lettre_motivation, remarque, note_jury, statut_dossier)
    VALUES (:nom, :prenom, :bac, :travail_serieux, :absence, :attitude_comportement, :etude_superieur, :avis_PP, :avis_proviseur, :lettre_motivation, :remarque, :note_jury, :statut_dossier)");

    // Lier les paramètres
    $stmt->bindParam(':nom', $_POST['nom']);
    $stmt->bindParam(':prenom', $_POST['prenom']);
    $stmt->bindParam(':bac', $_POST['bac']);
    $stmt->bindParam(':travail_serieux', $_POST['travail_serieux']);
    $stmt->bindParam(':absence', $_POST['absence']);
    $stmt->bindParam(':attitude_comportement', $_POST['attitude_comportement']);
    $stmt->bindParam(':etude_superieur', $_POST['etude_superieur']);
    $stmt->bindParam(':avis_PP', $_POST['avis_PP']);
    $stmt->bindParam(':avis_proviseur', $_POST['avis_proviseur']);
    $stmt->bindParam(':lettre_motivation', $_POST['lettre_motivation']);
    $stmt->bindParam(':remarque', $_POST['remarque']);
    $stmt->bindParam(':note_jury', $_POST['note_jury']);
    $stmt->bindParam(':statut_dossier', $_POST['statut_dossier']);

    // Exécuter la requête
    $stmt->execute();

    header('Location: ..\PageClassementEvaluateurs\PageClassementEvaluateurs.php');
} catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}

// Fermer la connexion
$conn = null;
?>