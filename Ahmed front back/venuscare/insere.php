<?php
require "connexion.php";
 
        
           $query = $pdo->prepare(
           	"INSERT INTO event (id,titre,description,nbrparticipants,lieu,datedebut,datefin,img,nbrevue,idcat)  values (default,?,?,?,?,?,?,?,?,?)"
           );
            
            $query->execute(
            	array("qwerty","desc",5,"bizerte","10-11-2020","15-11-2020","photo.png",0,1)
            );
            /*$query = $pdo->prepare(
           	'INSERT INTO categorie (idcat,libelle_cat)  values (default,:libcat)'
           );
            
            $query->execute(
            	array(
                ':libcat'=>'azerty')
            );*/
          
   ?>