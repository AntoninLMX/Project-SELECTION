<?php
    $pdo = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");

    // Récupérer les valeurs du formulaire
    $id = $_POST['id'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $bac = $_POST['bac'];
    $travail_serieux = $_POST['travail_serieux'];
    $absence = $_POST['absence'];
    $attitude_comportement = $_POST['attitude_comportement'];
    $etude_superieur = $_POST['etude_superieur'];
    $avis_pp = $_POST['avis_pp'];
    $avis_proviseur = $_POST['avis_proviseur'];
    $lettre_motivation = $_POST['lettre_motivation'];
    $remarque = $_POST['remarque'];
    $note_jury = $_POST['note_jury'];
    $statut_dossier = $_POST['statut_dossier'];

    // Préparer et exécuter la requête pour mettre à jour l'étudiant
    $stmt = $pdo->prepare("UPDATE etudiants SET nom = :nom, prenom = :prenom, bac = :bac, travail_serieux = :travail_serieux, absence = :absence, attitude_comportement = :attitude_comportement, etude_superieur = :etude_superieur, avis_pp = :avis_pp, avis_proviseur = :avis_proviseur, lettre_motivation = :lettre_motivation, remarque = :remarque, note_jury = :note_jury, statut_dossier = :statut_dossier WHERE id = :id");
    $stmt->execute([
        'id' => $id,
        'nom' => $nom,
        'prenom' => $prenom,
        'bac' => $bac,
        'travail_serieux' => $travail_serieux,
        'absence' => $absence,
        'attitude_comportement' => $attitude_comportement,
        'etude_superieur' => $etude_superieur,
        'avis_pp' => $avis_pp,
        'avis_proviseur' => $avis_proviseur,
        'lettre_motivation' => $lettre_motivation,
        'remarque' => $remarque,
        'note_jury' => $note_jury,
        'statut_dossier' => $statut_dossier
    ]);

    // Rediriger vers une page de confirmation
    header("Location: /MonSiteWeb/PageClassementEvaluateurs/PageClassementEvaluateurs.php");
?>
