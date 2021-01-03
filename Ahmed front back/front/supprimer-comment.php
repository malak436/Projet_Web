<?php
include '../front_malak/ForumM.php';

$var2=new ForumManage();
$var2->supprimerComment($_GET['id'],$_GET['id_post']);
?>