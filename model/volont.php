<?php

class volontaire
{
    //attribus
    private $cin;
    private $nom;
    private $prenom;
     private $tel;
     private $email;
     private $typemiss;





//getter

    public function getCin()
    {
        return $this->cin;
    }
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
        return $this->prenom;
    }
    public function getTel()
    {
        return $this->tel;
    }
    public  function getEmail()
    {
        return $this->email;
    }
    public  function gettypemiss()
    {
        return $this->typemiss;
    }






//setter

    public function setNom($nom)
    {
        $this->$nom=$nom;
    }
    public function setPrenom($prenom)
    {
        $this->$prenom=$prenom;
    }
    public function setTel($tel)
    {
        $this->$tel=$tel;
    }
public function setEmail($email)
    {
        $this->$email=$email;
    }
    public function settypemiss($typemiss)
    {
        $this->$typemiss=$typemiss;
    }



    public function __construct($nom,$prenom,$tel,$email,$typemiss)
    {
        $this->nom=$nom;
        $this->prenom=$prenom;
        $this->tel=$tel;
        $this->email=$email;
        $this->typemiss=$typemiss;
    }
}
?>