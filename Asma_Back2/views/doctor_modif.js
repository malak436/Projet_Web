function modifier_doctor()
{
var Nom=formmodifdoctor.Nom;
// var ePass=formmodifdoctor.ePass;
var Prenom=formmodifdoctor.Prenom;
var Specialite=formmodifdoctor.Specialite;
var Pass=formmodifdoctor.Pass;
var Salaire=formmodifdoctor.Salaire;

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
if(Specialite.value.length==0){
    alert('La Specialite est obligatoire');

    return false;

}
else verif=1;


if(Pass.value.length!=8)
   { alert('Le Mot de Passe doit comporter 8');

    return false;

}
else verif=1;

if(Salaire.value==0){
    alert('Le Salaire est obligatoire');

    return false;

}else verif=1;









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

