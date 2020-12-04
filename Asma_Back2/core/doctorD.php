<?php
include "../config.php";
class DoctorD
{
    function ajouterDoctor($DoctorD){
		$sql="insert into doctor (CIN,NOM,PRENOM,SPECIALITE,PASS,SALAIRE) values (:Cin,:Nom,:Prenom,:Specialite,:Pass,:Salaire)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$Cin=$DoctorD->getCin();
		$Nom=$DoctorD->getNom();
		$Prenom=$DoctorD->getPrenom();
		$Specialite=$DoctorD->getSpecialite();
		$Pass=$DoctorD->getPass();
		$Salaire=$DoctorD->getSalaire();
		

		$req->bindValue(':Cin',$Cin);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Specialite',$Specialite);
		$req->bindValue(':Pass',$Pass);
		$req->bindValue(':Salaire',$Salaire);
		


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

	function afficherDoctor(){
		$sql="SElECT * From doctor";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerDoctor($Cin){
		$sql="DELETE FROM doctor where  CIN=:Cin";
		$db = config::getConnexion();
        $req=$db->prepare($sql);
		$req->bindValue(':Cin',$Cin);
		try{
            $req->execute();
          header('Location: utilisateurs.php');
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
	}
	function modifierDoctor($DoctorD,$Cin){
		$sql="UPDATE doctor SET  CIN=:Cin,NOM=:Nom,PRENOM=:Prenom,Specialite=:Specialite,PASS=:Pass,SALAIRE=:Salaire WHERE CIN=:Cin";
		
		$db = config::getConnexion();
		try{		
		$req=$db->prepare($sql);
		$Cin=$DoctorD->getCin();
		$Nom=$DoctorD->getNom();
		$Prenom=$DoctorD->getPrenom();
		$Specialite=$DoctorD->getSpecialite();
		$Pass=$DoctorD->getPass();
		$Salaire=$DoctorD->getSalaire();
       

	

		$datas = array(':Cin'=>$Cin,':Nom'=>$Nom, ':Prenom'=>$Prenom, ':Specialite'=>$Specialite,':Pass'=>$Pass,':Salaire'=>$Salaire);
		$req->bindValue(':Cin',$Cin);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Specialite',$Specialite);
		$req->bindValue(':Pass',$Pass);
		$req->bindValue(':Salaire',$Salaire);

		
		
            $s=$req->execute();
			
           // header('Location: index.php');
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }



}
function recupererDoctor($Cin){
	$sql="SELECT * from  doctor where CIN=$Cin";
	$db = config::getConnexion();
	try{
	$liste=$db->query($sql);
	return $liste;
	}
	catch (Exception $e){
		die('Erreur: '.$e->getMessage());
	}
}


}


?>