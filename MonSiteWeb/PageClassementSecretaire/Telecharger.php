<?php
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=etudiant.csv');

$output = fopen('php://output', 'w');

fputcsv($output, array('Nom', 'Prenom', 'Bac', 'Travail sérieux', 'Absence', 'Attitude comportement', 'Etude supérieur', 'Avis PP', 'Avis proviseur', 'Lettre motivation', 'Remarque', 'Note jury', 'Statut dossier'));

$pdo = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");

$stmt = $pdo->prepare("SELECT nom, prenom, bac, travail_serieux, absence, attitude_comportement, etude_superieur, avis_pp, avis_proviseur, lettre_motivation, remarque, note_jury, statut_dossier FROM etudiants WHERE id = ?");
$stmt->execute([$_GET['id']]);
$result = $stmt->fetch(PDO::FETCH_ASSOC);

fputcsv($output, $result);

fclose($output);
?>