<?PHP
include "C://wamp64/www/venus curae/controller/volBC.php";

$volBC=new volBC();
if (isset($_POST["idvol"])){
    $volBC->supprimer($_POST["idvol"]);

    header('Location: liste_vol.php');
}

?>