<?php
    $pdo = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");

    // Récupérer l'ID de l'étudiant de l'URL
    $id = $_GET['id'];

    // Préparer et exécuter la requête pour récupérer les informations de l'étudiant
    $stmt = $pdo->prepare("SELECT * FROM etudiants WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $etudiant = $stmt->fetch();

    // Si l'étudiant n'existe pas, rediriger vers une page d'erreur
    if (!$etudiant) {
        header("Location: /erreur.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Nouveau étudiant</title>
        <link rel=stylesheet href="style.css">
    </head>
    <body><!-- Le formulaire pour modifier l'étudiant, pré-rempli avec les informations de l'étudiant -->
        <form method="post" action="/MonSiteWeb/PageModificationEtudiant/RequeteModification.php">
            <div class="Candidat">    
                <h1>Veuillez modifier l'information du candidat</h1>

                <label for="nom">Nom:</label><br>
                <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($etudiant['nom']); ?>"><br>

                <label for="prenom">Prenom:</label><br>
                <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($etudiant['prenom']); ?>"><br>

                <label for="bac">Bac:</label><br>
                <input type="text" id="bac" name="bac" value="<?php echo htmlspecialchars($etudiant['bac']); ?>"><br>

                <label for="travail_serieux">Travail sérieux:</label><br>
                    <select id="travail_serieux" name="travail_serieux">
                        <option value="Oui (+1)" <?php echo $etudiant['travail_serieux'] == 'Oui (+1)' ? 'selected' : ''; ?>>Oui (+1)</option>
                        <option value="Non (+0)" <?php echo $etudiant['travail_serieux'] == 'Non (+0)' ? 'selected' : ''; ?>>Non (+0)</option>
                    </select><br>

                <label for="absence">Absence:</label><br>
                    <select id="absence" name="absence">
                        <option value="Oui (-2 ou dossier refusé)" <?php echo $etudiant['absence'] == 'Oui (-2 ou dossier refusé)' ? 'selected' : ''; ?>>Oui (-2 ou dossier refusé)</option>
                        <option value="Non (+1)" <?php echo $etudiant['absence'] == 'Non (+1)' ? 'selected' : ''; ?>>Non (+1)</option>
                    </select><br>
    
                <label for="attitude_comportement">Attitude comportement:</label><br>
                    <select id="attitude_comportement" name="attitude_comportement">
                        <option value="Oui (dossier refusé !!)" <?php echo $etudiant['attitude_comportement'] == 'Oui (dossier refusé !!)' ? 'selected' : ''; ?>>Oui (dossier refusé !!)</option>
                        <option value="Non (+1)" <?php echo $etudiant['attitude_comportement'] == 'Non (+1)' ? 'selected' : ''; ?>>Non (+1)</option>
                    </select><br>

                <label for="etude_superieur">Etude supérieur:</label><br>
                    <select id="etude_superieur" name="etude_superieur">
                        <option value="Oui (+1)" <?php echo $etudiant['etude_superieur'] == 'Oui (+1)' ? 'selected' : ''; ?>>Oui (+1)</option>
                        <option value="Non (+0)" <?php echo $etudiant['etude_superieur'] == 'Non (+0)' ? 'selected' : ''; ?>>Non (+0)</option>
                    </select><br>

                <label for="avis_pp">Avis PP:</label><br>
                    <select id="avis_pp" name="avis_pp">
                        <option value="B (+2)" <?php echo $etudiant['avis_pp'] == 'B (+2)' ? 'selected' : ''; ?>>B (+2)</option>
                        <option value="AB (+1)" <?php echo $etudiant['avis_pp'] == 'AB (+1)' ? 'selected' : ''; ?>>AB (+1)</option>
                        <option value="Insuf. (-1)" <?php echo $etudiant['avis_pp'] == 'Insuf. (-1)' ? 'selected' : ''; ?>>Insuf. (-1)</option>
                        <option value="Négatif (-2)" <?php echo $etudiant['avis_pp'] == 'Négatif (-2)' ? 'selected' : ''; ?>>Négatif (-2)</option>
                    </select><br>

                <label for="avis_proviseur">Avis Proviseur:</label><br>
                    <select id="avis_proviseur" name="avis_proviseur">
                        <option value="B (+2)" <?php echo $etudiant['avis_proviseur'] == 'B (+2)' ? 'selected' : ''; ?>>B (+2)</option>
                        <option value="AB (+1)" <?php echo $etudiant['avis_proviseur'] == 'AB (+1)' ? 'selected' : ''; ?>>AB (+1)</option>
                        <option value="Insuf. (-1)" <?php echo $etudiant['avis_proviseur'] == 'Insuf. (-1)' ? 'selected' : ''; ?>>Insuf. (-1)</option>
                        <option value="Négatif (-2)" <?php echo $etudiant['avis_proviseur'] == 'Négatif (-2)' ? 'selected' : ''; ?>>Négatif (-2)</option>
                    </select><br>

                <label for="lettre_motivation">Lettre motivation:</label><br>
                    <select id="lettre_motivation" name="lettre_motivation">
                        <option value="B (+2)" <?php echo $etudiant['lettre_motivation'] == 'B (+2)' ? 'selected' : ''; ?>>B (+2)</option>
                        <option value="AB (+1)" <?php echo $etudiant['lettre_motivation'] == 'AB (+1)' ? 'selected' : ''; ?>>AB (+1)</option>
                        <option value="Insuf. (-1)" <?php echo $etudiant['lettre_motivation'] == 'Insuf. (-1)' ? 'selected' : ''; ?>>Insuf. (-1)</option>
                        <option value="Négatif (-2)" <?php echo $etudiant['lettre_motivation'] == 'Négatif (-2)' ? 'selected' : ''; ?>>Négatif (-2)</option>
                    </select><br>

                <label for="remarque">Remarque:</label><br>
                <textarea id="remarque" name="remarque"><?php echo htmlspecialchars($etudiant['remarque']); ?></textarea><br>

                <label for="note_jury">Note Jury:</label><br>
                <input type="text" id="note_jury" name="note_jury" value="<?php echo htmlspecialchars($etudiant['note_jury']); ?>"><br>

                <label for="statut_dossier">Statut dossier:</label><br>
                    <select id="statut_dossier" name="statut_dossier">
                        <option value="Dossier accepté" <?php echo $etudiant['statut_dossier'] == 'Dossier accepté' ? 'selected' : ''; ?>>Dossier accepté</option>
                        <option value="Dossier à ré-examiner" <?php echo $etudiant['statut_dossier'] == 'Dossier à ré-examiner' ? 'selected' : ''; ?>>Dossier à ré-examiner</option>
                        <option value="Dossier Refusé" <?php echo $etudiant['statut_dossier'] == 'Dossier Refusé' ? 'selected' : ''; ?>>Dossier Refusé</option>
                    </select><br>
    
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($etudiant['id']); ?>">
                <input class="Bouton" type="submit" value="Modifier">
            </div>
        </form>
        <div>
		    <?php include('../pied_de_page.php'); ?>
		</div>
    </body>
</html>
