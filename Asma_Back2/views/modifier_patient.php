




<HTML>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>ADMIN </title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
    integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
    integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
    integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
    crossorigin="anonymous"></script>

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link
    href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
    rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

  <!-- Custom styles for this page -->
  <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
  <link href="oxygym.css" rel="stylesheet">

  <script src="patient_modif.js"></script>


</head>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

       
        <div class="container-fluid">

          <!-- Page Heading -->
          <h1 class="h3 mb-2 text-gray-800" style="text-align:center">Modifier Docteur</h1>

          <!-- DataTales Example -->
          <div class="card shadow mb-4">

            <div class="card-body">
			<div >
                  <div>
                    <div >
                      <div >
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
					  <div class="modal-body mx-3"><?PHP
ob_start();
include "../entities/patient.php";
include "../core/patientD.php";
if (isset($_GET['Cin'])){
	$PatientD=new PatientD();
    $result=$PatientD->recupererPatient($_GET['Cin']);
	foreach($result as $row){
		$Cin=$row['CIN'];
		$Nom=$row['NOM'];
    $Prenom=$row['PRENOM'];
    $Adresse=$row['ADRESSE'];
    $Pass=$row['PASS'];
        ?>
        
    <form name="formmodifPatient" onsubmit="return modifier_Patient()" method="POST" action="modifier_Patient.php?cin=<?PHP echo $row['CIN']; ?>" >
						
					<div class="form-group">
					<label>CIN</label>
					<input type="hcinden" class="form-control" name="id_ini" value="<?PHP echo $_GET['Cin'];?>" rows="10" >
					</div>
						  <div class="form-group">
						<label>NOM</label>
						<input name="Nom" value="<?PHP echo $Nom?>" class="form-control"  id="Nom" placeholder=" Nom" rows="10" type="text" >
					</div>
          <div class="form-group">
						<label>PRENOM</label>
						<input value="<?PHP echo $Prenom?>" class="form-control" name="Prenom" id="Prenom" placeholder=" Prenom" rows="10" type="text" >
          </div>
          <div class="form-group">
						<label>Adresse</label>
						<input value="<?PHP echo $Adresse?>" class="form-control" name="Adresse" id="Adresse" placeholder=" Adresse" rows="10" type="text" >
					</div>
          <div class="form-group">
						<label>Pass</label>
						<input value="<?PHP echo $Pass?>" class="form-control" name="Pass" id="Pass" placeholder="Pass" rows="10" type="text" >
					</div>
          
					
					
					
					

					<button  name="modifier" class="ajouter">modifier</button>


                            
                           
                           
                           
                          
						</form><?PHP }}

if (isset($_POST['modifier'])){

	$Patient1=new PatientD();


	$Patient=new Patient($_POST['id_ini'],$_POST['Nom'],$_POST['Prenom'],$_POST['Adresse'],$_POST['Pass']);
	$Patient1->modifierPatient($Patient,$_POST['id_ini']);

	echo $_POST['id_ini'];
	header('Location:Patient.php');
} ob_end_flush();?>
</div>
                      <div class="modal-footer d-flex justify-content-center">
                        
                      </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <footer class="sticky-footer bg-white">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
          </div>
        </div>
      </footer>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="login.html">Logout</a>
        </div>
      </div>
    </div>
  </div>






</body>




