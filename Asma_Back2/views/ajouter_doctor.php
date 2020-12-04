<?PHP
include "../entities/doctor.php";
include "../core/doctorD.php";

if (isset($_POST['Cin'])  and isset($_POST['Nom']) and isset($_POST['Prenom'])and isset($_POST['Specialite']) and isset($_POST['Pass']) and isset($_POST['Salaire'])){
$Doctor1=new Doctor($_POST['Cin'],$_POST['Nom'],$_POST['Prenom'],$_POST['Specialite'],$_POST['Pass'],$_POST['Salaire']);
//Partie2
/*
var_dump($employe1);
}
*/
//Partie3
$Doctor1D=new DoctorD();
$Doctor1D->ajouterDoctor($Doctor1);
 header('Location:doctor.php');
	
}else{
	echo "vérifier les champs";
}
//*/

?>