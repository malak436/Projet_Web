<?php

require_once "C://wamp64/www/venus curae/controller/volBC.php";

?>

<!DOCTYPE html>
<html lang="en">


<!-- index22:59-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>

<body>
<div class="header">
    <div class="header-left">
        <a href="index-2.php" class="logo">
            <img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Venus Curae</span>
        </a>
    </div>
<!-- side bar -->
<?php require_once "sidebar.php"; ?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">Liste volontaire</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="ajouter_voli.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Ajouter volontaire</a>
            </div>
        </div>
    


<div claa="form-group">
<form method="get" action="liste_vol.php"  class="mb-4">
<input type="text" class="form-control" name="recherche" placeholder="volontaire">
<input type="submit" class="btn btn-primary"  value="Chercher">
</form>
</div>

        <div class="row">
            <div class="col-md-9">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <?php
                        //include"C://wamp64/www/venus curae/controller/config.php";
                        $besoin=new volBC();
                       // $listebesoin=$besoin->affichervol();
                       // $listebesoin=$besoin->sortv();


                           ?>
                           <?php
                           // pagination 
                           

//pagination

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 5;

//echo $page;
//echo $perpage;


$listebesoin = $besoin->AfficherPaginer($page, $perpage);
$totalP = $besoin->calcTotalRows($perpage);

// end pagination 
                           ?>

<?php 

                        if(isset($_GET['recherche']))
                       {
                        $search_value=$_GET["recherche"];
                        
                        $listebesoin= $besoin->recherche($search_value);
                        }

                       
                        ?>
                        <thead>
                        <tr>
                            <th>idvol</th>
                            <th>Nom</th>
                            <th>prenom</th>
                            <th>email</th>
                            <th>tel</th>
                            <th>type de mission</th>
                        

                            <th class="text-right">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <?php
                            foreach($listebesoin as $row){
                            ?>
                            <td>
                          
                          <?php
                                echo $row['idvol']
                                ?></td>

                          <td>
                          
                          <?php
                                echo $row['nom']
                                ?></td>

                           

                            <td><?php
                                echo $row['prenom']
                                ?></td>


                            
                            <td><?php
                                echo $row['email']
                                ?></td>

                            
                            <td><?php
                                echo $row['tel']
                                ?></td>

                            
                            <td><?php
                                echo $row['typemiss']
                                ?></td>

                

                              <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="modifier_volontaire.php?idvol=<?PHP echo $row['idvol'];?>">
                                        <i class="fa fa-pencil m-r-5"></i> modifier</a>
                                        <form method="post" action="suprimervol.php">
                                            <input class="btn btn-danger" type="submit" value="supprimer">
                                            <input  type="hidden" value="<?PHP echo $row['idvol']; ?>" name="idvol">
                                        </form>


                                    </div>
                                </div>
                            </td>
                            
                        </tr>
                        <?PHP
                        }
                        ?>
                        </tbody>
                    </table>
                   <!--pagination begin-->
                   <?php

// }
for ($x = 1; $x <= $totalP; $x++) :

?>

    <a class="paginate_button page-item" href="?page=<?php echo $x; ?>&per-page=<?php echo $perpage; ?>"><?php echo $x; ?></a>

<?php endfor; ?>
<!--pagination end-->
                </div>
            </div>
        </div>
    </div>
</div>







<div class="sidebar-overlay" data-reff=""></div>
<script src="assets/js/jquery-3.2.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/Chart.bundle.js"></script>
<script src="assets/js/chart.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>