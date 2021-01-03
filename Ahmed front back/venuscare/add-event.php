<?php
require "connexion.php";

if(isset($_POST['ajouter']))
{

if(isset($_POST['titre'])) $titre= utf8_decode($_POST['titre']); 
if(isset($_POST['categorie'])) $categorie= utf8_decode($_POST['categorie']); 
if(isset($_POST['description'])) $description= utf8_decode($_POST['description']);
if(isset($_POST['participants'])) $participants= utf8_decode($_POST['participants']); 
if(isset($_POST['dated'])) $dated= utf8_decode($_POST['dated']); 
if(isset($_POST['datef'])) $datef= utf8_decode($_POST['datef']); 
if(isset($_POST['lieu'])) $lieu= utf8_decode($_POST['lieu']); 
if(isset($_POST['image'])) $image= utf8_decode($_POST['image']); 

     try{
    $query=$pdo->prepare("select * FROM event where titre='$titre' and datedebut='$dated' and lieu='$lieu'");
    $query->execute();
$number=$query->fetchColumn();}
     catch(PDOExcxeption $e) {$e->getMessage();}
    if($number!=0)
     {
         ?>
         <script type="text/javascript">alert("Cet èvènement existe dèja"); window.history.back();</script>   
         <?php   
               }
     else {                        
             try{
                  $query = $pdo->prepare(
            "INSERT INTO event (id,titre,description,nbrparticipants,lieu,datedebut,datefin,img,nbrevue,idcat)  values (default,?,?,?,?,?,?,?,0,?)"
           );
            
            $query->execute(
                array($titre,$description,$participants,$lieu,$dated,$datef,$image,$categorie)
            );
        }
            catch (PDOException $e) {

                $e->getMessage();
            }
            header('Location:listeevent.php');
            ?>
           
            <?php
        }
               
}


?>
<!DOCTYPE html>
<html lang="fr">


<!-- add-expense24:07-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Ajouter evénement</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
      <link rel="stylesheet" type="text/css" href="style.css">
   <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css">-->
    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
   <script type="text/javascript">
        function compareDates() {
        //Get the text in the elements
        var from = document.getElementById('dated').value;
        var to = document.getElementById('datef').value;

        //Generate an array where the first element is the year, second is month and third is day
        var splitFrom = from.split('/');
        var splitTo = to.split('/');

        //Create a date object from the arrays
        var fromDate = new Date(splitFrom[0] , splitFrom[1]-1 , splitFrom[2]);
        var toDate = new Date(splitTo[0] ,  splitTo[1]-1 , splitTo[2]);

        //Return the result of the comparison
        return fromDate < toDate;
    }
    function verif()
    {
  
       
       
        if (compareDates()==false ) 
            {alert("Dates invalides");
                        return false;
            }
            else{
                return true;
            }
        
        
        
    }
   </script> 
</head>

<body>
    <div class="main-wrapper">
       
        <?php include("header.php") ?>

              <?php include("sidebar.php") ?>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <h4 class="page-title">Ajouter un événement</h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                    	<!--   Formulaire Ajouter Evénement -->
                        <form id = "f-event" onsubmit="verif();" name="form_event" action="add-event.php" method="POST">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Titre</label>
                                        <input name="titre"class="form-control" type="text" required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea name="description" class="form-control" rows="4" required="true" > </textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nombre de Participants</label>
                                        <input name="participants" class="form-control" type="Number" min="0" >
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Catégorie</label>
                                        <select name ="categorie" class="select" required="true" >
                                            <?php
                                            try{
                                                $query=$pdo->prepare(
                                                'select * FROM categorie'
                                            );
                                            $query->execute();
                                            $result = $query->fetchAll();
                                        } catch(PDOExcxeption $e) {
                                            $e->getMessage();
                                        }
                                        foreach ($result as $row) {
                                            echo "ok";
                                        ?>
                                        <option value=<?php echo $row['idcat']; ?>><?php echo utf8_decode($row['libelle_cat']); ?></option>
                                          <?php     
                                           }
                                            ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date de début</label>
                                        <div class="cal-icon">
                                            <input id="dated" name="dated" class="form-control datetimepicker" placeholder="dd/mm/yy" type="text" required="true" >
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Date de fin </label>
                                       <div class="cal-icon">
                                            <input id="datef" name="datef" class="form-control datetimepicker" placeholder="dd/mm/yy" type="text" required="true">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Lieu</label>
                                        <input name="lieu" class="form-control" type="text" required="true">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Poster</label>
                                        <input name="image" class="form-control" type="file" accept="image/png, image/jpeg, image/jpg" required="true">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="m-t-20 text-center">
                                <input type="submit"  name="ajouter"  value="Créer un événement">
                            </div>
                        </form>
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
    </div>
    <div class="sidebar-overlay" data-reff=""></div>
    <script src="assets/js/jquery-3.2.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
	<script src="assets/js/moment.min.js"></script>
	<script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- add-expense24:07-->
</html>
