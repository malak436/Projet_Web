<?php

class Patient
{
	//attribus
	private $Cin;
    private $Nom;
	private $Prenom;
	private $Adresse;

	private $Pass;
    
  	
//getter

	 function getCin()
	{
		return $this->Cin;
    }
    function getNom()
    {
      return $this->Nom;
    }
    function getPrenom()
   {
      return $this->Prenom;
   }
   function getAdresse()
   {
      return $this->Adresse;
   }
    function getPass()
   {
	 return $this->Pass;
   }
    
	
  
 
  

//setter
	function setCin($Cin)
	{
		 $this->$Cin=$Cin;
	}
 	function setNom($Nom)
	{
		$this->$Nom=$Nom;
	}
	function setPrenom($Prenom)
	{
		$this->$Prenom=$Prenom;
	}
	function setAdresse($Adresse)
	{
		$this->$Adresse=$Adresse;
	}
	 function setPass($Pass)
	{
		$this->$Pass=$Pass;
	}
 	
    
        
 function __construct($Cin,$Nom,$Prenom,$Adresse,$Pass)
	{
		$this->Cin=$Cin;
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->Adresse=$Adresse;
		$this->Pass=$Pass;
       
	}
}
 ?>
