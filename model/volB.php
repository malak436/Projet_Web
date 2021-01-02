<?php
class volontaire

{
   // private $idvol;
    private $nom;
    private $prenom;
    private $tel;
    private $email;
    private $typemiss;
  


     public function __construct($nom,$prenom,$tel,$email,$typemiss)
    {
       // $this->idvol=$idvol;
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->tel=$tel;
        $this->email=$email;
        $this->typemiss=$typemiss;
   

    }

    //public function getidvol()
   // {
    //    return $this->idvol;
   // }
   // public function setidvol($idvol)
  //  {
 //       $this->idvol=$idvol;

      //  return $this;
   // }
    function getnom()
    {
        return $this->nom;
    }
    function getprenom()
    {
        return $this->prenom ;
    }
    function gettel()
    {
        return $this->tel;
    }

    function getemail()
    {
        return $this->email;
    }

    function gettypemiss()
    {
        return $this->typemiss;
    }
    
    
    function setnom($nom)
    {
        $this->nom=$nom;
    }
    function setprenom($prenom)
    {
        $this->prenom=$prenom;
    }
    function setemail($email)
    {
        $this->email=$email;
    }
    function settel($tel)
    {
        $this->tel=$tel;
    }

    function settypemiss($typemiss)
    {
        $this->typemiss=$typemiss;
    }
    
  
}
?>
