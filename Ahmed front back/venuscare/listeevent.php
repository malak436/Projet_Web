<!DOCTYPE html>
<html lang="en">

<?php
require "connexion.php";
 try{

        $query=$pdo->prepare('select * FROM event order by id ASC');
        $query->execute();
                                            
    } catch(PDOExcxeption $e) {$e->getMessage();}
$eff=0;
$id=-1;
$rech = 0;
if(isset($_GET['rech'])){$rech=$_GET["rech"];}
if(isset($_GET['id'])){$id=$_GET["id"];}
if(isset($_GET['eff'])){$eff=$_GET["eff"];}
if (($id != -1) && ($eff==1))
{
    try{
                  $query = $pdo->prepare(
            "DELETE from  event where id = ? "
           );
            
            $query->execute(
                array($id)
            );
        }
            catch (PDOException $e) {

                $e->getMessage();
            }
            ?>
            <script type="text/javascript">alert("Evénement supprimé avec succès");</script>

            <?php
            header('Location:listeevent.php');
}
$titre="";
$dated="";
$tri = "id";
if ($rech==1)
{

if(isset($_POST['titre'])){$titre=$_POST["titre"];}
if(isset($_POST['dated'])){$dated=$_POST["dated"];}
if(isset($_POST['tri'])){$tri=$_POST["tri"];}

if (($titre != "") && ($dated!=""))
{
    
     try{

        $query=$pdo->prepare("select * FROM event where datedebut=? and titre like ? order by $tri ASC");
        $query->execute(array($dated,"%$titre%"));
                                            
    } catch(PDOExcxeption $e) {$e->getMessage();}
}
else if ($titre != "")
{
    
     try{

        $query=$pdo->prepare("select * FROM event where titre like ? order by $tri ASC");
        $query->execute(array("%$titre%"));
                                            
    } catch(PDOExcxeption $e) {$e->getMessage();}
}
else if  ($dated!="")
{
    
     try{

        $query=$pdo->prepare('select * FROM event where datedebut= ? order by $tri ASC');
        $query->execute(array($dated));
                                            
    } catch(PDOExcxeption $e) {$e->getMessage();}
}
else
{
     try{

        $query=$pdo->prepare("select * FROM event ORDER BY $tri ASC");
        $query->execute();
                                            
    } catch(PDOExcxeption $e) {$e->getMessage();}
}

}




?>
<!-- taxes23:26-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    
    <div class="main-wrapper">
        <?php include("header.php") ?>

              <?php include("sidebar.php") ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-5 col-8">
                        <h4 class="page-title">Evénement</h4>
                    </div>
                    <div class="col-sm-14 col-50 text-right m-b-20">
                        <a href="http://localhost/venuscare/add-event.php" class="btn btn-primary btn-rounded"><i class="fa fa-plus"></i> Ajouter èvènement</a>
                    </div>
                    
                    
                </div>
                 <form name="recherche" action="listeevent.php?rech=1" method="POST">
                 <div class="row filter-row">
                   
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Date</label>
                            <div class="cal-icon">
                                <input class="form-control floating datetimepicker" name ="dated" type="text" value="<?php echo $dated ; ?>">
                            </div>
                        </div>                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus">
                            <label class="focus-label">Titre</label>
                                <div class="cal-icon1">
                                <input class="form-control floating" name="titre" type="text" value="<?php echo $titre ; ?>">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <div class="form-group form-focus select-focus focused">
                            <label class="focus-label">Trier par</label>
                            <select class="select floating select2-hidden-accessible" name="tri" tabindex="-1" aria-hidden="true">
                                <option value ="id" <?php if ($tri=="id") { ?>selected="true" <?php } ?>>Id événement</option>
                                <option value ="titre"  <?php if ($tri=="titre") { ?>selected="true" <?php } ?>>Titre</option>
                                <option  value="nbrparticipants" <?php if ($tri=="nbrparticipants") { ?>selected="true" <?php } ?>>Nombre participants</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <input type="submit" class="btn btn-success btn-block" value="Rechercher">
                    </div>
              
                </div>
                  </form>
                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table table-striped custom-table mb-0">
                                <thead>
                                    <tr>
                                        
                                        <th>ID de l'èvènement </th>
                                        <th>Titre </th>
                                        <th>Description</th>
                                        <th>Nombre de participants</th>
                                        <th>Lieu</th>
                                        <th>Date de début</th>
                                        <th>Date de fin</th>
                                        <th>Nombre de vues</th>
                                        <th class="text-right">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                       <?php
                                            try{

                                              
                                            $result = $query->fetchAll();
                                        } catch(PDOExcxeption $e) {
                                            $e->getMessage();
                                        }
                                        foreach ($result as $row) {
                                          
                                        ?>
                                        <tr>
                                        
                                          <td><?php echo utf8_decode($row['id']); ?></td>
                                       <td><?php echo utf8_decode($row['titre']); ?></td>
                                        <td><?php echo utf8_decode($row['description']); ?></td>
                                        <td><?php echo utf8_decode($row['nbrparticipants']); ?></td>
                                        <td><?php echo utf8_decode($row['lieu']); ?></td>
                                        <td><?php echo utf8_decode($row['datedebut']); ?></td>
                                       <td><?php echo utf8_decode($row['datefin']); ?></td>
                                        <td><?php echo utf8_decode($row['nbrevue']); ?></td>
                                           

                                        
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="http://localhost/venuscare/edit-event.php?id=<?php echo utf8_decode($row['id']); ?>&maj=0"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                                    <a class="dropdown-item" href="http://localhost/venuscare/listeevent.php?id=<?php echo utf8_decode($row['id']); ?>&eff=1" data-toggle="modal" data-target=""> <i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                          <?php     
                                           }
                                            ?>
                                    
                                 
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="notification-box">
                <div class="msg-sidebar notifications msg-noti">
                    <div class="topnav-dropdown-header">
                        <span>Messages</span>
                    </div>
                    <div class="drop-scroll msg-list-scroll" id="msg_list">
                        <ul class="list-box">
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Richard Miles </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item new-message">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">John Doe</span>
                                            <span class="message-time">1 Aug</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Tarah Shropshire </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Mike Litorus</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Catherine Manseau </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">D</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Domenic Houston </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">B</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Buster Wigton </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">R</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Rolland Webber </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">C</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author"> Claire Mapes </span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">M</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Melita Faucher</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">J</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Jeffery Lalor</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">L</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Loren Gatlin</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="chat.html">
                                    <div class="list-item">
                                        <div class="list-left">
                                            <span class="avatar">T</span>
                                        </div>
                                        <div class="list-body">
                                            <span class="message-author">Tarah Shropshire</span>
                                            <span class="message-time">12:28 AM</span>
                                            <div class="clearfix"></div>
                                            <span class="message-content">Lorem ipsum dolor sit amet, consectetur adipiscing</span>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="chat.html">See all messages</a>
                    </div>
                </div>
            </div>
        </div>
		<div id="delete_tax" class="modal fade delete-modal" role="dialog">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<div class="modal-body text-center">
						<img src="assets/img/sent.png" alt="" width="50" height="46">
						<h3>Are you sure want to delete this Tax?</h3>
						<div class="m-t-20"> <a href="#" class="btn btn-white" data-dismiss="modal">Close</a>
							<a href="http://localhost/venuscare/listeevent.php?id=<?php echo utf8_decode($row['id']); ?>" class="btn btn-danger">Delete</a>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
   
     <script src="assets/js/jquery-3.2.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- taxes23:27-->
</html>