<?PHP
include "../entities/patient.php";
include "../core/patientD.php";

if (isset($_POST['Cin'])  and isset($_POST['Nom']) and isset($_POST['Prenom'])and isset($_POST['Adresse']) and isset($_POST['Pass'])){
$Patient1=new Patient($_POST['Cin'],$_POST['Nom'],$_POST['Prenom'],$_POST['Adresse'],$_POST['Pass']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$Patient1D=new PatientD();
$Patient1D->ajouterPatient($Patient1);
 header('Location:patient.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>