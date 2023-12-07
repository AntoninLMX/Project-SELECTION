<?php
    session_start(); // Permettra de récupérer l'id de l'utilisateur qui se connecte

    // Connexion à la base de données
    function connexion()
    {
        try {
            $conn = new PDO("mysql:host=localhost;dbname=monsiteweb", "root", "root");
            return $conn;
        } catch (Exception $e) {
            die("Erreur " . $e->getMessage());
        }
    }
    // Fonction pour un select
    function select($req)
    {
        $cnx = connexion();
        $requete = $cnx->prepare($req);
        $requete->execute();
        $resultat = $requete->fetchAll(PDO::FETCH_ASSOC);
        return $resultat;
    }
    // Fonction pour Insert, Update ou Delete
    function execute($req)
    {
        $cnx = connexion();
        $cnx -> exec($req);
    }

    $login_cred = select("SELECT * FROM personnels;");

    if (isset($_POST["email"])){
        $ident = htmlspecialchars($_POST["email"]);
        $passwd = htmlspecialchars($_POST["mot_de_passe"]);
        $verif = FALSE;
        $redirection = "index.php";
        
        foreach($login_cred as $v){
            if ($ident == $v["email"] && $passwd == $v["mot_de_passe"]){
                $verif = TRUE; //Personnels et mot de passe corrects
                $_SESSION["id_personnels"] = $v["id"];
                $_SESSION["type_personnels"] = $v["profession"];
                if ($v["profession"] == "Administrateur"){$redirection = "..\MonSiteWeb\PageClassementAdministrateurs\PageClassementAdministrateurs.php";}
                elseif ($v["profession"] == "Evaluateur"){$redirection = "..\MonSiteWeb\PageClassementEvaluateurs\PageClassementEvaluateurs.php";}
                elseif ($v["profession"] == "Secretaire"){$redirection = "..\MonSiteWeb\PageClassementSecretaire\PageClassementSecretaire.php";}
                header("Location:". $redirection);
            }
        }
        if($verif == FALSE){
            echo("Personnels ou mot de passe incorrects");
            header("Location:". $redirection);
        }
    }
?>