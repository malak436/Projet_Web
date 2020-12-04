<?PHP
include "../core/doctorD.php";




$Doctor=new DoctorD();
$Patient=new DoctorD();




if (isset($_POST["Cin"])){

    $Cin=$_POST['Cin'];
   
    echo "cin incorrect";

    $choix=$_POST['type'];

    
    if(!isset($_POST['type'])){ 


        echo "<SCRIPT> 
        alert('Veuillez Choisir Patient ou Docteur')
        window.location.replace('index.php');
    </SCRIPT>";
    }

    
    if(strlen($Cin)!=8)
    {
        echo "<SCRIPT> 
        alert('Cin est incorrecsst.Veuillez ressayer')
        window.location.replace('index.php');
    </SCRIPT>";
    }

    
    
    
    
    if(isset($_POST['type'])){ 
      

           
             if($choix=="Patient")
            {

                $result_patient=$Doctor->recupererPatient($Cin);


                foreach($result_patient as $row){
                    $Pass=$row['PASS'];   
                    
                                    if($Pass==($_POST["Pass"]))
                                    {
                
                                        echo "<SCRIPT> 
                                        alert('Bienvenu Patient')
                                        window.location.replace('index2.html');
                                    </SCRIPT>";
                
                
                                    }
                                    else 
                                    {
                
                
                                        echo "<SCRIPT> 
                                        alert('Mot De Passe est incorrect.Veuillez ressayer')
                                        window.location.replace('index.php');
                                    </SCRIPT>";
                
                                    }
                }

            }

        
        
        else if($choix=="Docteur")
      {  
    
        $result_doctor=$Doctor->recupererDoctor($Cin);

        foreach($result_doctor as $row){
            $Pass=$row['PASS'];   
        
            
                            if($Pass==($_POST["Pass"]))
                            {
                                echo "<SCRIPT> 
                                alert('Bienvenu Docteur')
                                window.location.replace('index2.html');
                            </SCRIPT>";
        
        
                            }
                            else 
                            {
        
        
                                echo "<SCRIPT> 
                                alert('Mot De Passe est incorrect.Veuillez ressayer')
                                window.location.replace('index.php');
                            </SCRIPT>";
        
                            }
        }
    
    
    
    
    }

    }





    




    





    
    
    
    
































}



else 
echo "prob";


?>