<?php
session_start();

function connexion(){
    try{
        $cnx = new PDO('mysql:host=localhost;dbname=monsiteweb','root','root');
    }
    catch (Exception $e){
        die('Erreur : ' . $e->getMessage());
    }
    return $cnx;
}

if (isset($_POST["email"])){
    $ident = htmlspecialchars($_POST["email"]);
    $passwd = htmlspecialchars($_POST["mot_de_passe"]);
    $verif = FALSE;
    $redirection = "index.php";
    
    $cnx = connexion();
    $requete = $cnx->prepare("SELECT * FROM personnels WHERE email = :email");
    $requete->execute(['email' => $ident]);
    $user = $requete->fetch(PDO::FETCH_ASSOC);

    if ($user && password_verify($passwd, $user["mot_de_passe"])){
        $verif = TRUE; //Personnels et mot de passe corrects
        $_SESSION["id_personnels"] = $user["id"];
        $_SESSION["type_personnels"] = $user["profession"];
        if ($user["profession"] == "Administrateur"){$redirection = "..\MonSiteWeb\PageClassementAdministrateurs\PageClassementAdministrateurs.php";}
        elseif ($user["profession"] == "Evaluateur"){$redirection = "..\MonSiteWeb\PageClassementEvaluateurs\PageClassementEvaluateurs.php";}
        elseif ($user["profession"] == "Secretaire"){$redirection = "..\MonSiteWeb\PageClassementSecretaire\PageClassementSecretaire.php";}
        header("Location:". $redirection);
    }
    if($verif == FALSE){
        echo("Personnels ou mot de passe incorrects");
        header("Location:". $redirection);
    }
}
?>