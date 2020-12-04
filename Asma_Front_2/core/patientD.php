<?php
include "../config.php";
class PatientD
{
    function ajouterPatient($PatientD){
		$sql="insert into Patient (CIN,NOM,PRENOM,ADRESSE,PASS) values (:Cin,:Nom,:Prenom,:Adresse,:Pass)";
		$db = config::getConnexion();
		try{
        $req=$db->prepare($sql);
		$Cin=$PatientD->getCin();
		$Nom=$PatientD->getNom();
		$Prenom=$PatientD->getPrenom();
		$Adresse=$PatientD->getAdresse();
		$Pass=$PatientD->getPass();
		

		$req->bindValue(':Cin',$Cin);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Pass',$Pass);
		


		
            $req->execute();
           
        }
        catch (Exception $e){
            echo 'Erreur: '.$e->getMessage();
        }
    }

	function afficherPatient(){
		$sql="SElECT * From patient";
		$db = config::getConnexion();
		try{
		$liste=$db->query($sql);
		return $liste;
		}
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }	
	}
	function supprimerPatient($Cin){
		$sql="DELETE FROM patient where  CIN=:Cin";
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
	function modifierPatient($PatientD,$Cin){
		$sql="UPDATE patient SET  CIN=:Cin,NOM=:Nom,PRENOM=:Prenom,ADRESSE=:Adresse,PASS=:Pass WHERE CIN=:Cin";
		
		$db = config::getConnexion();
		try{		
		$req=$db->prepare($sql);
		$Cin=$PatientD->getCin();
		$Nom=$PatientD->getNom();
		$Prenom=$PatientD->getPrenom();
		$Adresse=$PatientD->getAdresse();
		$Pass=$PatientD->getPass();
       

	

		$datas = array(':Cin'=>$Cin,':Nom'=>$Nom, ':Prenom'=>$Prenom, ':Adresse'=>$Adresse,':Pass'=>$Pass);
		$req->bindValue(':Cin',$Cin);
		$req->bindValue(':Nom',$Nom);
		$req->bindValue(':Prenom',$Prenom);
		$req->bindValue(':Adresse',$Adresse);
		$req->bindValue(':Pass',$Pass);

		
		
            $s=$req->execute();
			
        }
        catch (Exception $e){
            echo " Erreur ! ".$e->getMessage();
   echo " Les datas : " ;
  print_r($datas);
        }



}



}


?>