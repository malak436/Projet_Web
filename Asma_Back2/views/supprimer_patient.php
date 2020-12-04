<?PHP
include "../core/patientD.php";
$PatientD=new PatientD();
if (isset($_POST["Cin"])){
	$PatientD->supprimerPatient($_POST["Cin"]);
	header('Location: patient.php');
}
else 
echo "prob";

?>