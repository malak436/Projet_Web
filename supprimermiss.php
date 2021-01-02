<?PHP
include "C:/wamp64/www/venus curae/controller/missionC.php";

$missionC=new missionC();
if (isset($_POST["idtypemiss"])){
    $missionC->supprimermission($_POST["idtypemiss"]);

    header('Location: listemission.php');
}

?>