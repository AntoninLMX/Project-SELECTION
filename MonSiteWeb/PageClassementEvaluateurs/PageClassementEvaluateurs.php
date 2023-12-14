<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page Classement Evaluateurs</title>
        <link rel=stylesheet href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="Classement">
            <button class="Nouveau" onclick="window.location.href = '../index.php';"><i class="fa-solid fa-power-off"></i></button>
            <h1>Bienvenue Evaluateurs !</h1>
            <button class="Nouveau" onclick="window.location.href = '../PageNouveauEtudiant/PageNouveauEtudiant.php';">Nouveau</button>
            <?php

            if(isset($_POST['id'])){
                $pdo = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");
                $stmt = $pdo->prepare("DELETE FROM etudiants WHERE id = :id");
                $stmt->execute(['id' => $_POST['id']]);
            }

            $pdo = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");

            $stmt = $pdo->prepare("SELECT * FROM etudiants");
            $stmt->execute();
            $result = $stmt->fetchAll();

            if(count($result) > 0) {
                $table = '
                    <table>
                        <tr>
                            <th class="Etudiants" scope="col">Nom</th>
                            <th class="Etudiants" scope="col">Prenom</th>
                            <th>Note</th>
                            <th>Statut</th>
                        </tr>
                ';
                foreach($result as $row) {
                    $table .= '
                        <tr>
                            <td>'.htmlspecialchars($row["nom"]).'</td>
                            <td>'.htmlspecialchars($row["prenom"]).'</td>
                            <td class="Note">'.htmlspecialchars($row["note_jury"]).'</td>
                            <td class="Note">'.htmlspecialchars($row["statut_dossier"]).'</td>
                            <td class="Note">
                                <form method="post">
                                    <input type="hidden" name="id" value="'.htmlspecialchars($row["id"]).'">
                                    <input class="Nouveau" type="submit" value="Supprimer">
                                </form>
                            </td>
                            <td class="Note">
                                <form method="get" action="/MonSiteWeb/PageModificationEtudiant/PageModificationEtudiant.php">
                                    <input type="hidden" name="id" value="'.htmlspecialchars($row["id"]).'">
                                    <input class="Nouveau" type="submit" value="Modifier">
                                </form>
                            </td>
                        </tr>
                    ';
                }
                $table .= '</table>';
                echo $table;
            }
            ?>
        </div>
        <div>
		    <?php include('../pied_de_page.php'); ?>
		</div>
    </body>
</html>