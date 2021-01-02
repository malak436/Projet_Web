<?php
include "C:/wamp64/www/venus curae/model/volont.php";
include "C://wamp64/www/venus curae/controller/volD.php";

if (isset($_POST['CIN']) ){
    
    $volD = new  volD();
    $volD = new volontaire($_POST['CIN'],$_POST['NOM'],$_POST['PRENOM'],$_POST['TEL'],$_POST['typemiss']
);

$volD->ajoutervolantaire($volD);
header('Location: consulterclient.php');

    }


?>