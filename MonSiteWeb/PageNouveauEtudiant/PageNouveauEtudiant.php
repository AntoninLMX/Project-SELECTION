<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Nouveau étudiant</title>
        <link rel=stylesheet href="PageNouveauEtudiant_style.css">
    </head>
    <body>
        <form method="post" action="insert_etudiant.php">
            <div class="Candidat">
                <h1>Veuillez rentrer l'information du candidat</h1>
                <label for="nom">Le Nom :</label><input type="text" name="nom" id="nom">
                <label for="prenom">Le Prénom :</label><input type="text" name="prenom" id="prenom">
                <label for="bac">Le BAC :</label><input type="text" name="bac" id="bac">
                <label for="travailserieux">Travail sérieux :</label>
                <select name="travail_serieux" id="travailserieux">
                    <option value="Oui (+1)">Oui (+1)</option>
                    <option value="Non (-1)">Non (-1)</option>
                </select>
                <label for="absence">Absence :</label>
                <select name="absence" id="absence">
                    <option value="Oui (-2 ou dossier refusé)">Oui (-2 ou dossier refusé)</option>
                    <option value="Non (+1)">Non (+1)</option>
                </select>
                <label for="attitudecomportement">Attitude / Comportement :</label>
                <select name="attitude_comportement" id="attitudecomportement">
                    <option value="Oui (dossier refusé !!)">Oui (dossier refusé !!)</option>
                    <option value="Non (+1)">Non (+1)</option>
                </select>
                <label for="etudesuperieure">Etude supérieure :</label>
                <select name="etude_superieur" id="etudesuperieure">
                    <option value="Oui (+1)">Oui (+1)</option>
                    <option value="Non (+0)">Non (+0)</option>
                </select>
                <label for="avispp">Avis PP :</label>
                <select name="avis_PP" id="avispp">
                    <option value="B (+2)">B (+2)</option>
                    <option value="AB (+1)">AB (+1)</option>
                    <option value="Insuf.(-1)">Insuf.(-1)</option>
                    <option value="Négatif (-2)">Négatif (-2)</option>
                </select>
                <label for="avisproviseur">Avis Proviseur :</label>
                <select name="avis_proviseur" id="avisproviseur">
                    <option value="B (+2)">B (+2)</option>
                    <option value="AB (+1)">AB (+1)</option>
                    <option value="Insuf.(-1)">Insuf.(-1)</option>
                    <option value="Négatif (-2)">Négatif (-2)</option>
                </select>
                <label for="lettremotivation">Lettre motivation :</label>
                <select name="lettre_motivation" id="lettremotivation">
                    <option value="B (+2)">B (+2)</option>
                    <option value="AB (+1)">AB (+1)</option>
                    <option value="Insuf.(-1)">Insuf.(-1)</option>
                    <option value="Négatif (-2)">Négatif (-2)</option>
                </select>
                <label for="remarques">Remarque(s) :</label>
                <textarea name="remarque" id="remarques"></textarea>
                <label for="note">Note du jury pour ce dossier</label><input type="text" name="note_jury" id="note" pattern="\d*" title="Seuls les chiffres sont autorisés.">
                <label for="statutdossier">Le statut du dossier</label>
                <select name="statut_dossier" id="statutdossier">
                    <option value="Dossier accepté">Dossier accepté</option>
                    <option value="Dossier à ré-examiner">Dossier à ré-examiner</option>
                    <option value="Dossier Refusé">Dossier Refusé</option>
                </select>
                <button class="Bouton">Validé</button>
            </div>
        </form>
        <div>
		    <?php include('../pied_de_page.php'); ?>
		</div>
    </body>
</html>