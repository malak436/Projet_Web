<?php
include "C:/wamp64/www/venus curae/model/volB.php";
include "C:/wamp64/www/venus curae/controller/volBC.php";

$VC = new volBC();
if (
    isset($_POST["nom"]) &&
    isset($_POST["prenom"]) &&
    isset($_POST["tel"]) &&
    isset($_POST["email"])&&
    isset($_POST["typemiss"])

) {
    if (
        !empty($_POST["nom"]) &&
        !empty($_POST["prenom"]) &&
        !empty($_POST["tel"]) &&
        !empty($_POST["email"]) &&
        !empty($_POST["typemiss"]) 

    ) {
        $voyage = new volontaire(
            
            $_POST['nom'],
            $_POST['prenom'],
            $_POST['tel'],
            $_POST['email'],
            $_POST['typemiss']
            
        );
        $VC->ajoutervolantar($voyage);
       header('location:liste_vol.php');
       // var_dump( $voyage);
        //console.log($voyage);
    } else
       // header('location:listeVoyage.php');
    echo "problem !!";
}

?>



?>