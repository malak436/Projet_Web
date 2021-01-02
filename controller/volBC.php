<?PHP
 require_once "C:/wamp64/www/venus curae/controller/config.php";
 

class volBC
{
    function ajoutervolantar($volontaire)
    {
        $sql = "insert into volontaire (nom,prenom,email,tel,typemiss) values (:nom,:prenom,:email,:tel,:typemiss)";
        $db = config::getConnexion();
        try {
            $req = $db->prepare($sql);
           // $req->bindValue(':cin', $volB->getcin());
            $req->bindValue(':nom', $volontaire->getnom());
            $req->bindValue(':prenom', $volontaire->getprenom());
            $req->bindValue(':email', $volontaire->getemail());
            $req->bindValue(':tel', $volontaire->gettel());
            $req->bindValue(':typemiss', $volontaire->gettypemiss());
            $req->execute();

        } catch (Exception $e) {
            echo 'Erreur: ' . $e->getMessage();
        }
    }

    function affichervol()
    {
        $sql = "SELECT * from volontaire";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }
    function afficherT()
    {
        $sql = "SELECT a.*,b.nom  from volontaire a inner join type  b on a.idvol = b.idvol";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }

    function supprimer($idvol)
    {
        $sql = "DELETE FROM volontaire WHERE idvol= :idvol";
        $db = config::getConnexion();
        $req = $db->prepare($sql);
        $req->bindValue(':idvol', $idvol);
        try {
            $req->execute();
        } catch (Exception $e) {
            die('Erreur: ' .$e->getMessage());
        }
    }
    function recuperer($idvol){
        $sql="SELECT * from volontaire where idvol=$idvol";
        $db = config::getConnexion();
        try{
            $liste=$db->query($sql);
            return $liste;
        }
        catch (Exception $e){
            die('Erreur: '.$e->getMessage());
        }
    }




    function modifier($volontaire, $idvol)
    {
        try {
            $db = config::getConnexion();
            $query = $db->prepare(
                'UPDATE volontaire SET 
						nom = :nom, 
						prenom = :prenom,
						email = :email,
						tel = :tel,
						typemiss=:typemiss
						
					WHERE idvol= :idvol'
            );

            $query->execute([
                'nom'=>$volontaire->getnom(),
                'prenom'=>$volontaire->getprenom(),
                'email'=>$volontaire->getemail(),
                'tel'=>$volontaire->gettel(),
                'typemiss'=>$volontaire->gettypemiss(),
                'idvol'=>$idvol
            ]);
            echo $query->rowCount() . " records UPDATED successfully <br>";
        } catch (PDOException $e) {
            $e->getMessage();
        }
    }
function recherche($search_value)
        {
            $sql="SELECT * FROM volontaire where  idvol like '$search_value' or nom like '%$search_value%' or prenom like '%$search_value%' or email like '%$search_value%' or tel like '%$search_value%'or typemiss like '%$search_value%' ";
    
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
        $sql = "SELECT * from volontaire order by typemiss desc";
        $db = config::getConnexion();
        try {
            $liste = $db->query($sql);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
    function AfficherPaginer($page, $perPage)
    {
        $start = ($page > 1) ? ($page * $perPage) - $perPage : 0;
        $sql = "SELECT * FROM volontaire LIMIT {$start},{$perPage}";
        $db = config::getConnexion();
        try {
            $liste = $db->prepare($sql);
            $liste->execute();
            $liste = $liste->fetchAll(PDO::FETCH_ASSOC);
            return $liste;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }
   function calcTotalRows($perPage)
    {
        $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM volontaire";
        $db = config::getConnexion();
        try {

            $liste = $db->query($sql);
            $total = $db->query("SELECT FOUND_ROWS() as total")->fetch()['total'];
            $pages = ceil($total / $perPage);
            return $pages;
        } catch (Exception $e) {
            die('Erreur: ' . $e->getMessage());
        }
    }

   
}
?>