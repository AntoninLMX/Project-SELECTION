<?php
    $pdo = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");

    // Récupérer les valeurs du formulaire
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $profession = $_POST['profession'];

    // Préparer et exécuter la requête pour mettre à jour l'étudiant
    $stmt = $pdo->prepare("UPDATE etudiants SET nom = :nom, prenom = :prenom, email = :email, profession = :profession WHERE id = :id");
    $stmt->execute([
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'email' => $email,
        'profession' => $profession,
    ]);

    // Rediriger vers une page de confirmation
    header("Location: /MonSiteWeb/PageClassementAdministrateurs/PageClassementAdministrateurs.php");
?>