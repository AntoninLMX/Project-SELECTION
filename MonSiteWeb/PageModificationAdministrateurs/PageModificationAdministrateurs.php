<?php
    $pdo = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");

    // Récupérer l'ID de l'étudiant de l'URL
    $id = $_GET['id'];

    // Préparer et exécuter la requête pour récupérer les informations de l'étudiant
    $stmt = $pdo->prepare("SELECT * FROM personnels WHERE id = :id");
    $stmt->execute(['id' => $id]);
    $personnels = $stmt->fetch();

    // Si l'étudiant n'existe pas, rediriger vers une page d'erreur
    if (!$personnels) {
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
                <input type="text" id="nom" name="nom" value="<?php echo htmlspecialchars($personnels['nom']); ?>"><br>

                <label for="prenom">Prenom:</label><br>
                <input type="text" id="prenom" name="prenom" value="<?php echo htmlspecialchars($personnels['prenom']); ?>"><br>

                <label for="email">Email:</label><br>
                <input type="text" id="email" name="email" value="<?php echo htmlspecialchars($personnels['email']); ?>"><br>

                <label for="profession">Profession:</label><br>
                    <select id="profession" name="profession">
                        <option value="Evaluateur" <?php echo $personnels['profession'] == 'Evaluateur' ? 'selected' : ''; ?>>Evaluateur</option>
                        <option value="Secretaire" <?php echo $personnels['profession'] == 'Secretaire' ? 'selected' : ''; ?>>Secretaire</option>
                        <option value="Administrateur" <?php echo $personnels['profession'] == 'Administrateur' ? 'selected' : ''; ?>>Administrateur</option>
                    </select><br>

                <input type="hidden" name="id" value="<?php echo htmlspecialchars($personnels['id']); ?>">
                <input class="Bouton" type="submit" value="Modifier">
            </div>
        </form>
        <div>
		    <?php include('../pied_de_page.php'); ?>
		</div>
    </body>
</html>