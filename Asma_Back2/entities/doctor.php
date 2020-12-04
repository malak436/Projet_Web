<?php

class Doctor
{
	//attribus
	private $Cin;
    private $Nom;
	private $Prenom;
	private $Specialite;

	private $Pass;
    private $Salaire;
    
  	
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
   function getSpecialite()
   {
      return $this->Specialite;
   }
    function getPass()
   {
	 return $this->Pass;
   }
    function getSalaire()
  {
	 return $this->Salaire;
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
	function setSpecialite($Specialite)
	{
		$this->$Specialite=$Specialite;
	}
	 function setPass($Pass)
	{
		$this->$Pass=$Pass;
	}
 	function setSalaire($Salaire)
	{
		$this->$Salaire=$Salaire;
    }
    
        
 function __construct($Cin,$Nom,$Prenom,$Specialite,$Pass,$Salaire)
	{
		$this->Cin=$Cin;
		$this->Nom=$Nom;
		$this->Prenom=$Prenom;
		$this->Specialite=$Specialite;
		$this->Pass=$Pass;
        $this->Salaire=$Salaire;
       
	}
}
 ?>
