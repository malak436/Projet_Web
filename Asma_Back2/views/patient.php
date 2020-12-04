<!DOCTYPE html>
<html lang="en">


<!-- patients23:17-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">
    <title>Preclinic - Medical & Hospital - Bootstrap 4 Admin Template</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">

    <script src="patient.js"></script>

    <!--[if lt IE 9]>
		<script src="assets/js/html5shiv.min.js"></script>
		<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
    <div class="main-wrapper">
        <div class="header">
			<div class="header-left">
				<a href="index.html" class="logo">
					<img src="assets/img/logo.png" width="35" height="35" alt=""> <span>Preclinic</span>
				</a>
			</div>
          
           
        </div>
        <div class="sidebar" id="sidebar">
            <div class="sidebar-inner slimscroll">
                <div id="sidebar-menu" class="sidebar-menu">
                    <ul>
                        <li>
                            <a href="doctor.php"><i class="fa fa-wheelchair"></i> <span>Docteurs</span></a>
                        </li>
                        <li>
                            <a href="patient.php"><i class="fa fa-wheelchair"></i> <span>Patients</span></a>
                        </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="page-wrapper">
            <div class="content">
                <div class="row">
                    <div class="col-sm-4 col-3">
                        <h4 class="page-title">Patients</h4>
                    </div>
                    
                </div>
				<div class="row">
					<div class="col-md-12">
						<div class="table-responsive">
							<table class="table table-border table-striped custom-table ">
								<thead>
									<tr>
										<th>CIN</th>
										<th>NOM</th>
										<th>PRENOM</th>
										<th>Adresse</th>
                    <th>Pass</th>

									</tr>
								</thead>
								<tbody>
                <?PHP
				   include "../core/patientD.php";
					 $Patient1D=new PatientD();
					 $listePatient=$Patient1D->afficherPatient();
foreach($listePatient as $row){
  ?>
	<tr>
  <td><?PHP echo $row['CIN']; ?></td>
	<td><?PHP echo $row['NOM']; ?></td>
  <td><?PHP echo $row['PRENOM']; ?></td>
  <td><?PHP echo $row['ADRESSE']; ?></td>
	<td><?PHP echo $row['PASS']; ?></td>
	
 
  <td><form method="POST" action="supprimer_Patient.php">
  <button type="submit" name="supprimer" value="supprimer" class="ajouter">Supprimer</button>
	<input type="hidden" value="<?PHP echo $row['CIN']; ?>" name="Cin">
	</form>
	</td>
  

	 <td><a href="modifier_Patient.php?Cin=<?PHP echo $row['CIN']; ?>"> 
	<button class="ajouter">Modifier</button></a></td>

</tr>
<?PHP
}
?>
									
								</tbody>
                            </table>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPoll-1">Ajouter 
                                un Patient</button>
                              
                              <!-- Modal: modalPoll -->
                              <div class="modal fade right" id="modalPoll-1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                                aria-hidden="true" data-backdrop="false">
                                <div class="modal-dialog modal-full-height modal-right modal-notify modal-info" role="document">
                                  <form name="formajoutPatient" onsubmit="return ajouter_Patient()" method="POST" action="ajouter_Patient.php">

                                  <div class="modal-content">
                                    <!--Header-->
                                    <div class="modal-header">
                                      <p class="heading lead">Ajouter Un Patient
                                      </p>
                              
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true" class="white-text">×</span>
                                      </button>
                                    </div>
                              
                                    <!--Body-->
                                    <div class="modal-body">

                                      
                              
                                      
                                      <!--Basic textarea-->
                                      <div class="md-form">
                                        <label for="form79textarea">CIN</label>
                                        <input  name="Cin" type="text" id="form79textarea" class="md-textarea form-control" rows="3">
                                      </div>
                                      
                                      <div class="md-form">
                                        <label for="form79textarea">Nom</label>
                                        <input name="Nom" type="text" id="form79textarea" class="md-textarea form-control" rows="3">
                                      </div>
                                      
                                      <div class="md-form">
                                        <label for="form79textarea">Prenom</label>
                                        <input name="Prenom" type="text" id="form79textarea" class="md-textarea form-control" rows="3">
                                      </div>
                                      
                                      <div class="md-form">
                                        <label for="form79textarea">Adresse</label>
                                        <input name="Adresse" type="text" id="form79textarea" class="md-textarea form-control" rows="3">
                                      </div>
                                      
                                      <div class="md-form">
                                        <label for="form79textarea">Password</label>
                                        <input name="Pass" type="password" id="form79textarea" class="md-textarea form-control" rows="3">
                                      </div>
                                      
                                    </div>
                              
                                    <!--Footer-->
                                    <div class="modal-footer justify-content-center">
                                      <button  class="btn btn-primary waves-effect waves-light">Ajouter
                                      </button>

                                      <a type="button" class="btn btn-outline-primary waves-effect" data-dismiss="modal">Quitter</a>
                                    </form>

                                    </div>
                                  </div>
                                </div>
                              </div>
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
    <script src="assets/js/jquery.slimscroll.js"></script>
    <script src="assets/js/select2.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
    <script src="assets/js/moment.min.js"></script>
    <script src="assets/js/bootstrap-datetimepicker.min.js"></script>
    <script src="assets/js/app.js"></script>
</body>


<!-- patients23:19-->
</html>