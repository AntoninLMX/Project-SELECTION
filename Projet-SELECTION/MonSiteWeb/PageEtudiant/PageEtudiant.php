<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>étudiant</title>
        <link rel=stylesheet href="style.css">
    </head>
    <body>
        <form method="get" action="../PageClassementSecretaire/PageClassementSecretaire.php">
            <div class="Candidat">
                <h1>Voici les informations du candidat</h1>
                <label for="nom">Le Nom :</label><input type="text" name="Nom" id="nom" value="Dupont" readonly="readonly">
                <label for="prenom">Le Prénom :</label><input type="text" name="Prenom" id="prenom" value="Louis" readonly="readonly">
                <label for="bac">Le BAC :</label><input type="text" name="BAC" id="bac" value="Série PRO : 08" readonly="readonly">
                <label for="travailserieux">Travail sérieux :</label>
                <select name="TravailSerieux" id="travailserieux">
                    <option value="Oui">Oui (+1)</option>
                    <option value="Non" disabled="disabled">Non (-1)</option>
                </select>
                <label for="absence">Absence :</label>
                <select name="Absence" id="absence">
                    <option value="Oui" disabled="disabled">Oui (-2 ou dossier refusé)</option>
                    <option value="Non">Non (+1)</option>
                </select>
                <label for="attitudecomportement">Attitude / Comportement :</label>
                <select name="AttitudeComportement" id="attitudecomportement">
                    <option value="Oui" disabled="disabled">Oui (dossier refusé !!)</option>
                    <option value="Non">Non (+1)</option>
                </select>
                <label for="etudesuperieure">Etude supérieure :</label>
                <select name="EtudeSuperieure" id="etudesuperieure">
                    <option value="Oui">Oui (+1)</option>
                    <option value="Non" disabled="disabled">Non (+0)</option>
                </select>
                <label for="avispp">Avis PP :</label>
                <select name="AvisPP" id="avispp">
                    <option value="B">B (+2)</option>
                    <option value="AB" disabled="disabled">AB (+1)</option>
                    <option value="Ins" disabled="disabled">Insuf.(-1)</option>
                    <option value="Neg" disabled="disabled">Négatif (-2)</option>
                </select>
                <label for="avisproviseur">Avis Proviseur :</label>
                <select name="AvisProviseur" id="avisproviseur">
                    <option value="B" disabled="disabled">B (+2)</option>
                    <option value="AB">AB (+1)</option>
                    <option value="Ins" disabled="disabled">Insuf.(-1)</option>
                    <option value="Neg" disabled="disabled">Négatif (-2)</option>
                </select>
                <label for="lettremotivation">Lettre motivation :</label>
                <select name="LettreMotivation" id="lettremotivation">
                    <option value="B" disabled="disabled">B (+2)</option>
                    <option value="AB">AB (+1)</option>
                    <option value="Ins" disabled="disabled">Insuf.(-1)</option>
                    <option value="Neg" disabled="disabled">Négatif (-2)</option>
                </select>
                <label for="remarques">Remarque(s) :</label>
                <textarea name="Remarques" id="remarques" readonly="readonly">Eleve sérieux</textarea>
                <label for="note">Note du jury pour ce dossier</label><input type="text" name="Note" id="note" value="16" readonly="readonly">
                <label for="statutdossier">Le statut du dossier</label>
                <select name="StatutDossier" id="statutdossier">
                    <option value="dossieraccepte">Dossier accepté</option>
                    <option value="dossierareexaminer" disabled="disabled">Dossier à ré-examiner</option>
                    <option value="dossierrefuse" disabled="disabled">Dossier Refusé</option>
                </select>
                <button class="Bouton">OK</button>
            </div>
        </form>
        <div>
		    <?php include('../pied_de_page.php'); ?>
		</div>
    </body>
</html>