<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Page Classement Secrétaire</title>
        <link rel=stylesheet href="style.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    </head>
    <body>
        <div class="Classement">
            <button class="BoutonModif" onclick="window.location.href = '../index.php';"><i class="fa-solid fa-power-off"></i></button>
            <h1>Bienvenue Secrétaire !</h1>
            <?php

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
                            <td class="Modif" onclick="window.location.href = \'../PageVoirEtudiant/PageVoirEtudiant.php?id='.htmlspecialchars($row["id"]).'\';"><button class="BoutonModif">Voir</button></td>
                            <td class="Modif">
                                <a href="telecharger.php?id=' . htmlspecialchars($row['id']) . '" download>
                                    <button class="BoutonModif">Télécharger</button>
                                </a>
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