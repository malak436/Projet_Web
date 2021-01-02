<?php
include 'C:/wamp64/www/venus curae/model/miss.php'; 
include 'C:/wamp64/www/venus curae/controller/missionC.php';

if (isset($_POST['idtypemiss']) ){

    $missionC= new  missionC();
    $mission= new mission($_POST['idtypemiss'],$_POST['mission'],$_POST['nombremiss']
    );

    $missionC->ajoutermission($mission);
    header('Location: listemission.php');
//var_dump($besoin);
}


?>


?>