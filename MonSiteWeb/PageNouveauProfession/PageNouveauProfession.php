<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Nouveau étudiant</title>
        <link rel=stylesheet href="style.css">
    </head>
    <body>
        <form method="post" action="insert_profession.php">
            <div class="Candidat">
                <h1>Veuillez rentrer l'information du candidat</h1>
                <label for="nom">Le Nom :</label><input type="text" name="nom" id="nom">
                <label for="prenom">Le Prénom :</label><input type="text" name="prenom" id="prenom">
                <label for="email">L'Email :</label><input type="text" name="email" id="email">
                <label for="mot_de_passe">Le Mot de passe :</label><input type="password" name="mot_de_passe" id="mot_de_passe">
                <label for="profession">Profession :</label>
                <select name="profession" id="profession">
                    <option value="Evaluateur">Evaluateur</option>
                    <option value="Secretaire">Secretaire</option>
                    <option value="Administrateur">Administrateur</option>
                </select>
                <button class="Bouton">Validé</button>
            </div>
        </form>
        <div>
		    <?php include('../pied_de_page.php'); ?>
		</div>
    </body>
</html>