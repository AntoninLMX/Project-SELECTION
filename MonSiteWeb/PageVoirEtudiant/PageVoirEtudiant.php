<?php
    $pdo = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");

    $id = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM etudiants WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $etudiant = $stmt->fetch();

    if (!$etudiant) {
        header("Location: /erreur.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Voir Etudiant</title>
        <link rel=stylesheet href="style.css">
    </head>
    <body>
        <div class="Candidat">
            <h1>Informations de l'étudiant</h1>
            <form method="post" action="/MonSiteWeb/PageModificationEtudiant/RequeteModification.php">
                <label for="nom">Nom:</label><br>
                <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($etudiant['nom']); ?>" readonly><br>

                <label for="prenom">Prenom:</label><br>
                <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($etudiant['prenom']); ?>" readonly><br>

                <label for="bac">Bac:</label><br>
                <input type="text" id="bac" name="bac" value="<?php echo htmlspecialchars($etudiant['bac']); ?>" readonly><br>

                <label for="travail_serieux">Travail sérieux:</label><br>
                <input type="text" id="travail_serieux" name="travail_serieux" value="<?php echo htmlspecialchars($etudiant['travail_serieux']); ?>" readonly><br>

                <label for="absence">Absence:</label><br>
                <input type="text" id="absence" name="absence" value="<?php echo htmlspecialchars($etudiant['absence']); ?>" readonly><br>

                <label for="attitude_comportement">Attitude comportement:</label><br>
                <input type="text" id="attitude_comportement" name="attitude_comportement" value="<?php echo htmlspecialchars($etudiant['attitude_comportement']); ?>" readonly><br>

                <label for="etude_superieur">Etude supérieur:</label><br>
                <input type="text" id="etude_superieur" name="etude_superieur" value="<?php echo htmlspecialchars($etudiant['etude_superieur']); ?>" readonly><br>

                <label for="avis_pp">Avis PP:</label><br>
                <input type="text" id="avis_pp" name="avis_pp" value="<?php echo htmlspecialchars($etudiant['avis_pp']); ?>" readonly><br>

                <label for="avis_proviseur">Avis proviseur:</label><br>
                <input type="text" id="avis_proviseur" name="avis_proviseur" value="<?php echo htmlspecialchars($etudiant['avis_proviseur']); ?>" readonly><br>

                <label for="lettre_motivation">Lettre motivation:</label><br>
                <input type="text" id="lettre_motivation" name="lettre_motivation" value="<?php echo htmlspecialchars($etudiant['lettre_motivation']); ?>" readonly><br>

                <label for="remarque">Remarque:</label><br>
                <input type="text" id="remarque" name="remarque" value="<?php echo htmlspecialchars($etudiant['remarque']); ?>" readonly><br>

                <label for="note_jury">Note Jury:</label><br>
                <input type="text" id="note_jury" name="note_jury" value="<?php echo htmlspecialchars($etudiant['note_jury']); ?>" readonly><br>

                <label for="statut_dossier">Statut dossier:</label><br>
                <input type="text" id="statut_dossier" name="statut_dossier" value="<?php echo htmlspecialchars($etudiant['statut_dossier']); ?>" readonly><br>

                <button class="Bouton" type="button" onclick="window.location.href='/MonSiteWeb/PageClassementSecretaire/PageClassementSecretaire.php'">Retour</button>
            </form>
        </div>
        <div>
            <?php include('../pied_de_page.php'); ?>
        </div>
    </body>
</html>