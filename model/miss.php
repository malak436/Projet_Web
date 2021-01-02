<?php
class mission

{   private $idvol; 
    //private $idtypemiss;
    private  $nombremiss;
    private   $mission;

    function __construct($idvol,$mission,$nombremiss ){
                
       $this->idvol=$idvol;
   //  $this->idtypemiss=$idtypemiss;
        $this->mission=$mission;
        $this->nombremiss=$nombremiss;
    }
 function getidvol()
    {
        return $this->idvol;
    }
    function setidvol($idvol)
 {
       $this->idvol = $idvol;

        return $this;
    }
 /*  public function getidtypemiss()
    {
        return $this->idtypemiss;
    }
    public function setidtypemiss($idtypemiss)
    {
        $this->idtypemiss = $idtypemiss;

        return $this;
    }*/
    function getmission()
    {
        return $this->mission;
    }
    function getnombremiss()
    {
        return $this->nombremiss;
    }
    function setmission($mission)
    {
        $this->mission=$mission;
    }

    function setnombremiss($nombremiss)
    {
        $this->nombremiss=$nombremiss;
    }

}
?>