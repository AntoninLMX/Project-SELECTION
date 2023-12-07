<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page Classement Administrateurs</title>
        <link rel=stylesheet href="style.css">
    </head>
    <body>
        <div class="Classement">
            <h1>Bienvenue Administrateurs !</h1>
            <button class="Nouveau" onclick="window.location.href = '../PageNouveauProfession/PageNouveauProfession.php';">Nouveau</button>
            <table>
                <tr>
                    <th class="Etudiants" scope="col">Nom / Prénom</th>
                    <th scope="col">Professions</th>
                </tr>
                <tr>
                    <td class="Nom">Dupont Henry</td>
                    <td class="Note">Evaluateur</td>
                    <td class="Modif"><button class="BoutonModif">Modifié</button></td>
                </tr>
                <tr>
                    <td class="Nom">Dupont Laurent</td>
                    <td class="Note">Evaluateur</td>
                    <td class="Modif"><button class="BoutonModif">Modifié</button></td>
                </tr>
                <tr>
                    <td class="Nom">Dupont Enzo</td>
                    <td class="Note">Secrétaire</td>
                    <td class="Modif"><button class="BoutonModif">Modifié</button></td>
                </tr>
            </table>
        </div>
        <div>
		    <?php include('../pied_de_page.php'); ?>
		</div>
    </body>
</html>