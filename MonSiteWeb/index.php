<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Portail d'identification</title>
        <link rel=stylesheet href="style.css">
    </head>
    <body>
        <form action="traitement_connexion.php" method="POST">
            <h1>Bienvenue !</h1>
            <div class="inputs">
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="mot_de_passe" placeholder="Mot de passe" required>
            </div>
            <div>
                <button type="submit" name="connecter">Se connecter</button>
            </div>
        </form> 
        <div>
		    <?php include('pied_de_page.php'); ?>
		</div>
    </body>
</html>