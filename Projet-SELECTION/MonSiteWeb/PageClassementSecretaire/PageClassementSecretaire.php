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
            <h1>Bienvenue Secrétaire !</h1>
            <table>
                <tr>
                    <th class="Etudiants" scope="col">Etudiants</th>
                    <th scope="col">Notes</th>
                </tr>
                <tr>
                    <td class="Nom">Dupont Jean</td>
                    <td class="Note">17</td>
                    <td class="Modif" onclick="window.location.href = '../PageEtudiant/PageEtudiant.php';"><button class="BoutonModif">Voir</button></td>
                    <td class="Modif"><i class="fa-solid fa-download"></i></td>
                </tr>
                <tr>
                    <td class="Nom">Dupont Mathilde</td>
                    <td class="Note">8</td>
                    <td class="Modif" onclick="window.location.href = '../PageEtudiant/PageEtudiant.php';"><button class="BoutonModif">Voir</button></td>
                    <td class="Modif"><i class="fa-solid fa-download"></i></td>
                </tr>
                <tr>
                    <td class="Nom">Dupont Max</td>
                    <td class="Note">13</td>
                    <td class="Modif" onclick="window.location.href = '../PageEtudiant/PageEtudiant.php';"><button class="BoutonModif">Voir</button></td>
                    <td class="Modif"><i class="fa-solid fa-download"></i></td>
                </tr>
            </table>
        </div>
        <div>
		    <?php include('../pied_de_page.php'); ?>
		</div>
    </body>
</html>