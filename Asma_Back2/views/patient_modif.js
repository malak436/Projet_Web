function modifier_Patient()
{
var Nom=formmodifPatient.Nom;
// var ePass=formmodifPatient.ePass;
var Prenom=formmodifPatient.Prenom;
var Adresse=formmodifPatient.Adresse;
var Pass=formmodifPatient.Pass;

var verif=-1;




if(Nom.value.length==0){
    alert('Le Nom est obligatoire');

    return false;

}
else verif=1;
if(Prenom.value.length==0){
    alert('Le Prenom est obligatoire');

    return false;

}
else verif=1;
if(Adresse.value.length==0){
    alert('La Adresse est obligatoire');

    return false;

}
else verif=1;


if(Pass.value.length!=8)
   { alert('Le Mot de Passe doit comporter 8');

    return false;

}
else verif=1;














if(verif==1)
{
    alert('Merci Pour la modfication');

return true;
}





}



function testPass(Pass){

        var test=0;
        for(let i = 0; i < Pass.value.length; i++) {
    if(Pass.value[i]=="@")
    {test++;
    
    }}
        for(let i = 0; i < Pass.value.length; i++) {
    if((test==1)&&(Pass.value[i]=="."))
    {if(Pass.value.length>i+1)
        return true;
    }}
    return false;





}

