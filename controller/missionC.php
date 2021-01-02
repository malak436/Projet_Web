<?PHP
include "C:/wamp64/www/venus curae/config.php" ;
 require_once 'C:/wamp64/www/venus curae/model/miss.php'; 
class missionC
    {
    function ajoutermission( $missionC)
    {
        $sql = "insert into mission (idvol,nombremiss,mission) values (:idvol,:nombremiss,:mission)";
        $db = config::getConnexion();
        try {
        
             $req = $db->prepare($sql);
             $req->bindValue(':idvol', $missionC->getidvol());    
             $req->bindValue(':nombremiss', $missionC->getnombremiss());
             $req->bindValue(':mission', $missionC->getmission());


            $req->execute();
        
             
        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function affichermission()
    {
        $sql = "SELECT * From mission ";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }


    function supprimermission($idtypemiss)
    {
        $sql = "DELETE FROM mission WHERE idtypemiss= :idtypemiss";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idtypemiss', $idtypemiss);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }
    function recupererm($idtypemiss){
        $sql="SELECT * from mission where idtypemiss=$idtypemiss";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




    function modifiermission($missionC, $idtypemiss)
    {
        
    try {
        $db = config::getConnexion();
        $sql= "UPDATE mission SET idtypemiss = :idtypemiss  ,nombremiss = :nombremiss,mission = :mission WHERE idtypemiss =".$_GET['idtypemiss'];
        $query = $db->prepare($sql);
      //  $query->bindValue(':id',1);
            $query->bindValue(':idtypemiss', $$missionC->getidtypemiss());
            $query->bindValue(':nombremiss', $$missionC->getnombremiss());
            $query->bindValue(':mission', $$missionC->getmission());
            
    var_dump($query);
   
        $query->execute();
        echo $query->rowCount() . " records UPDATED successfully <br>";
    } catch (PDOException $e) {
        $e->getMessage();
    }
}


function recherche($search_value)
        {
            $sql="SELECT * FROM mission where  idtypemiss like '$search_value' or mission like '%$search_value%' or idvol like '%$search_value%' or nombremiss like '%$search_value%' or typemiss like '%$search_value%' ";
    
            //global $db;
            $db =Config::getConnexion();
    
            try{
                $result=$db->query($sql);
    
                return $result;
    
            }
            catch (Exception $e){
                die('Erreur: '.$e->getMessage());
            }
        }



    

    function sortv()
    {
        $sql = "SELECT * from mission order by nombremiss desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }



    }
    
?>
