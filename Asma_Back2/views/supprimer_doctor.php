<?PHP
include "../core/doctorD.php";
$doctorD=new DoctorD();
if (isset($_POST["Cin"])){
	$doctorD->supprimerDoctor($_POST["Cin"]);
	header('Location: doctor.php');
}
else 
echo "prob";

?>