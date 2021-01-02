<?php

require_once "C:/wamp64/www/venus curae/controller/missionC.php";

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
    <a id="toggle_btn" href="javascript:void(0);"><i class="fa fa-bars"></i></a>
    <a id="mobile_btn" class="mobile_btn float-left" href="#sidebar"><i class="fa fa-bars"></i></a>
    <ul class="nav user-menu float-right">
        <li class="nav-item dropdown d-none d-sm-block">
            <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown"><i class="fa fa-bell-o"></i> <span class="badge badge-pill bg-danger float-right">3</span></a>
            <div class="dropdown-menu notifications">
                <div class="topnav-dropdown-header">
                    <span>Notifications</span>
                </div>
                <div class="drop-scroll">
                    <ul class="notification-list">
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
											<span class="avatar">
												<img alt="John Doe" src="assets/img/user.jpg" class="img-fluid">
											</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                        <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">V</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                        <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">L</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                        <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">G</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                        <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="notification-message">
                            <a href="activities.html">
                                <div class="media">
                                    <span class="avatar">V</span>
                                    <div class="media-body">
                                        <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                        <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                    </div>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="topnav-dropdown-footer">
                    <a href="activities.html">View all Notifications</a>
                </div>
            </div>
        </li>
        <li class="nav-item dropdown d-none d-sm-block">
            <a href="javascript:void(0);" id="open_msg_box" class="hasnotifications nav-link"><i class="fa fa-comment-o"></i> <span class="badge badge-pill bg-danger float-right">8</span></a>
        </li>
        <li class="nav-item dropdown has-arrow">
            <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="assets/img/user.jpg" width="24" alt="Admin">
							<span class="status online"></span>
						</span>
                <span>Admin</span>
            </a>
            <div class="dropdown-menu">
                <a class="dropdown-item" href="profile.html">My Profile</a>
                <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
                <a class="dropdown-item" href="settings.html">Settings</a>
                <a class="dropdown-item" href="login.html">Logout</a>
            </div>
        </li>
    </ul>
    <div class="dropdown mobile-user-menu float-right">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="profile.html">My Profile</a>
            <a class="dropdown-item" href="edit-profile.html">Edit Profile</a>
            <a class="dropdown-item" href="settings.html">Settings</a>
            <a class="dropdown-item" href="login.html">Logout</a>
        </div>
    </div>
</div>
<!-- side bar -->
<?php require_once "sidebar.php"; ?>
<div class="page-wrapper">
    <div class="content">
        <div class="row">
            <div class="col-sm-4 col-3">
                <h4 class="page-title">liste mission</h4>
            </div>
            <div class="col-sm-8 col-9 text-right m-b-20">
                <a href="ajout_mission.php" class="btn btn btn-primary btn-rounded float-right"><i class="fa fa-plus"></i> Ajouter mission</a>
            </div>
        </div>
        <div claa="form-group">
<form method="get" action="listemission.php"  class="mb-4">
<input type="text" class="form-control" name="recherche" placeholder="volontaire">
<input type="submit" class="btn btn-primary"  value="Chercher">
</form>
</div>
        <div class="row">
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="table table-striped custom-table">
                        <?php
                      
                        $besoin=new missionC();
                       // $listebesoin=$besoin->affichermission();
                        //$listebesoin=$besoin->sortv();
                        ?>
                        <?php
                        // pagination 
                        

//pagination

$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$perpage = isset($GET['per-page']) && $_GET['per-page'] <= 50 ? (int)$_GET['per-page'] : 5;

//echo $page;
//echo $perpage;


$listebesoin = $besoin->AffichermPaginer($page, $perpage);
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
                     
                            <th>id mission </th>
                            <th>type de mission</th>
                            <th>nombre de mission</th>

                            <th class="text-right">Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        <tr>
                            <?php
                            foreach($listebesoin as $row){
                            ?>
                        
                            <td><?php
                                echo $row['idtypemiss']
                                ?></td>
                            <td><?php
                                echo $row['mission']
                                ?></td>


                            <td><?php
                                echo $row['nombremiss']
                                ?></td>

                            </td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="modifier_mission.php?idtypemiss=<?PHP echo $row['idtypemiss'];?>"> 
                                        <i class="fa fa-pencil m-r-5"></i> modifier</a>
                                        <form method="post" action="supprimermiss.php">
                                            <input class="btn btn-danger" type="submit" value="supprimer">
                                            <input  type="hidden" value="<?PHP echo $row['idtypemiss']; ?>" name="idtypemiss">
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