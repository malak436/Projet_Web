 <?php
 require "connexion.php";
                                            try{
                                                $query=$pdo->prepare(
                                                'select * FROM categorie'
                                            );
                                            $query->execute();
                                            $result = $query->fetchAll();
                                        } catch(PDOExcxeption $e) {
                                            $e->getMessage();
                                        }
                                        foreach ($result as $row) {
                                        
                                         echo $row['libelle_cat']; 
                                         
                                           }
                                            ?>